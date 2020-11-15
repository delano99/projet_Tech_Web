<?php
    require_once('connexion.php');
    require_once('arbre_navigation.php');
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
	session_start();
	if(!isset($_SESSION['connecté']))
	$_SESSION['connecté'] = 'non connecté';

	//-------------------------------------------------------------------------------------------------------------------
	$nav = '';
	if($_SESSION['connecté'] == 'non connecté') // test si utilisateur connecter
	{
				$nav = '
				<li class="nav-item" role="presentation"><a class="nav-link" href="?controller=page&action=about">About us</a></li>
        <li class="nav-item"><a class="nav-link" href="?controller=users&action=login">Connexion </a>
		</li>
        <li class="nav-item"><a class="nav-link" href="?controller=users&action=inscription">Inscription</a></li>
		';
	}
	
	else
	{
				$nav = '
				<li class="nav-item" role="presentation"><a class="nav-link" href="?controller=users&action=redirection">Jouer</a></li>
		<li class="nav-item"><a class="nav-link" href="?controller=partie&action=verif_game">Mon profil </a>
		</li>
		<li class="nav-item"><a class="nav-link" href="?controller=users&action=deconnexion">Deconnexion </a>
		</li>
        ';
    }
    $navigation = new arbre();
    $tab = $navigation::nave($controller, $action);
	$route = '';
	$donnees;
	function set_route($road){
		global $route;
		$route = $road;
	}
	function set_donnees1($data){
		global $donnees1;
		$donnees1=$data;                                                                                                                                                                                 
		}
		function set_donnees2($data){
			global $donnees2;
			$donnees2=$data;                                                                                                                                                                                 
			}
			function set_donnees3($data){
				global $donnees3;
				$donnees3=$data;                                                                                                                                                                                 
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

<?php
    require './views/header.php';
    ?>
                <?php
                if (is_array($tab) || is_object($tab))
                {
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
					    }
                        ?>
                </div>
            </div>
            <?php require_once ($route);?>
    </div>
    <?php
    require './views/footer.php';
    ?>