<?php
require_once('connexion.php');

  class Reponses
  {
    private $id_question;
    private $valeur;
    private $libelle;
    private $id_reponse;


    public function __construct(){}

    public function getId_question()
    {
    return $this->id_question;
    } 

    public function getValeur()
    {
    return $this->valeur;
    }    

    public function getLibelle()
    {
    return $this->libelle;
    }

    public function getId_reponse()
    {
    return $this->id_reponse;
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
         
    public function setValeur($valeur)
    {
      $this->valeur=$valeur;
    }

    public function setId_reponse($id_reponse)
    {
    return $this->id_reponse=$id_reponse;
    }  
   

    

    public static function recupReponse($id_TypeQuestion,$tquestion)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT r.id_reponse , r.libelle, r.valeur, q.id_question FROM reponses as r, questions as q WHERE r.id_question = q.id_question and q.id_TypeQuestion =? and q.tquestion = ?');
      $req->execute(array($id_TypeQuestion,$tquestion));
      
      
      foreach ($req->fetchAll() as $data)
      {
        $reponse= new Reponses();
        $reponse->setId_reponse($data['id_reponse']);
        $reponse->setLibelle($data['libelle']);
        $reponse->setValeur($data['valeur']);
        $reponse->setId_question($data['id_question']);
        

        $list []=  $reponse;
      }
      return $list ;
    }

    public static function recupValeur($id_reponse)
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT r.id_reponse , r.valeur, r.libelle , q.id_question  FROM reponses as r, questions as q WHERE r.id_question = q.id_question and r.id_reponse =?');
      $req->execute(array($id_reponse));
      
      
      foreach ($req->fetchAll() as $data)
      {
        $reponse= new Reponses();
        $reponse->setId_reponse($data['id_reponse']);
        $reponse->setLibelle($data['libelle']);
        $reponse->setValeur($data['valeur']);
        $reponse->setId_question($data['id_question']);
        $list []=  $reponse;
      }
      return $list ;
      
    }
}









