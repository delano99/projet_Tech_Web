<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TUTORAT | L'aide aux étudiants par la région Hauts-De-France</title>
    <meta name="copyright" content="YNCREA Hauts-De-France">
    <meta name="language" content="fr">
    <meta name="description" content="L'aide aux étudiants par le groupe Yncréa Hauts-de-France en partenariat avec le programme régional de réussite en études longues (PRREL).">
    <meta name="copyright" content="YNCREA Hauts-De-France">
	<meta property="og:url" content="http://tutorat-yncrea.fr/index.php">
	<meta property="og:title" content="TUTORAT | L'aide aux étudiants par la région Hauts-De-France">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://tutorat-yncrea.fr/assets/img/OGimg.png">
	<meta property="og:description" content="L'aide aux étudiants par le groupe Yncréa Hauts-de-France en partenariat avec le programme régional de réussite en études longues (PRREL).">
	<meta property="og:site_name" content="TUTORAT YNCREA">
	<meta property="og:locale" content="fr_FR">
	<link rel="canonical" href="http://tutorat-yncrea.fr/index.php" />
    <link rel="icon" href="assets/img/logo-icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- sign up-->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-screen.css">
    <!-- navbar latérale et tuteur et evenements-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/tuteur.css">
    <!-- upadte account -->
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <!-- login-->
    <link rel="stylesheet" href="assets/css/Login-Form.css">


</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand"> <img src="assets/img/logo1.png" style="width: 175px;"/> </a>
			<button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler">
				<span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse offset-lg-2" id="navcol-1">
				<ul class="nav navbar-nav mr-auto">
					<?php echo ($nav);?>
				</ul>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"> <i class="fa fa-user-circle" style="font-size: 40px;"></i> </button>
                    <div class="dropdown-menu" role="menu">
						<?php echo ($menu);?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="globalContent">
        <div id="wrapper">
            <nav id="lateralSideBar" class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                <div class="container-fluid d-flex flex-column p-0">
					<?php echo ($lateralSideBar);?>
                </div>
            </nav>
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                            <button type="button" id="sidebarCollapse" class="btn ">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <?php
							foreach ($tab as $elt)
							{
								?>
									<div id="navigation_tree" class="col-9 offset-1 space">
										<span class="navig_flech">
											<a href="?controller=<?=$elt['controller'];?>&action=<?=$elt['action'];?>"><?= $action;?> </a>
											>
										</span>
									</div>
								<?php
							}
                        ?>
                    </div>
                </div>
                <?php require_once ($route);?>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Accueil</a></li>
                <li class="list-inline-item"><a href="#">Actualités</a></li>
                <li class="list-inline-item"><a href="?controller=page&action=contact">Contact</a></li>
            </ul>
            <p class="copyright">Tutorat YNCREA © <?php echo date('Y');?></p>
        </footer>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="assets/js/Navbarbuttonsignupsignin-modal-form.js?h=9ce049da3c28fd2ded69977163ac47a3"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30"></script>
    <script src="assets/js/dynmenu.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function () {
                $('#lateralSideBar').toggleClass('active');
                $(this).toggleClass('active');
                $('#content-wrapper').toggleClass('hide');
                $('#navigation_tree').toggleClass('hide');
            });
        });
    </script>



</body>

</html>
