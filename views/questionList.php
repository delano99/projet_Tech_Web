

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
                                                <p class="text-primary m-0 font-weight-bold">Mes Questions</p>
                                                
                                            </div>
                                        
                                                <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                                                    <table class="table dataTable my-0" id="dataTable">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>Nb</th>
                                                                <th>libelle</th>
                                                                <th>Action</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            
                                                            $i=1;
                                                            foreach ($donnees1 as $data) 
                                                            {
                                                              
                                                             ?>

                                                              <form method="post" action="?controller=admin&action=modify_question">
                                                                
                                                              <tr >

                                                                  <td><label><?=$data->getId_question()?></label></td>
                                                                  <td> <label><?=$data->getLibelle()?></label></td>
                                                                  
                                                                  
                                                                  
                                                                  <td><button class="btn" type="submit" name="consulter" >modifier</button>
                                                                  </td>
                                                                  <td><button class="btn" type="submit" name="supprimer" >Supprimer</button>
                                                                  </td>
                                                                  <input type="hidden" name="id_q" value="<?=$data->getId_question()?>" >
                                                                </tr>
                                                                 
                                                             </form>
                                                            <?php
                                                             
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

<script type="text/javascript">
        function alert()
        {
            confirm('etes vous sur de vouloir vous modifier');
        }

        
    </script>








    