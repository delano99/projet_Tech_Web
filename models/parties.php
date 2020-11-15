<?php
require_once('connexion.php');

  class Parties
  {
    private $id_partie;
    private $score;
    private $id_typeQuestion;
    private $id_user;


    public function __construct(){}

    public function getId_partie()
    {
    return $this->id_partie;
    }    

    public function getScore()
    {
    return $this->score;
    }

    public function getTypeQuestion()
    {
    return $this->id_typeQuestion;
    }   

    public function getId_users()
    {
    return $this->id_user;
    }  

    
    // les set              


    public function setId_partie($id_partie)
    {
      $this->id_partie=$id_partie;
    }

    public function setScore($score)
    {
      $this->score=$score;
    }
         
    public function setTypeQuestion($id_typeQuestion)
    {
      $this->id_typeQuestionn=$id_typeQuestion;
    }

    public function setId_users($id_user)
    {
      $this->id_user= $id_user;
    }  
   

    

    public static function inputPart($score,$id_user,$id_TypeQuestion)
    {
      $Db = new config();
      $db = $Db::getInstance();
      
      $req= $db->prepare("INSERT INTO parties(score,id_user,id_typeQuestion) VALUES(?,?,?)");
      $req->execute(array($score,$id_user,$id_TypeQuestion));
        
    }

    public static function recupPartie($id_user)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_partie, score,id_user, libelle FROM parties as p , type_question as tq WHERE id_user = ? and p.id_typeQuestion=tq.id_typeQuestion');
      $req->execute(array($id_user));

      foreach ($req->fetchAll() as $data)
      {
        $partie= new Parties();
        $partie->setId_partie($data['id_partie']);
        $partie->setScore($data['score']);
        $partie->setId_users($data['id_user']);
        

        $list []= array('partie'=>$partie,'libelle'=>$data['libelle']);
      }
      //var_dump($list);
      return $list ;
    }


    

}









