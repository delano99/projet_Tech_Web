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
	
	public function game3()
	{

		if( isset($_SESSION['id_user']))
		{    
			 set_donnees(Questions::recupQuestion(3,1)); // on récupère la liste des questions de notre bdd
			 set_data(Reponses::recupReponse(3)); // on récupère la liste des questions de notre bdd
			 //var_dump(Questions::recupQuestion(3,1));
			 //var_dump(Reponses::recupReponse(3));
			 set_controller_report('page');
			 set_fonction_back('home');

			 set_route('views/quizz_facile.php');
		}
			else
					set_route('views/login.php');
	}

	public function game2()
	{

		if( isset($_SESSION['id_user']))
		{    
			 set_donnees(Questions::recupQuestion(2,1)); // on récupère la liste des questions de notre bdd
			 set_donnees1(Questions::recupQuestion(2,2)); 
			 set_data(Reponses::recupReponse(3)); // on récupère la liste des questions de notre bdd
			 set_controller_report('page');
			 set_fonction_back('home');

			 set_route('views/quizz_moyen.php');
		}
			else
					set_route('views/login.php');
	}

	
	

	public function verif_game3()
	{
		if(isset($_POST['id_q']))
		{
			$list = [];
			$counter =0;
			$donnees = Questions::recupQuestion(3,1);
			//var_dump($donnees);
			$selected = $_POST['quizcheck'];
			var_dump($selected);
	
			foreach($donnees as $elt)
			{
				var_dump($selected[$elt->getId_question()]);
				$list_reponse =  Reponses::recupValeur($selected[$elt->getId_question()]);
				//
				foreach($list_reponse as $reponse)
				{
					if($reponse->getValeur() == 1)
					{
						$counter++;
					}

					$list [] = $reponse;
				}	

			}
			var_dump($list);
			Parties::inputPart($counter, $_SESSION['id_user'], 3);
			set_donnees(Questions::recupQuestion(3,1)); // on récupère la liste des questions de notre bdd
			set_data(Reponses::recupReponse(3)); // on récupère la liste des questions de notre bdd
			set_donnees1($list);
			set_donnees2($counter);


			set_route('views/quizz_facile.php');
		}
	}
  
  public  function verif_game()
  {
		if(isset($_POST['id_q']))
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
			set_donnees1(Parties::recupPartie($_SESSION['id_user'],1));
			set_donnees2(Parties::recupPartie($_SESSION['id_user'],2));
			set_donnees3(Parties::recupPartie($_SESSION['id_user'],3));
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

		else{

			set_donnees1(Parties::recupPartie($_SESSION['id_user'],1));
			set_donnees2(Parties::recupPartie($_SESSION['id_user'],2));
			set_donnees3(Parties::recupPartie($_SESSION['id_user'],3));
			set_data(Users::recupUser($_SESSION['id_user']));
	
			set_route('views/mon_profil.php');
		}
		

		

  }
            
            
}


  

?>












