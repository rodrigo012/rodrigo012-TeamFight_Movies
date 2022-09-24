
<?php 



class Usuario_controller extends CI_Controller{
	

function_construct()
{
	
	parent::__construct();
			$this ->load->model('usuario_model');
}

public function login(){
	$data['titulo']= 'login';
	$this->load->view('front/header_view',$data);
	$this->load->view('front/menu_view2');
	$this->load->view('login');
	$this->load->view('front/footer_view');
}

public function registrarse(){
	$data['titulo'] = 'Registrarse';
	$this->load->view('front/header_view', $data);
	$this->load->view('front/menu_view2');
	$this->load->view('parte/usuario/agregarusuario_view');
	$this->load->view('front/footer_view');

}

public function registrar_usuario(){
	$this->form_validation->set_rules('apellido','Apellido del usuario','required');
	$this->form_validation->set_rules('nombre','Nombre del usuario','required');
	$this->form_validation->set_rules('usuario','required','required|is_unique[personas.nombre]');
	$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[personas.email]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
	$this->form_validation->set_rules('passconf','Confirmar password','trim|required|matches[password]');
	$this->form_validation->set_rules('valid_email','El campo %s debe ser un mail valido');
	$this->form_validation->set_rules('integer','El campo %s debe poseer solo numeros enteros');
	$this->form_validation->set_rules('required','El campo $s es obligatorio');
	$this->form_validation->set_rules('min_length','El $s debe contener como minimo $d caracteres');
	$this->form_validation->set_rules('matches','contraseñas no coinciden');

		if ($this->form_validation->run() == FALSE){
			$this->registrarse();

		}else {
			$this->Insertar_usuario();

		}
	}

function agregar_usuario()
      {
        if($this->_veri_log()){
        $data = array('titulo' => 'Agregar usuario');
      
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['usuario'] = $session_data['usuario'];  
  
        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/usuarios/agregarusuario_view');
        $this->load->view('front/footer_view');
        }else{
        redirect('sesion', 'refresh');
  
        }
      }

public function Insertar_usuario(){
	$usuario = array(
		'apellido' => $this->input->post('apellido');
		'nombre' => $this->input->post('nombre');
		'usuario' => $this->input->post('usuario');
		'email' => $this->input->post('email');
		'password' =>base64_encode($this->input->post('password')),
		'perfil_id' => 2,
		'baja' => 1



	);
	

public function iniciar_sesion(){

		  $this->form_validation->set_rules('mail', 'Usuario', 'required');
		  
		  $this->form_validation->set_rules('password', 'Password', 
		  'required|callback_verificar_password');
		  
		   $this->form_validation->set_message('required', 'El campo %s es obligatorio');

		             if($this->form_validation->run() == FALSE){

                         $this->login();

					 }else{

						$this->usuario_logueado();
					 }

			}

Function verificar_password($password){

			   // Verificar que el usuario exista
			   
			   $usuario = $this->input->post('mail');
			   $pass = $this->input->post('password');

			   $contrasenia = base64_encode($pass);
			   $this->load->model('usuario_model');
			   $usuario = $this->usuario_model->buscar_usuario($usuario, $contrasenia);

			   if($usuario){
                    $datos_usuario = array(
					'id_usuario' => $usuario->id_usuario,
					'nombre' => $usuario->nombre,
					'apellido' => $usuario->apellido,
					'perfil_id' => $usuario->perfil_id,
					'login' => TRUE,
					);

							 $this->session->set_userdata($datos_usuario);
					return true;
			   

			   }else{
				   $this->form_validation->set_message('verificar_password', 'Usuario y/o contrase;a invalidos');
				   return false;

			   }
		}

Public function usuario_logueado(){
	
		   if($this->session->userdata('login')){
				
			   //SE VERIFICA EL PERFIL DEL USUARIO PARA REDIRECCIONAR A LA PAGINA CORRESPONDIENTE


			               switch ($this->session->userdata('perfil')){

							 case '1';
									 redirect('');
						             break;
						   
						     case '2';
						   
						            redirect(base_url());
				                    break;

						   }

		   
		
		  }



		}

		Public function cerrar_sesion(){

			$this->session->sess_destroy();
			
			redirect(base_url());
        }

}
