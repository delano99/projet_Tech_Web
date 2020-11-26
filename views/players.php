

    <div id="globalContent">
        <div id="wrapper">
            
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <div class="block">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-xs-12 col-md-10">
                                    <div class="row">
                                        <div class="card debut">
                                            <div class="card-header py-3">
                                                <p class="text-primary m-0 font-weight-bold">Nos meilleurs joueurs</p>
                                                <label>###################################################################################################</label>
                                                
                                            </div>
                                            
                                                <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                                                    <table class="table dataTable my-0" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th>Rang</th>
                                                                <th>Nom</th>
                                                                <th>Prenom</th>
                                                                <th>Score</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            $i=1;
                                                            foreach ($donnees1 as $data) 
                                                            {
                                                              
                                                             ?>

                                                              <form method="post" action="#?controller=evenements&action=subscribe_to_event">
                                                                
                                                              <tr >
                                                                  <td><label><?= $i ?></label></td>
                                                                  <td><label><?= $data['user']->getNom();?></label></td>
                                                                  <td> <label><?= $data['user']->getPrenom();?></label></td>
                                                                  <td><label><?=$data['score'];?></label></td>
                                                                  
                                                                  
                                                                </tr>
                                                                 <input type="hidden" name="id_e" value="<?=$data['user']->getId_user()?>" >
                                                        
                                                      
                                                             </form>
                                                            <?php
                                                             $i++;
                                                           }
                                                             ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr></tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    