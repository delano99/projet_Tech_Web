	<?php
    session_start();
	include('connexion.php');
	/*require ('PHPMailer/PHPMailerAutoload.php');
	require ('connectToMail.php');*/
	$Db = new config();
	$bd = $Db::getInstance();
    
    $error= 0;

	//Déclaration d'une clé de sécurité'
	function randomKey() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $key = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $key[] = $alphabet[$n];
	    }
	    return implode($key); //turn the array into a string thanks to implode function
	}
    
    
	if ($_POST['email']!="" && $_POST['password']!="" && $_POST['confirmer_password']!="" && $_POST['nom']!="" && $_POST['prenom']!="" ) {
		//Dans ce cas, les champs ont été remplis

		//tutoré
		$login_mail = htmlspecialchars($_POST['email']);
		$pwd = htmlspecialchars($_POST['password']);
		$pwd2 = htmlspecialchars($_POST['confirmer_password']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		
		// creation compte utilisateur

		if ($pwd === $pwd2) {
		
			$request = $bd->prepare('SELECT u.email from users as u WHERE u.email = ?');
			$request->execute(array($login_mail));

			
			//On regarde si le mail n'est pas déjà utilisé pour un compte valide!
			if ($request->rowCount() == 0 /*aucun compte avec ce login*/) 
			{  
				$id_type_user = 2;
				// puis son nom et prénom dans la table user
				$addCompte = $bd->prepare('INSERT INTO users (nom, prenom, email, id_type_user, password) VALUES (?,?,?,?,?)');
				$addCompte->execute(array($nom, $prenom, $login_mail,$id_type_user,password_hash($pwd,PASSWORD_DEFAULT)));   // rajouter une exception à ce niveau
				header('location:index.php?controller=users&action=login');									
			}
					
			else 
			{
				//login déjà utilisé pour un compte valide
				$_SESSION['alert']= "&nbsp <strong>Cette adresse e-mail ne vous appartient pas.
				il se pourrait que vous ou un autre utilisateur se soit deja incrit en utilisant cette adresse mail.
				S'il s'agit de vous, alors rendez-vous dans la rubrique mot de passe oublié.
				si tel n'est pas le cas utilisez une autre adresse email \"valide\" cela va de soi</strong>";
				header('location:index.php?controller=users&action=inscription');
				//On le redirige vers la page de login
			}
		
		}
		else {
			//pwd et confirmation différente
			//login déjà utilisé pour un compte valide
			$_SESSION['alert']= "&nbsp &nbsp &nbsp &nbsp<strong>  Mots de passe différents</strong>";
			header('location:index.php?controller=users&action=inscription');
		     }
	}
	else{
		//Champs non remplis
		//login déjà utilisé pour un compte valide
		$_SESSION['alert']= "&nbsp <strong>Champs non remplis</strong>";
		header('location:index.php?controller=users&action=inscription');
	}
?>
