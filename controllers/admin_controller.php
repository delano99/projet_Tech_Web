<?php
/* Définition du controller */
require_once('models/users.php');
require_once('models/questions.php');
require_once('models/reponses.php');
require_once('models/parties.php');
class AdminsController
{

	// page d'authentification
	public function player()  
	{
		 set_donnees1(Users::recupUserScore());
	   set_route('views/players.php');
	}

	public function interface()
	{
		set_route('views/interface.php');
	}

	public function vAddQuestion()
	{
		set_route('views/addQuestion.php');
	}

	public function AddQuestion()
	{
		if ($_POST['lib_ques']!="" && $_POST['lib_b_rep']!="" && $_POST['lib_m1_rep']!="" && $_POST['lib_m2_rep']!="" && $_POST['niv_difficulter']!="" ) {
			//Dans ce cas, les champs ont été remplis
	
			//tutoré
			$lib_ques = htmlspecialchars($_POST['lib_ques']);
			$lib_b_rep = htmlspecialchars($_POST['lib_b_rep']);
			$lib_m1_rep = htmlspecialchars($_POST['lib_m1_rep']);
			$lib_m2_rep = htmlspecialchars($_POST['lib_m2_rep']);
			$niv_difficulter = htmlspecialchars($_POST['niv_difficulter']);
			
			/*var_dump($lib_ques);
			var_dump($lib_b_rep);
			var_dump($lib_m1_rep);
			var_dump($lib_m2_rep);
			var_dump($niv_difficulter);*/
			
			// creation question

			Questions::addQuestion($lib_ques, $niv_difficulter);

			$question = Questions::recupIdQuestion($lib_ques);

			//var_dump($question);

			Reponses::addReponse($question->getId_question(), $lib_b_rep, 1);
			Reponses::addReponse($question->getId_question(), $lib_m1_rep, 0);
			Reponses::addReponse($question->getId_question(), $lib_m2_rep, 0);
	
			AdminsController::myQuestion();
			
			}
		
		
		else{
			//Champs non remplis
			//login déjà utilisé pour un compte valide
			$_SESSION['alert']= "&nbsp <strong>Champs non remplis</strong>";
			echo "erreur";
			header('location:index.php?controller=admin&action=AddQuestion');
		}
	}

	public function modify_question()
	{
		if(isset($_POST['supprimer']))
		{
			$id_q = htmlspecialchars($_POST['id_q']);
			Questions::deletQuest($id_q);
			Reponses::deletRep($id_q);
			AdminsController::myQuestion();
		}
	}

	public static function myQuestion()
	{
		set_donnees1(Questions::recupAllQuestion());
		set_route('views/questionList.php');
	}

	public function consultQuestion()
	{

	}

}
?>	