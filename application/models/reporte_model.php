<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Reporte_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_ventas()
    { 
            $this->db->select('*');
            $this->db->from('ventas_cabecera');
            $this->db->join('usuarios','usuarios.id_usuario = ventas_cabecera.id_usuario');
            $this->db->join('ventas_detalle','ventas_detalle.venta_id = ventas_cabecera.id');
            $this->db->join('productos','productos.id = ventas_detalle.producto_id');
            //$this->db->join('categorias','categorias.id = productos.categoria_id');
    
            $this->db->order_by('id_venta', 'desc');
            $queryList = $this->db->get();
    
            if($queryList->num_rows()>0) {
                return $queryList;
            } else {
                return FALSE;
            }      
    }

  /*  function get_busquedas() //FALTA TERMINAR!!!
    {
        //$query = $this->db->get_where('productos');
        $this->db->select('*');
        $this->db->from('productos')
        if($)
    }*/
}