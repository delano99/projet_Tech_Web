<?php
require_once('connexion.php');

  class Questions
  {
    private $id_question;
    private $libelle;
    private $typeQuestion;
    private $tQuestion;


    public function __construct(){}

    public function getId_question()
    {
    return $this->id_question;
    }    

    public function getLibelle()
    {
    return $this->libelle;
    }

    public function getTypeQuestion()
    {
    return $this->typeQuestion;
    } 
    
    public function getTQuestion()
    {
    return $this->tQuestion;
    }

    
    // les set              


    public function setId_question($id_question)
    {
      $this->id_question=$id_question;
    }

    public function setLibelle($libelle)
    {
      $this->libelle=$libelle;
    }
         
    public function setTypeQuestion($typeQuestion)
    {
      $this->typeQuestion=$typeQuestion;
    }

    public function setTQuestion($tQuestion)
    {
      $this->typeQuestion=$tQuestion;
    }
   

    

    public static function recupQuestion($id_TypeQuestion,$tquestion)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_question, libelle, id_TypeQuestion, tquestion FROM questions WHERE id_TypeQuestion = ? and tquestion =?');
      $req->execute(array($id_TypeQuestion,$tquestion));

      
      
      foreach ($req->fetchAll() as $data)
      {
        $question= new Questions();
        $question->setId_question($data['id_question']);
        $question->setLibelle($data['libelle']);
        $question->setTypeQuestion($data['id_TypeQuestion']);
        $question->setTQuestion($data['tquestion']);

        $list []=  $question;
      }
      //var_dump($list);
      return $list ;
    }

    
    public static function recupAllQuestion()
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->query('SELECT id_question, libelle, id_TypeQuestion, tquestion FROM questions order by id_question');
      
      
      foreach ($req->fetchAll() as $data)
      {
        $question= new Questions();
        $question->setId_question($data['id_question']);
        $question->setLibelle($data['libelle']);
        $question->setTypeQuestion($data['id_TypeQuestion']);
        $question->setTQuestion($data['tquestion']);

        $list []=  $question;
      }
      //var_dump($list);
      return $list ;
    }

    public static function addQuestion($libelle, $typeQuestion)
    {
      $Db = new config();
      $db = $Db::getInstance();
      $tques = 1;

        $addQuestion = $db->prepare('INSERT INTO questions (libelle, id_TypeQuestion, tquestion) VALUES (?,?,?)');
				$addQuestion->execute(array($libelle, $typeQuestion, $tques));   // rajouter une exception à ce niveau
    }

    public static function recupIdQuestion($libelle)
    {
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_question, libelle, id_TypeQuestion, tquestion FROM questions WHERE libelle = ? ');
      $req->execute(array($libelle));
      
      
      foreach ($req->fetchAll() as $data)
      {
        $question= new Questions();
        $question->setId_question($data['id_question']);
        $question->setLibelle($data['libelle']);
        $question->setTypeQuestion($data['id_TypeQuestion']);
        $question->setTQuestion($data['tquestion']);

        
      }
      //var_dump($list);
      return $question ;
    }

    public static function deletQuest($id_q)
    {
      $Db = new config();
      $db = $Db::getInstance();

        $addQuestion = $db->prepare('DELETE FROM questions WHERE id_question = ?');
				$addQuestion->execute(array($id_q));
    }

    public static function recupQuest($id_Question)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_question, libelle, id_TypeQuestion, tquestion FROM questions WHERE id_question = ? ');
      $req->execute(array($id_Question));

      
      
      foreach ($req->fetchAll() as $data)
      {
        $question= new Questions();
        $question->setId_question($data['id_question']);
        $question->setLibelle($data['libelle']);
        $question->setTypeQuestion($data['id_TypeQuestion']);
        $question->setTQuestion($data['tquestion']);

        
      }
      //var_dump($list);
      return $question ;
    }

    
    public static function updateQuest($id_q, $libelle, $dif)
    {
      $Db = new config();
      $db = $Db::getInstance();

      $req= $db->prepare(" UPDATE questions as q  SET q.libelle= ?, q.id_TypeQuestion = ? WHERE q.id_question = ?"); 
      $req->execute(array($libelle,$dif,$id_q));
    }
    

}









