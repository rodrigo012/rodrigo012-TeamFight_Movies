<?php 

	class Reporte_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('reporte_model');
			$this ->load->model('usuario_model');
		}

		private function _veri_log()
    	{
	    	if ($this->session->userdata('logged_in')) 
	    	{
	    		return TRUE;
	    	} else {
	    		return FALSE;
	    	}
    	}

		function index()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Reporte de Ventas');
	

			$dat = array('ventas' => $this->reporte_model->get_ventas());

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2');
			$this->load->view('muestrarporteventas_view', $dat); //CAMBIAR
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}
	}