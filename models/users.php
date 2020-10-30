<?php
require_once('connexion.php');

  class Users
  {
    private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $password;

    public function __construct(){}

    public function getId_user()
    {
    return $this->id_user;
    }    

    public function getNom()
    {
    return $this->nom;
    }

    public function getPrenom()
    {
    return $this->prenom;
    }    

    public function getEmail()
    {
    return $this->email;
    }
    public function getChemin_photo()
    {
    return $this->chemin_photo;
    }
    public function getPassword()
    {
    return $this->password;
    }       
    
    // les set              

    public function setId_user($user_id)
    {
      $this->id_user=$user_id;
    }

    public function setNom($nom)
    {
      $this->nom=$nom;
    }

    public function setPrenom($prenom)
    {
      $this->prenom=$prenom;
    }
         
    public function setEmail($mail)
    {
      $this->email=$mail;
    }
   public function setPassword($pwd)
    {
      $this->password=$pwd;
    }

    

 public function Connexion($email,$pwd)
 {  
      
    $Db = new config();
    $db = $Db::getInstance();

    
    $request = $db->prepare('SELECT u.id_user as id,u.password as mdp  FROM users as u  WHERE u.email= ? ');
    $request->execute(array($email));
    while( $elt= $request->fetch()){
      $id= $elt['id'];
      $password= $elt['mdp'];
 }
    if ($request->rowCount() == 1 && password_verify($pwd,$password))
    {
         
         $_SESSION['id_user']= $id;
         
         //on recupere l'ID du statut de l'user
         $request=$db->query('SELECT us.nom as nom,us.prenom as prenom,us.email as mail from users as us WHERE  id_user = '.$_SESSION['id_user'].'');
         $res = $request->fetch();
         
         
         $_SESSION['connecté']='connecté';
         $_SESSION['email']=$res['mail'];
         $_SESSION['nom']=$res['nom'];
         $_SESSION['prenom']=$res['prenom'];
         //exit('authentification success');
    } 
    else
    {
      //echo $request->rowCount();
        $_SESSION['alert']= "<strong>email et/ou mot de passe incorrects<strong/>";
    }
    return ($request->rowCount()) ;
 }

 