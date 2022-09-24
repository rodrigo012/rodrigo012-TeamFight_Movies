<?php 

	class Consulta_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('consulta_model');
		}

		function form_agrega_consulta()
		{
			
			$data = array('titulo' => 'Consulta');
			$session_data = $this->session->userdata('logged_in');
			
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2');
			$this->load->view('consulta', $data);
			$this->load->view('front/footer_view');
		}

		function cargo_consulta()
		{

			//Genero las reglas de validacion
			$this->form_validation->set_rules('consulta', 'Consulta', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			
			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');


			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'consulta'=>$this->input->post('consulta',true),
				'email'=>$this->input->post('email',true),
				'nombre'=>$this->input->post('nombre',true),
				'estado' => 0
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/header_view', $data);
				$this->load->view('front/menu_view2');
				$this->load->view('');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$consultas = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				redirect('');
			}	
		}

		function consultas_todas()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Consultas');
		
			$session_data = $this->session->userdata('logged_in');
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('consultas' => $this->consulta_model->get_consultas());

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2');
			$this->load->view('parte/muestraconsulta_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
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

    	function eliminar_consulta(){
	    	$id_consulta = $this->uri->segment(2); 
	    	

	    	$this->consulta_model->borrar_consulta($id_consulta);
	    	redirect('ver_consultas', 'refresh');
	    }

	    
	}