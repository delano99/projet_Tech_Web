<?php
	require_once('connexion.php');
	if (isset($_GET['controller']) && isset($_GET['action']))
	{
		$controller = $_GET['controller'];
        $action     = $_GET['action'];
	}
	else
	{
		$controller = 'page';
		$action     = 'home';
	}
	/*session_start();
	if(!isset($_SESSION['connecté']))
	$_SESSION['connecté'] = 'non connecté';

	//-------------------------------------------------------------------------------------------------------------------
	$nav = '';
	if(isset($_SESSION['statut']) && ($_SESSION['statut']== 'TUTEUR')) // id_statut d'un  tuteur
	{
		$nav = '
		<li class="nav-item"><a href="?controller=tuteurs&action=interface_tuteur" class="nav-link">Mon tutorat </a>
		</li>
		<li class="nav-item"><a href="?controller=tuteurs&action=selection_tutores" class="nav-link">Mes Tutorés </a>
		</li>
		<li class="nav-item"><a href="?controller=tuteurs&action=savoir_tuteurs" class="nav-link">Le tutorat: ce que je dois savoir </a>
		</li>
		';
	}
	elseif(isset($_SESSION['statut']) && preg_match('#^TUTORE#', $_SESSION['statut']) == 1)
	{
		$nav = '
		<li class="nav-item"><a href="?controller=tutores&action=interface_tutore" class="nav-link">Mon tutorat </a>
		</li>
		<li class="nav-item"><a href="?controller=tutores&action=selection_tuteurs" class="nav-link">Mon Tuteur </a>
		</li>
		<li class="nav-item"><a href="?controller=tutores&action=savoir_tutores" class="nav-link">Le tutorat: ce que je dois savoir </a>
		';
	}
	elseif(isset($_SESSION['statut']) && ($_SESSION['statut'] == 'SUPER_ADMIN'))
	{
		$nav = '';
	}
	elseif(isset($_SESSION['statut']))
	{
		$nav = '';
	}
	else
	{
		$nav = '
		<li class="nav-item"><a href="index.php" class="nav-link">Accueil </a>
		</li>
		<li class="nav-item"><a href="#" class="nav-link">Actualités </a>
		</li>
		<li class="nav-item"><a href="?controller=page&action=contact" class="nav-link">Contact </a>
		</li>
		';
	}
	//fin de control sur la navbar horizontale
	//----------------------------------------------MENU
	$menu ='';
	if($_SESSION['connecté'] == 'non connecté')
	{
		$menu ='
		<a class="dropdown-item forgot" href="?controller=users&action=login" role="presentation">Connexion</a>
		';
	}
	else
	{
		$menu ='
		<a class="dropdown-item forgot" href="?controller=users&action=profil" role="presentation">Profil</a>
		<a class="dropdown-item forgot" href="?controller=users&action=deconnexion"" role="presentation">Déconnexion</a>
		';
	}
	//fin de control menu*/
	
	// fin control lateralSideBar
	$tab = require_once('arbre_navigation.php');
	$route = '';
	$donnees;
	function set_route($road){
		global $route;
		$route = $road;
	}
	function set_donnees($data){
		global $donnees;
		$donnees=$data;                                                                                                                                                                                 
    }
    function set_data($input){
        global $data;
        $data= $input;
    }
    function set_res($input){
        global $res;
        $res= $input;
    }
    function set_message($input)
    {
        global $message;
        $message= $input;
    }
	function set_controller_report($controller){
		global $controller_report;
		$controller_report = $controller;
	}
	function set_fonction_back($back){
		global $fonction_back;
		$fonction_back = $back;
	}
	require_once('routes.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/css/CDRFormularioIngresoSocio.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/al&&ed.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3">The OTAKU WORLD</span><span class="site-heading-lower">SHonen JUMP</span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Brand</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        <div class="container">
            <div class="container">
                <?php
					foreach ($tab as $elt)
					{
					    ?>
							<div id="navigation_tree" class="">
								<span class="">
									<a href="?controller=<?=$elt['controller'];?>&action=<?=$elt['action'];?>"><?php/*<?= $action;?>*/?> </a>
								</span>
							</div>
						<?php
					    }
                        ?>
                </div>
            </div>
            <?php require_once ($route);?>
    </div>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;Brand 2020</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>
</body>

</html>