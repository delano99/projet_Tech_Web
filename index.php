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
	$_SESSION['connecté'] = 'non connecté';*/

	//-------------------------------------------------------------------------------------------------------------------
	$nav = '';
	/*if ($_GET['controller'] != 'page' && $_GET['action'] != 'home') // test si utilisateur connecter
	{
		$nav = '
		<li class="nav-item"><a class="nav-link" href="?controller=page&action=home">Mon profil </a>
		</li>
		<li class="nav-item"><a class="nav-link" href="?controller=page&action=home">Deconnexion </a>
		</li>
		';
	}
	
	else
	{*/
        $nav = '
        <li class="nav-item"><a class="nav-link" href="?controller=page&action=home">Connexion </a>
		</li>
        <li class="nav-item"><a class="nav-link" href="?controller=users&action=inscription">Inscription</a></li>
        ';
        //route vers la connexion et l'inscription
	//}
	//fin de control sur la navbar horizontale
	/*//----------------------------------------------MENU
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="?controller=page&action=home">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="?controller=page&action=about">About us</a></li>
                    <?php echo ($nav);?>
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