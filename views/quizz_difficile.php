
  
<div>
       <!--   <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Complete Quiz Website using PHP and MYSQL using Session</h1><br>
      <div class="container "><br> -->
         <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >  Complete Quiz Website using PHP and MYSQL using Session </h1><br>
      <div class="container "><br>
         <div class="container">
         
            <!-- <h1 class="text-center text-success text-uppercase animateuse" >  ThapaTechnical  Webdeveloper Quiz </h1>
            <br> -->
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['nom']; ?>,</a> Welcome to ThapaTechnical Quiz </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['nom']; ?>, you have to select only one out of 4. Best of Luck <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               <br>
               <form action="?controller=partie&action=verif_game1" method="post">
                  <?php
                  if(!isset($rep_send1) || !isset($rep_send2) || !isset($rep_send3))
                  {

                  
                     foreach ($donnees1 as $elt) 
                      {
                     	?>				
                  			
                        <br>
                        <div class="card">
                           <br>
                           <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                        
                           <?php
                           //var_dump($rep1);
                           foreach ($rep1 as $dat) 
                           {
                              if($elt->getId_question() == $dat->getId_question())
                              { 
                              ?>	
                                 
                           <div class="card-block">
                              <input type="radio" name="quizcheck1[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getId_reponse(); ?>" > <?=$dat->getLibelle()?> 
                              <br>
                           </div>
                           <?php
                              
                           }
                     } 
                  } 
                  ?>
                  <div class="card">
                            <p class="card-header text-center" > Select juste la questions suivantes<i class="fas fa-thumbs-up"></i>	 </p>
                        </div>
                  <?php
                  foreach ($donnees3 as $elt) 
                      {
                     	?>				
                  			
                        <br>
                        </div>
                        <div class="card">
                           <br>
                           <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                        
                           <?php
                           //var_dump($rep1);
                           foreach ($rep3 as $dat) 
                           {
                              if($elt->getId_question() == $dat->getId_question())
                              { 
                              ?>	
                                 
                           <div class="card-block">
                              <input type="text" name="quizcheck1[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="" >
                              <br>
                           </div>
                           <?php
                              
                           }
                     } 
                  }
                  ?>
                  <div class="card">
                            <p class="card-header text-center" >  Select juste la bonne reponse pour questions suivantes<i class="fas fa-thumbs-up"></i>	 </p>
                        </div>
                  <?php

                  foreach ($donnees2 as $elt) 
                      {
                     	?>				
                  			
                        <br>
                        
                        
                        <div class="card">
                           <br>

                           <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                           <select name="quizcheck2[<?=$elt->getId_question()?>]" id="pet-select">
                              <option value="">--Please choose an option--</option>
                           <?php
                           foreach ($rep2 as $dat) 
                           {
                              if($elt->getId_question() == $dat->getId_question())
                              { 
                              ?>
                              <option value="<?php echo $dat->getId_reponse(); ?>"><?=$dat->getLibelle()?></option>
                              
                           <?php
                              
                           }
                     } 
                     ?>
                     </select>
                     <?php
                  } 


               }

               else
               {
                  
                  $i = 0;
                  $j=0;
                  
                  foreach ($donnees1 as $elt) 
                      {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                    
                     <?php
                      foreach ($rep1 as $dat)
                      { 
                       
                        if($elt->getId_question() == $dat->getId_question())
                        {
                           
                              
                              if($rep_send1[$i]->getId_reponse() == $dat->getId_reponse())
                              {
                                 if($rep_send1[$i]->getValeur() == 0)
                                 {
                                     
                                    ?>	
                                       
                                    <div class="card-block">
                                       <input type="radio" checked="checked" name="quizcheck[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getId_reponse(); ?>" > <?=$dat->getLibelle()?> 
                                       <span style="color: black; font-style: oblique; background : red;">  &nbsp;&nbsp;mauvaise reponse    </span> </br>
                                    </div>
                                    <?php
                                    
                                  }
                              else if($rep_send1[$i]->getValeur() == 1)
                                 {
                                    
                                       ?>
                                       <div class="card-block">
                                          <input type="radio" checked="checked" name="quizcheck[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getId_reponse(); ?>" > <?=$dat->getLibelle()?> 
                                          <span style="color: black; font-style: oblique; background : green;">	  &nbsp;&nbsp;Bonne reponse    </span> </br>
                                 
                                       </div>
                                       <?php
                                        
                                 }
                             

                            }
                              else
                                 {
                                    ?>
                                    <div class="card-block">
                                       <input type="radio" name="quizcheck[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getId_reponse(); ?>" > <?=$dat->getLibelle()?> 
                                       
                                       <br>
                                    </div>
                                    <?php
                                 } 
                        
                                   
                        }
                      
                  } 
                  $i++;
               }

               foreach ($donnees2 as $elt) 
                      {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     
                     <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                     <select name="quizcheck2[<?=$elt->getId_question()?>]" id="pet-select">
                              <option value="">--Please choose an option--</option>
                    
                     <?php
                      foreach ($rep2 as $dat)
                      { 
                       
                        if($elt->getId_question() == $dat->getId_question())
                        {
                           
                              
                              if($rep_send2[$j]->getId_reponse() == $dat->getId_reponse())
                              {
                                 if($rep_send2[$j]->getValeur() == 0)
                                 {
                                     
                                    ?>	
                                    <option  value="<?php echo $dat->getId_reponse(); ?>" style="color:red;" selected><?=$dat->getLibelle()?></option>
                                    
                                    <?php
                                    
                                  }
                              else if($rep_send1[$j]->getValeur() == 1)
                                 {
                                    
                                       ?>
                                      <option  value="<?php echo $dat->getId_reponse(); ?>" style="color:green;" selected><?=$dat->getLibelle()?></option>
                                       
                                       <?php
                                        
                                 }
                             

                            }
                              else
                                 {
                                    ?>
                                    <option  value="<?php echo $dat->getId_reponse(); ?>" style="color:black;" selected><?=$dat->getLibelle()?></option>
                                    <?php
                                 } 
                        
                                   
                        }
                      
                  } 
                  ?>
                  </select>
                  <?php
                  
                  $i++;
               }
            }
                        
                     ?>
                  </div>

                  <br>
                  <?php
                     if(!isset($counter))
                     {
                  ?>
                     <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
                  </form>
                                    <?php	
                                    }
                                    else{
                                       ?>
                                    				
                                          
                                          <div class="col-md-7 profil-text">
														<p>
													<span style="color: black; font-style: oblique;">	Votre score est de:  &nbsp;&nbsp;<?= $counter;?>   </span> </br>
													</p>
												</div>
												</div>
                                    <?php
                                    }
                                    ?>
               <p id="letc"></p>
            </div>
         <br>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>

