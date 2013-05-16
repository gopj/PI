<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construnct(){
		parent::__construct();
		$this->setLayout('blank');
		$this->setLayout('admin');

	} 
	
	//el index de clientes del usuario chofer vendedo 
	/*public function index(){

		//cargamos la libreria
		$this->load->library('menu');
		
		//Creamos nuestro menu principal y lo asignamos al header
		$data['menu_principal']=$this->menu->construirMenuPrincipal(
			array('Inicio','Acerca de', 'Contacto'),'Inicio');

		//creamos nuestro menu secundario y lo asignamos a la vista clientes
		$data['menu_secundario']=$this->menu->construirMenuSecundario(
			array('Ventas','Inventario', 'Clientes', 'Registro'),'');

		//construimos nuestro sidebar
		$data['sidebar']=$this->menu->construirSidebar(
			array('Crear venta','Cancelar venta', 'Modificar venta'),'');

		//Obtenemos el contenido de la vista clientes 
		$data['contenidoPrincipal'] = $this->load->view('chofer-vendedor/index/index', $data,true);

		$this->load->view('chofer-vendedor/layouts/chofer_vendedor', $data);	
	}*/
}

?>