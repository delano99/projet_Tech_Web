<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'page':
        $controller = new PageController();  
        break;
      case 'users':
        $controller = new UsersController();
        break;
      case 'partie':
        $controller = new PartiesController();
        break;
      /*case 'admin':
        $controller = new TuteursController();
        // break;*/
    }
    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array(
                       'users' => ['login','inscription','connexion','deconnexion','resetPassword','forgotPassword','update_account','modify_account','profil','create_account','redirection'],
                       'page'=>['home','about'],
                       'partie' => ['begin_game'] 
                       );
  if (array_key_exists($controller, $controllers))
  {
    if (in_array($action, $controllers[$controller])) 
    {
      
      call($controller, $action);
      $_GET['controller']= randomKey();
      $_GET['action']= randomKey();
    }
     else 
    {
      session_destroy();
      
      $message= 'action introuvable';
      $error_msg = "La page que vous cherchez n'existe pas !";
      require_once('views/system/error.php');
    }
  }
   else 
  {   
      session_destroy();
      
      $message= 'controller introuvable';
      $error_msg = "La page que vous cherchez n'existe pas !";
      require_once('views/system/error.php');
  }

  function randomKey() 
   {
      $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $key = array(); //remember to declare $pass as an array
      $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
      for ($i = 0; $i < 8; $i++) {
          $n = rand(0, $alphaLength);
          $key[] = $alphabet[$n];
      }
      return implode($key); //turn the array into a string thanks to implode function
  }
  
  

?>