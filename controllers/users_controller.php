<?php


require_once('models/users.php');
/* Définition du controller */
class UsersController
{


// page d'authentification
public function login()
{
	  set_route('views/Login.php');
}
public function connexion()
{
	//intance e la classe modele
    $user= new Users();
		$email= htmlspecialchars($_POST['email']);
		$password= htmlspecialchars($_POST['password']);
        if($email!="" && $password!="")
        {
	        if($user->Connexion($email,$password)== 1)
	        	$this->redirection();	// on appelle la fonction de redirection
	        else
	           set_route('views/Login.php');
   		}
	    else 
	    {
        if(isset($_SESSION['connecté']))
	    		$this->redirection();	// on appelle la fonction de redirection
	    	else
	    		set_route('views/Login.php');
	    }
}








public static function deconnexion()
{
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // on effectue un traitement spécifique pour l'ajax

		echo "je fais de l'ajax";

			//set_route('index.php?controller=page?action=home');

	}
	else{
		//echo "je fais de l'ajax";
	$user= new Users();
	$user->Deconnexion();

	set_route('views/Login.php');
	}
}

}

?>
