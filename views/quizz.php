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
               <form action="?controller=partie&action=verif_game" method="post">
                  <?php
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
                        <input type="radio" name="quizcheck[<?=$dat->getId_question()?>]" id="<? echo $dat->getId_reponse(); ?>" value="<?php echo $dat->getValeur(); ?>" > <?=$dat->getLibelle()?> 
                        <input type="hidden" name="id_r" value="<?=$dat->getId_reponse()?>" >
                        <br>
                     </div>
                     <?php
                        
                        }
                       } 
                        } 
                    
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
         <br>
      </div>
        </ul>
      </div>