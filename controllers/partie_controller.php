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
			 set_data(Reponses::recupReponse(3,1)); // on récupère la liste des questions de notre bdd
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
			 set_donnees1(Questions::recupQuestion(2,1)); // on récupère la liste des questions de notre bdd
			 set_donnees2(Questions::recupQuestion(2,2)); 
			 set_rep1(Reponses::recupReponse(2,1)); // on récupère la liste des questions de notre bdd
			 set_rep2(Reponses::recupReponse(2,2)); // on récupère la liste des questions de notre bdd
			 set_controller_report('page');
			 set_fonction_back('home');

			 set_route('views/quizz_moyen.php');
		}
			else
					set_route('views/login.php');
	}

	
	public function game1()
	{

		if( isset($_SESSION['id_user']))
		{    
			 set_donnees1(Questions::recupQuestion(1,1)); // on récupère la liste des questions de notre bdd
			 set_donnees2(Questions::recupQuestion(1,2)); 
			 set_donnees3(Questions::recupQuestion(1,3)); 
			 set_rep1(Reponses::recupReponse(1,1)); // on récupère la liste des questions de notre bdd
			 set_rep2(Reponses::recupReponse(1,2));
			 set_rep3(Reponses::recupReponse(1,3)); // on récupère la liste des questions de notre bdd
			 set_controller_report('page');
			 set_fonction_back('home');

			 set_route('views/quizz_difficile.php');
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
			//var_dump($selected);
	
			foreach($donnees as $elt)
			{
				//var_dump($selected[$elt->getId_question()]);
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
			//var_dump($list);
			Parties::inputPart($counter, $_SESSION['id_user'], 3);
			set_donnees(Questions::recupQuestion(3,1)); // on récupère la liste des questions de notre bdd
			set_data(Reponses::recupReponse(3,1)); // on récupère la liste des questions de notre bdd
			set_donnees1($list);
			set_donnees2($counter);
			set_controller_report('page');
			set_fonction_back('home');


			set_route('views/quizz_facile.php');
		}
	}
	
	
	public function verif_game2()
	{
		if(isset($_POST['id_q']))
		{
			$list1 = [];
			$list2 = [];
			$counter =0;
			$donnees1 = Questions::recupQuestion(2,1);
			$donnees2 = Questions::recupQuestion(2,2);
			//var_dump($donnees);
			$selected1 = $_POST['quizcheck1'];
			$selected2 = $_POST['quizcheck2'];
			//var_dump($selected);
	
			foreach($donnees1 as $elt)
			{
				//var_dump($selected[$elt->getId_question()]);
				$list_reponse =  Reponses::recupValeur($selected1[$elt->getId_question()]);
				//
				foreach($list_reponse as $reponse)
				{
					if($reponse->getValeur() == 1)
					{
						$counter++;
					}

					$list1 [] = $reponse;
				}	

			}

			foreach($donnees2 as $elt)
			{
				//var_dump($selected[$elt->getId_question()]);
				$list_reponse =  Reponses::recupValeur($selected2[$elt->getId_question()]);
				//
				foreach($list_reponse as $reponse)
				{
					if($reponse->getValeur() == 1)
					{
						$counter++;
					}

					$list2 [] = $reponse;
				}	

			}
			//var_dump($list);
			Parties::inputPart($counter, $_SESSION['id_user'], 2);
			set_donnees1(Questions::recupQuestion(2,1)); // on récupère la liste des questions de notre bdd
			set_donnees2(Questions::recupQuestion(2,2)); 
			set_rep1(Reponses::recupReponse(2,1)); // on récupère la liste des questions de notre bdd
		  set_rep2(Reponses::recupReponse(2,2)); // on récupère la liste des questions de notre bdd
			set_rep_send1($list1);
			set_rep_send2($list2);
			set_counter($counter);
			set_controller_report('page');
			set_fonction_back('home');

			set_route('views/quizz_moyen.php');
		}
	}

























  public  function account()
  {
		
			set_donnees1(Parties::recupPartie($_SESSION['id_user'],1));
			set_donnees2(Parties::recupPartie($_SESSION['id_user'],2));
			set_donnees3(Parties::recupPartie($_SESSION['id_user'],3));
			set_data(Users::recupUser($_SESSION['id_user']));
	
			set_route('views/mon_profil.php');

  }
            
            
}


  

?>












