<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/*Clase que nos ayuda a construir un menu a partir de un array con las opciobes del menu*/
	class Menu{
		//private $array_menu;
		public function __construct(){
			
		}

		function construirMenuPrincipal($array,$vistaActual){
			$menu = "<div class='nav-collapse collapse'> 
						<ul class='nav'>";
			foreach($array as $opcion){
				if($opcion==$vistaActual){
					$menu .= "<li class='active'> <a href='#''>" . $opcion ."</a></li>";
				}
				else{
					$menu .= "<li> <a href='#''>" . $opcion ."</a></li>";
				}
			}
			$menu .= "</ul>
					</div>";

			return $menu;
		}

		function construirMenuSecundario($array,$opcionActual){
			$menu = "<div class='navbar-inner'>
						<ul class='nav pull-right'>";
			foreach($array as $opcion){
				if($opcion==$opcionActual){
					$menu .= "<li class='active'> <a href='#''>" . $opcion ."</a></li>";
				}
				else{
					$menu .= "<li> <a href='#''>" . $opcion ."</a></li>";
				}
			}
			$menu .= "</ul>
					</div>";

			return $menu;
		}

		function construirSidebar($array,$opcionActual){
		    $side = "<ul class='nav nav-list'>";
		    $side .= "<li class='nav-header'>Opciones</li>";
			foreach($array as $opcion){
				if($opcion==$opcionActual){
					$side .= "<li class='active'> <a href='#''>" . $opcion ."</a></li>";
				}
				else{
					$side .= "<li> <a href='#''>" . $opcion ."</a></li>";
				}
			}
			$side .= "</ul>";

			return $side;
		}

	} 

?>