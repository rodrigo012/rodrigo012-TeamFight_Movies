<?php 

	class Registro_controller extends CI_Controller{
		
		function __construct() 
		{
			parent::__construct();
			$this ->load->model('usuario_model');
		}
		
function eliminar_usuario(){
	    	$id_usuario = $this->uri->segment(2); 
	    	$data = array(
	    		'baja'=>'SI'
	    	);

	    	$this->usuario_model->estado_usuario($id_usuario, $data);
	    	redirect('usuarios_todos', 'refresh');
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
    	
    	function muestra_usuarios()
		{
			if($this->_veri_log()){
			$data = array('titulo' => 'Usuarios');
		
			$session_data = $this->session->userdata('logged_in');
			$data['id_usuario'] = $session_data['id_usuario'];
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$dat = array('usuarios' => $this->usuario_model->active_usuarios());

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2');
			$this->load->view('parte/muestrausuario_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh'); }
		}

		function muestra_eliminados()
	    {    	
	    	if($this->_veri_log()){
	    	$data = array('titulo' => 'Usuarios eliminados');
			$session_data = $this->session->userdata('logged_in');
			$data['id_usuario'] = $session_data['id_usuario'];
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];
			
			$dat = array(							
		        'usuarios' => $this->usuario_model->not_active_usuarios()
			);

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2');
			$this->load->view('parte/muestrausaurioeliminado_view', $dat); 
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}


		function activar_usuario(){
				$id = $this->uri->segment(2);
				$data = array(
				  'baja'=>'NO'
				);
		
				$this->usuario_model->estado_usuario($id, $data);
					header('Location: '.$_SERVER['HTTP_REFERER']);
			  }

		function modificar_usuario()
		{
			//Validación del formulario
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('perfil_id', 'perfil_id', 'required');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);

			$dat = array(
				'id_usuario'=>$id_usuario,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true),
				'password'=>$this->input->post('password',true),
				'perfil_id'=>$this->input->post('perfil_id',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('front/header_view', $data);
				$this->load->view('front/menu_view2');
				$this->load->view('parte/modificausuario_view', $dat);
				$this->load->view('front/footer_view');
            }
            else
			{
				$this->_user_modif();		
			}
		}

		function _user_modif()
{
    //Cargo la libreria para subir archivos
    $this->load->library('upload');

    // Obtengo el id del libro
    $id_usuario = $this->uri->segment(2);

    // Array de datos para obtener datos de libros sin la imagen 
    $dat = array(
        'id_usuario'=>$id_usuario,
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'usuario'=>$this->input->post('usuario',true),
        'password'=>$this->input->post('password',true),
        'perfil_id'=>$this->input->post('perfil_id',true)
    );
    
    $this->usuario_model->update_usuario($id_usuario, $dat);
    redirect('usuarios_todos', 'refresh');
    
}

		function modificar_usuario2()
		{
			//Validación del formulario
			
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			//$this->form_validation->set_rules('perfil_id', 'Perfil_Id', 'required|numeric');
			

			//Mensaje del form_validation
			$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

			$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>'); 

			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);


			$dat = array(
				'id_usuario'=>$id_usuario,
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'usuario'=>$this->input->post('usuario',true),
				'password'=>$this->input->post('password',true),
				'perfil_id'=>$this->input->post('perfil_id',true)
			);

			if ($this->form_validation->run()==FALSE)
			{
				$data = array('titulo' => 'Error de formulario');
				$session_data = $this->session->userdata('logged_in');
				$data['id_usuario'] = $session_data['id_usuario'];
				$data['perfil_id'] = $session_data['perfil_id'];
				$data['nombre'] = $session_data['nombre'];

				$this->load->view('front/header_view', $data);
				$this->load->view('front/menu_view2');
				$this->load->view('parte/modificausuario_view', $dat);
				$this->load->view('front/footer_view');
			}
			else
			{
				$usuario = $this->usuario_model->update_usuario($id_usuario, $dat);
				redirect('');
			}
			
		}

		function muestra_modificar()
		{
			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);

			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$id_usuario = $row->id_usuario;
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$usuario = $row->usuario;
					$password = $row->password;
					$perfil_id = $row->perfil_id;	
				}

				$dat = array('usuario' =>$datos_usuario,
					'id_usuario'=>$id_usuario,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'usuario'=>$usuario,
					'password'=>$password,
					'perfil_id'=>$perfil_id,
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Usuario');
			$session_data = $this->session->userdata('logged_in');
			$data['id_usuario'] = $session_data['id_usuario'];
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2', $data);
			$this->load->view('parte/modificausuario_view', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		function muestra_modificar_usuario()
		{
			$id_usuario = $this->uri->segment(2);
			$datos_usuario = $this->usuario_model->edit_usuario($id_usuario);

			if ($datos_usuario != FALSE) {
				foreach ($datos_usuario->result() as $row) 
				{
					$id_usuario = $row->id_usuario;
					$nombre = $row->nombre;
					$apellido = $row->apellido;
					$email = $row->email;
					$usuario = $row->usuario;
					$password = $row->password;
					$perfil_id = $row->perfil_id;	
				}

				$dat = array('usuario' =>$datos_usuario,
					'id_usuario'=>$id_usuario,
					'nombre'=>$nombre,
					'apellido'=>$apellido,
					'email'=>$email,
					'usuario'=>$usuario,
					'password'=>$password,
					'perfil_id'=>$perfil_id,
				);
			} 
			else 
			{
				return FALSE;
			}
			if($this->_veri_log()){
			$data = array('titulo' => 'Modificar Usuario');
			$session_data = $this->session->userdata('logged_in');
			$data['id_usuario'] = $session_data['id_usuario'];
			$data['perfil_id'] = $session_data['perfil_id'];
			$data['nombre'] = $session_data['nombre'];

			$this->load->view('front/header_view', $data);
			$this->load->view('front/menu_view2', $data);
			$this->load->view('parte/modificausuario_view2', $dat);
			$this->load->view('front/footer_view');
			}else{
			redirect('login', 'refresh');}
		}

		/**
	    * 
	    */
		function agregar_usuario()
      {
        if($this->_veri_log()){
        $data = array('titulo' => 'Agregar usuario');
      
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];  
  
        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/usuario/agregarusuario_view');
        $this->load->view('front/footer_view');
        }else{
        redirect('sesion', 'refresh');
  
        }
      }

		function index()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			/*$this->form_validation->set_rules('username', 'Usuario', 
											'trim|required|xss_clean|is_unique[usuarios.username]');*/
			$this->form_validation->set_rules('usuario', 'Usuario', 
											'trim|required|is_unique[usuarios.usuario]');
			//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
			$this->form_validation->set_rules('password', 'Contraseña','required');

			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');

			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$password = $this->input->post('re_password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'perfil_id'=>'2',
				'usuario'=>$this->input->post('usuario',true),
				'password'=>($password)
			);


			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Registrarse');
				$this->load->view('front/header_view', $data);
				$this->load->view('front/menu_view2');
				$this->load->view('parte/usuario/agregarusuario_view');
				$this->load->view('front/footer_view');		
			}
			
			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->add_user($data);

				//Redirecciono a la pagina de perfil
				redirect('');
			}	
		}
		
	}
/* End of file 
*/