<?php

class arbre {

   public static function nave($controller, $action) {
      $instance;
      if(isset($instance))
      {
           if(preg_match('#interface#', $action))
           {
               $instance=[];
               return $instance;
           }
            
           else
           {
               array_push($instance, array('controller'=>$controller, 'action'=>$action));
               return $instance;
           }
              
      }
      else
      {
         $instance [] = array('controller'=>$controller, 'action'=>$action);
         return $instance;
      }    
   }
 }

 /*if(isset($tab))
 {
      if(preg_match('#interface#', $action))
         $tab=[];
      else
         array_push($tab, array('controller'=>$controller, 'action'=>$action));
 }
 else
     $tab [] = array('controller'=>$controller, 'action'=>$action);
 return $tab;*/
            
 ?>
