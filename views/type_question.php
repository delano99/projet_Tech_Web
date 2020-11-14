<div class="d-flex flex-column" id="content-wrapper">
    <!-- <?php //include('views/alert_view.php'); ?> -->
    
                <div id="content">
                    <div class="block">
                    <form action="?controller=partie&action=begin_game" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-xs-12 col-md-8">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 card-container">
                                            <div class="card historique">
                                                <div class="card-body">
                                                    <h4 class="card-title">Choix niveau de difficulter</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 card-container">
                                            <div class="card creer">
                                                <div class="card-body">
                                                <input class="form-check-input" type="radio" name="niv" value="1" ><label class="form-check-label" for="formCheck-1">Difficile</label> 
                                                </div>
                                                 <div class="card inscrits">
                                                <div class="card-body">
                                                <input class="form-check-input" type="radio" name="niv" value="2"><label class="form-check-label" for="formCheck-1">Moyen</label>
                                                </div>
                                                <div class="card-body">
                                                <input class="form-check-input" type="radio" name="niv" value="3"><label class="form-check-label" for="formCheck-1">Facile</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 card-container">
                                          <div class="card inscrits">
                                                  <div class="card-body">
                                                  
                                                          <button class="btn" id="submit"type="submit">Valider</button>
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

