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
													<span style="color: black; font-style: oblique;">	Difficulter: &nbsp;&nbsp; <?=$res;?></span> </br>
													<span style="color: black; font-style: oblique;">	Score:  &nbsp;&nbsp; <?=$message;?></span> </br>
													</p>
												</div>
        
    </div>
    <section class="pricing-table">
        <div class="container">
            <div class="center">
                <h2>Pricing Table</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut &lt;br&gt; et dolore magna aliqua. Ut enim ad minim veniam </p>
            </div>
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price red wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Start Up</h1><span class="price">$6/Month </span></li>
                            <li class="list-group-item"><span>1 Gb Dadicated Ram</span></li>
                            <li class="list-group-item"><span>24/7 Support</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 plan price green wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Standard </h1><span class="price">$12/Month </span></li>
                            <li class="list-group-item"><span>2 Gb Dadicated Ram</span></li>
                            <li class="list-group-item"><span>20 Email Account</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 plan price yellow wow fadeInDown">
                        <ul class="list-group">
                            <li class="list-group-item heading">
                                <h1>Premium </h1><span class="price">$24/Month </span></li>
                            <li class="list-group-item"><span>50 Gb Disk Space</span></li>
                            <li class="list-group-item"><span>8 Gb Dadicated Ram</span></li>
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