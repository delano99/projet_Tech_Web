
  
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
               <form action="?controller=partie&action=verif_game3" method="post">
                  <?php
                  if(!isset($donnees1))
                  {

                  
                     foreach ($donnees as $elt) 
                      {
                     	?>				
                  			
                        <br>
                        <div class="card">
                           <br>
                           <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                        
                           <?php
                           foreach ($data as $dat) 
                           {
                              if($elt->getId_question() == $dat->getId_question())
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
               }

               else
               {
                  
                  $i = 0;
                  foreach ($donnees as $elt) 
                      {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header" >  <?=$elt->getLibelle();?> <input type="hidden" name="id_q" value="<?=$elt->getTypeQuestion()?>" ></p>
                    
                     <?php
                      foreach ($data as $dat)
                      { 
                       
                        if($elt->getId_question() == $dat->getId_question())
                        {
                           
                              
                              if($donnees1[$i]->getId_reponse() == $dat->getId_reponse())
                              {
                                 if($donnees1[$i]->getValeur() == 0)
                                 {
                                     
                                    ?>	
                                       
                                    <div class="card-block">
                                       <input type="radio" checked="checked" name="quizcheck[<?=$elt->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getId_reponse(); ?>" > <?=$dat->getLibelle()?> 
                                       <span style="color: black; font-style: oblique; background : red;">  &nbsp;&nbsp;mauvaise reponse    </span> </br>
                                    </div>
                                    <?php
                                    
                                  }
                              else if($donnees1[$i]->getValeur() == 1)
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
            }
                        
                     ?>
                  </div>

                  <br>
                  <?php
                     if(!isset($donnees2))
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
													<span style="color: black; font-style: oblique;">	Votre score est de:  &nbsp;&nbsp;<?= $donnees2;?>   </span> </br>
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
