<?php
require_once('connexion.php');

  class Questions
  {
    private $id_question;
    private $libelle;
    private $typeQuestion;


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
   

    

    public static function recupQuestion($id_TypeQuestion)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_question, libelle, id_TypeQuestion FROM questions WHERE id_TypeQuestion = ?');
      $req->execute(array($id_TypeQuestion));

      
      
      foreach ($req->fetchAll() as $data)
      {
        $question= new Questions();
        $question->setId_question($data['id_question']);
        $question->setLibelle($data['libelle']);
        $question->setTypeQuestion($data['id_TypeQuestion']);
        

        $list []=  $question;
      }
      //var_dump($list);
      return $list ;
    }

    

}









