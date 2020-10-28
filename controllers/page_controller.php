<?php
/* Définition du controller */
class PageController
{

	// page d'authentification
	public function home()  
	{
	   set_route('views/page_press.php');
	}

	public function about()
	{
		set_route('views/about.php');
	}
    
}
?>	