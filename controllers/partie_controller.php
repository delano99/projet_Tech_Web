<?php


require_once('models/users.php');
require_once('models/questions.php');
require_once('models/reponses.php');
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

}

?>












