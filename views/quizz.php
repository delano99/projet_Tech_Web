<div class=" Quizzcontainer mt-sm-5 my-1">
    <div class="Quizzquestion ml-sm-5 pl-sm-5 pt-2">
    <?php
                                                            
      foreach ($donnees as $elt) 
        {
          ?>

        <div class="Quizzpy-2 h5"><b><?=$elt->getLibelle();?></b></div>
          <div class="Quizzml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
        <?php
                                                            
          foreach ($data as $dat) 
            {
              if($elt->getId_question() == $dat->getId_question())
              { 
              ?>
        
           <label class="Quizzoptions"><?=$dat->getLibelle()?><input type="radio" name="radio"> <span class="Quizzcheckmark"></span> </label> 

           <?php 
              }
            }
           ?>
        </div>
        <?php 
            }
            
           ?>
    </div>
    <div class="Quizzd-flex align-items-center pt-3">
        <div class="Quizzml-auto mr-sm-5"> <button class="Quizzbtn btn-success">Next</button> </div>
    </div>
</div>