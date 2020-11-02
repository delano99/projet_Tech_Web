

    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" method="post" action="createAccount.php">
                <h1>Register Form</h1>
                <div class="form-row form-group" id="Yes" name="text1">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="text" name="nom" id="a" ></div>
                </div>
                <div class="form-row form-group" id="Yes" name="text1">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Prenom </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="text" name="prenom" id="b" ></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="email" name="email" id="numero1" ></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="password" name="password" id="password"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control complete" type="password" name="confirmer_password" id="cpassword"></div>
                    <span id='mess'></span>
                </div>
                <div class ="form group">
                <button class="btn btn-light submit-button" id="submit"type="submit">sign up</button>
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
        var pwd= document.getElementById('password');
        var cpwd= document.getElementById('cpassword');
        var bool= true;
      
        var checke = function() {
          if (pwd.value ==  cpwd.value) {
            document.getElementById('mess').style.color = 'green';
            document.getElementById('mess').innerHTML = 'matching';
          } else {
            document.getElementById('mess').style.color = 'red';
            document.getElementById('mess').innerHTML = 'not matching';
          }
        }
        function checkEmail() {
                    var email = document.getElementById('numero1');
                    var  re =/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))+@[A-Z0-9.-]+\.yncrea.fr/igm;
                    if (!re.test(email.value)) {
                        alert('vous devez saisir une adresse mail yncrea valide');
                        email.focus();
                        return false;
                    }
                     else 
                        return true;
        }
    
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

