
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('carrito_model');
		$this->load->model('producto_model');
        $this->load->library('cart');
	}
public function index()
	{
		$data = array('titulo' => 'Carrito');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');
		if ($session_data) 
		{
			$this->load->view('carritos/carrito_parte' );
		}
		
		$this->load->view('front/footer_view');
	}
	//Este método llama a la página Peliculas, con el carrito si está logueado
public function Accion_car()
	{
		$dat = array('productos' => $this->producto_model->get_Accion());

		$data = array('titulo' => 'Accion');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');
		if ($session_data) 
		{
			$this->load->view('carritos/carrito_parte' );
		}
		

		$this->load->view('catalogocarrito/accion-carrito', $dat);
		$this->load->view('front/footer_view');
	}

public function Suspenso_car()
	{
		$dat = array('productos' => $this->producto_model->get_suspenso());

		$data = array('titulo' => 'Suspenso');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');
				if ($session_data) 
		{
			$this->load->view('carritos/carrito_parte' );
		}
		

		$this->load->view('catalogocarrito/suspenso-carrito', $dat);
		$this->load->view('front/footer_view');
	}

	public function Terror_car()
	{
		$dat = array('productos' => $this->producto_model->get_terror());

		$data = array('titulo' => 'Terror');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');
		if ($session_data) 
		{
			$this->load->view('carritos/carrito_parte' );
		}
		

		$this->load->view('catalogocarrito/terror-carrito', $dat);
		$this->load->view('front/footer_view');
	}

	public function Variados_car()
	{
		$dat = array('productos' => $this->producto_model->get_variados());

		$data = array('titulo' => 'variados');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');

				if ($session_data) 
		{
			$this->load->view('carritos/carrito_parte' );
		}
		

		$this->load->view('catalogocarrito/variados-carrito', $dat);
		$this->load->view('front/footer_view');
	}
		public function catalogo()
	{
		$dat = array('productos' => $this->producto_model->get_productos());

		$data = array('titulo' => 'Catalogo');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['usuario'] = $session_data['usuario'];
		$data['id_usuario'] = $session_data['id_usuario'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2');
		$this->load->view('Catalogo', $dat);
		$this->load->view('front/footer_view');
	}

	//Agrega elemento al carrito
	function add()
	{
		$id_producto =  $this->input->post('id');
        // Genera array para insertar en el carrito
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('descripcion'),
			'price' => $this->input->post('precio_venta'),
			'qty' => 1,
			'stock' => $this->producto_model->get_stock($id_producto)
			);	

        // Inserta elemento al carrito
		$this->cart->insert($insert_data);
	      
        // Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	
	//Elimina elemento del carrito o el carrito entero
	function remove($rowid) {
        //Si $rowid es "all" destruye el carrito
		if ($rowid==="all")
		{
			$this->cart->destroy();
		}
		else //Sino destruye sola fila seleccionada
		{ 
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
				);
            // Actualiza los datos
			$this->cart->update($data);
		}
		
        // Redirige a la misma página que se encuentra
		//redirect('carrito_controller/ver_carrito');
	//}
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
	

	//Actualiza el carrito que se muestra
	function actualiza_carrito()
    {        
	    // Recibe los datos del carrito, calcula y actualiza
       	$cart_info =  $_POST['cart'];

		foreach( $cart_info as $id => $cart)
		{	
		    $rowid = $cart['rowid'];
	    	$price = $cart['price'];
	    	$amount = $price * $cart['qty'];
	    	$qty = $cart['qty'];
	    
	    	$data = array(
					'rowid'   => $rowid,
	                'price'   => $price,
	                'amount' =>  $amount,
					'qty'     => $qty
					);
	         
			$this->cart->update($data);
		}

		// Redirige a la misma página que se encuentra
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}




	//Muestra los detalles de la venta y confirma(función guarda_compra())
	function muestra_compra()
	{
		$data = array('titulo' => 'Confirmar compra');
		
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];
		$data['apellido'] = $session_data['apellido'];
		$data['email'] = $session_data['email'];
		
		$this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2', $data);
		$this->load->view('front/compra_view', $data);
		$this->load->view('front/footer_view');
    }
    
 

    //Guarda los datos de la venta en la base de datos    
    public function guarda_compra()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['id_usuario'] = $session_data['id_usuario'];

		$total = $this->input->post('total_venta');

		
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'id_usuario' 	=> $data['id_usuario'],
			'total_venta'	=> $total
		);	
		$venta_id = $this->carrito_model->insert_venta($venta);
		
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$venta_detalle = array(
					'venta_id' 		=> $venta_id,
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);	
            
            	$cust_id = $this->carrito_model->insert_venta_detalle($venta_detalle);

            	//Descuenta del stock y lo guarda en la base de datos
            	$producto = $this->producto_model->edit_producto($item['id']);
            	foreach ($producto->result() as $row) 
				{
					$stock = $row->stock;
				}

            	$stock_edit = $stock - 	$item['qty'];

            	$stock_nuevo = array(
            		'stock'	=> $stock_edit
            		);

            	$modifica = $this->producto_model->update_producto($item['id'], $stock_nuevo);

			endforeach;
		endif;
	    

		$data = array('titulo' => 'Compra Finalizada');

		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

        $this->load->view('front/header_view', $data);
		$this->load->view('front/menu_view2', $data);
		$this->load->view('front/compra_lista_view');
		$this->load->view('front/footer_view');

		$final = $this->cart->destroy();

	}



}