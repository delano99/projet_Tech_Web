<?php


require_once('models/users.php');
require_once('models/questions.php');
require_once('models/reponses.php');
require_once('models/parties.php');
/* Définition du controller */
class PartiesController
{


// page d'authentification
public  function begin_game()
	{
			
		if( isset($_SESSION['id_user']))
		{    
			 set_donnees(Questions::recupQuestion($_POST['niv'])); // on récupère la liste des questions de notre bdd
			 set_data(Reponses::recupReponse($_POST['niv'])); // on récupère la liste des questions de notre bdd
			 set_controller_report('page');
			 set_fonction_back('home');

			 set_route('views/quizz.php');
		}
			else
					set_route('views/login.php');
  }
  
  public  function verif_game()
  {
		$counter =0;
		$donnees = Questions::recupQuestion($_POST['id_q']);
		$selected = $_POST['quizcheck'];
		//var_dump($selected);

		foreach($donnees as $elt)
		{
			if($selected[$elt->getId_question()] == 1)
			{
				$counter++;
			}
		}

		Parties::inputPart($counter, $_SESSION['id_user'], $_POST['id_q']);
		set_donnees(Parties::recupPartie($_SESSION['id_user']));
		set_data(Users::recupUser($_SESSION['id_user']));

		set_res($counter);

		switch($_POST['id_q']) {
      case 1:
        $dif = "Difficile";  
        break;
      case 2:
        $dif = "Moyen";
        break;
      case 3:
        $dif = "Facile";
        break;
			}
			set_message($dif);

		set_route('views/mon_profil.php');

  }
            
            
}


  

?>












