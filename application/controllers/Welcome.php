<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index(){
        $data['titulo']='principal';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
       $this->load->view('front/menu_view2');
        $this->load->view('principal');
        $this->load->view('front/footer_view');
    }

   public function quienes_somos(){
        $data['titulo']='quienes_somos';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
       $this->load->view('front/menu_view2');
        $this->load->view('quienes_somos');
        $this->load->view('front/footer_view');
   }

    public function terminosYcondiciones(){
        $data['titulo']='terminosYcondiciones';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
       $this->load->view('front/menu_view2');
        $this->load->view('terminosYcondiciones');
        $this->load->view('front/footer_view');
    }

    public function Comercializacion(){
        $data['titulo']='Comercializacion';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
      $this->load->view('front/menu_view2');
        $this->load->view('Comercializacion');
        $this->load->view('front/footer_view');
    }

     public function mantenimiento(){
        $data['titulo']='mantenimiento';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];
        $this->load->view('front/header_view',$data);
      $this->load->view('front/menu_view2');
        $this->load->view('mantenimiento');
        $this->load->view('front/footer_view');
    }

        public function info_contacto(){
        $data['titulo']= 'info_contacto';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];
        $this->load->view('front/header_view',$data);
      $this->load->view('front/menu_view2');
        $this->load->view('info_contactos');
        $this->load->view('front/footer_view');
    }

      public function registrarse(){
        $data['titulo']= 'registrarse';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/usuario/registrarse');
        $this->load->view('front/footer_view');
    }
     
     public function loguearse(){
        $data['titulo']='Ingresar'; 
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/usuario/login'); 
        $this->load->view('front/footer_view');
    }
    public function formulario(){
        $data['titulo']='formulario';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('formulario');
        $this->load->view('front/footer_view');

    }

    public function agregarusuario_view(){
        $data['titulo']='agregarusuario_view';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/usuario/agregarusuario_view');
        $this->load->view('front/footer_view');
    }


    public function login(){

        $data['titulo']='login';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('front/login');
        $this->load->view('front/footer_view');
    }

    public function consultas(){
        $data['titulo'] = 'Consultas';
        $this->load->model('consulta_model');
        $data['estado'] = $this->consulta_model->buscar_consulta();

        $this->load->view('front/header_view', $data);
        $this->load->view('front/menu_view2');
        $this->load->view('parte/muestraconsulta_view');
        $this->load->view('front/footer_view');
    }


    public function Accion()
    {
        $data['titulo']='Accion';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('catalogo/Accion');
        $this->load->view('front/footer_view');



    }

     public function Suspenso()
    {
        $data['titulo']='Suspenso';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('catalogo/Suspenso');
        $this->load->view('front/footer_view');



    }

     public function Terror()
    {
        $data['titulo']='Terror';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('catalogo/Terror');
        $this->load->view('front/footer_view');



    }

     public function Variados()
    {
        $data['titulo']='Variados';
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view',$data);
        $this->load->view('front/menu_view2');
        $this->load->view('catalogo/Variados');
        $this->load->view('front/footer_view');
    }
}