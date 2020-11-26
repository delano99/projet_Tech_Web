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
    while( $elt= $request->fetch()) 
    {
      $id= $elt['id'];
      $password= $elt['mdp'];
    }
    if ($request->rowCount() == 1 && password_verify($pwd,$password))
    {
         
         $_SESSION['id_user']= $id;
         
         //on recupere l'ID du statut de l'user
         $request=$db->query('SELECT us.nom as nom,us.prenom as prenom,us.email as mail, us.id_type_user as id_type_user from users as us WHERE  id_user = '.$_SESSION['id_user'].'');
         $res = $request->fetch();
         
         
         $_SESSION['connecté']='connecté';
         $_SESSION['email']=$res['mail'];
         $_SESSION['nom']=$res['nom'];
         $_SESSION['prenom']=$res['prenom'];
         $_SESSION['type_user']=$res['id_type_user'];
         //exit('authentification success');
    } 
    else
    {
      //echo $request->rowCount();
        $_SESSION['alert']= "<strong>email et/ou mot de passe incorrects<strong/>";
    }
    return ($request->rowCount()) ;
 }

    public function Deconnexion()
    {
      session_destroy();
      header('Location: ?controller=users&action=login');
    }


    public static function recupUser($id_user)
    {
      $Db = new config();
      $db = $Db::getInstance();
      
      $req=$db->prepare('SELECT id_user, nom,prenom, email FROM users WHERE id_user = ? ');
      $req->execute(array($id_user));

      foreach ($req->fetchAll() as $data)
      {
      
        $user = new Users();
        $user->setId_user($data['id_user']);
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setEmail($data['email']);

      }
      //var_dump($list);
      return $user ;
    }

    public static function recupUserScore()
    {
      $list=[];
      $Db = new config();
      $db = $Db::getInstance();

      $req=$db->query('SELECT u.nom, u.id_user, u.prenom ,COUNT(p.score) AS score FROM parties p INNER JOIN users u ON u.id_user = p.id_user GROUP BY u.id_user ORDER BY score DESC');

      foreach ($req->fetchAll() as $data)
      {
      
        $user = new Users();
        $user->setId_user($data['id_user']);
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        
        $list []= array('user'=>$user,'score'=>$data['score']);
      }

      //var_dump($list);
      return $list ;
    }

}