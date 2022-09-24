<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todas las peliculas
    */
    function get_accion()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'NO', 'categoria_id' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    function get_suspenso()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'NO', 'categoria_id' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    function get_terror()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'NO', 'categoria_id' => '3'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    function get_variados()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'NO', 'categoria_id' => '4'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    //Retorna el stock del producto buscado por id
    public function get_stock($id=NULL)
    {
        $this->db->select('stock');
        $this->db->from('producto');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query->stock;
    }

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('producto', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){

        $query = $this->db->get_where('producto', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }


    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('producto', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('producto', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todos los productos inactivos o eliminados
        */
    function not_active_productos()
    {
        $query = $this->db->get_where('producto', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
     function get_ventas_cabecera()
    {
        $this->db->select('ventas_cabecera.id, usuarios.nombre, usuarios.apellido, ventas_cabecera.fecha, ventas_cabecera.total_venta');
        $this->db->from('ventas_cabecera');
        $this->db->join('usuarios','usuarios.id_usuario=ventas_cabecera.id_usuario');   
        $query = $this->db->get();
       
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    
        function get_ventas_detalle($id)
    {
        $this->db->join('producto','producto.id = ventas_detalle.producto_id');   

        //select * from ventas_detalle;
        $query = $this->db->get_where('ventas_detalle', array('venta_id' => $id));
       
          
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
} 