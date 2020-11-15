<div class="container profile profile-view" id="profile">
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
                                                <p class="text-primary m-0 font-weight-bold">Mon profil </p>
												
                                            </div>
                                            <div class="row space">
												<div class="col-md-7 profil-text">
														<p>
													<span style="color: black; font-style: oblique;">	Nom:  &nbsp;&nbsp;<?= $data->getNom();?>   </span> </br>
													<span style="color: black; font-style: oblique;">	Prenom:  &nbsp;&nbsp;<?= $data->getPrenom();?></span> </br>
													<span style="color: black; font-style: oblique; ">	Email: &nbsp;&nbsp; <?=$data->getEmail();?></span> &nbsp;&nbsp; </br>
													</p>
												</div>
												</div>
												
												<div class="card-header py-4">
                                                <p class="text-primary m-0 font-weight-bold">Dernier match </p>
												
                                            </div>
                                            <div class="row space">
												<div class="col-md-7 profil-text">
														<p>
													<span style="color: black; font-style: oblique;">	Difficulter: &nbsp;&nbsp; <?=$message;?></span> </br>
													<span style="color: black; font-style: oblique;">	Score:  &nbsp;&nbsp; <?=$res;?></span> </br>
													</p>
												</div>
        
    </div>
    <section class="pricing-table">
        <div class="container">
            <div class="center">
                <h2>Historique participation</h2>
                <p class="lead">####################################################################################################################################################################### </p>
            </div>
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price red wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Difficile</h1></li>
																<li class="list-group-item"><span> partie jouer :&nbsp&nbsp&nbsp;<?=$donnees1[0]['nombre']?></span></li>
                            <li class="list-group-item"><span>Score total :&nbsp&nbsp&nbsp;<?=$donnees1[0]['score']?></span></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 plan price green wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Moyenne </li>
																<li class="list-group-item"><span> partie jouer :&nbsp&nbsp&nbsp;<?=$donnees2[0]['nombre']?></span></li>
                            <li class="list-group-item"><span>Score total :&nbsp&nbsp&nbsp;<?=$donnees2[0]['score']?></span></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 plan price yellow wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Facile</li>
																<li class="list-group-item"><span> partie jouer :&nbsp&nbsp&nbsp;<?=$donnees3[0]['nombre']?></span></li>
                            <li class="list-group-item"><span>Score total :&nbsp&nbsp&nbsp;<?=$donnees3[0]['score']?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>
    <script src="assets/js/Pricing-Tables-1.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
		<script src="assets/js/Profile-Edit-Form.js"></script>
		
		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>