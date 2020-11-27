

    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" method="post" action="?controller=admin&action=modify_question">
                <h1>Register Form</h1>
                <div class="form-row form-group" id="Yes" name="text1">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Libelle de la question </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="text" name="lib_ques" id="a" value ="<?=$data->getLibelle()?>">
                    <input type="hidden" name="id_q" value="<?=$data->getId_question()?>" ></div>
                </div>
                <?php

                  foreach($donnees1 as $elt)
                  {
                    $i=0;
                    if($elt->getValeur() == 1)
                    {
                    ?>

                  <div class="form-row form-group" id="Yes" name="text1">
                      <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">libelle de la bonne reponse </label></div>
                      <div class="col-sm-6 input-column"><input class="form-control complete" type="text" name="lib_b_rep" id="b" value ="<?=$elt->getLibelle()?>"><input type="hidden" name="id_br" value="<?=$elt->getId_reponse()?>" ></div>
                  </div>

                <?php
                }
                else{

                  ?>
                  <div class="form-row form-group" id="Yes" name="text1">
                      <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">libelle de la bonne reponse </label></div>
                      <div class="col-sm-6 input-column"><input class="form-control complete" type="text" name="lib_mr[<?=$elt->getId_reponse()?>]" id="b" value ="<?=$elt->getLibelle()?>"><input type="hidden" name="id_mr[<?=$elt->getId_reponse()?>]" value="<?=$elt->getId_reponse()?>" ></div>
                  </div>

                  <?php
                  
                }
                $i++;
                  }
                ?>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Niveau de la question </label></div>
                    <div class="col-sm-6 input-column">
                    <select class="col-sm-6 input-column complete" name="niv_difficulter" id="pet-select">
                        <option value="1">Difficile</option>
                        <option value="2">Moyen</option>
                        <option value="3"selected>Facile</option>
                    </select></div>
                    <span id='mess'></span>
                </div>
                <div class ="form group">
                <button class="btn btn-light submit-button" id="submit"type="submit" name="modifier">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>
    <script type="text/javascript">
    //Control password
    $(document).ready(function(){
        
        var complete= document.querySelectorAll(".complete");
        
        var bool= true;
      
       
        
    
        function completeFields(complete){
            for(let i=0 ; i< complete.length; i++)
            {
                if(complete[i].value == "")
                {
                    complete[i].style.borderColor= "red";
                    complete[i].style.color= "red";
                    //complete[i].placeholder= "veuillez remplir ce champ";
                    bool= false;
                }
    
            }
                if(bool)
                    return true;
                else    
                {
                    bool= true;
                    return false;
                }
            }
            
            $('#cpassword').keyup(e =>{
                checke();
            })
            $('.envoi').submit((e)=>{
            if(!completeFields(complete))
            {
                alert("des champs sont incomplets");
                e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi
            }
            if(!checkEmail())
            {
                e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi 
            }
        })
})
</script>

