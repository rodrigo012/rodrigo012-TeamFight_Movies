<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	

class Consulta_model extends CI_Model{

	/**
    * Constructor de la clase
    */

	public function __construct(){
		parent::__construct();
	}



	function get_consultas()
	{
		$query = $this->db->get_where('consultas');

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
	}

    function borrar_consulta($id){
        $this->db->where('id_consulta', $id);
        $this->db->delete('consultas');
    }

	public function add_consulta($data){
        $this->db->insert('consultas', $data);
    }

     
}
    /**
    * Eliminación y activación logica de una consulta*/
    
    function estado_consulta($id, $data){
        $this->db->where('id_mensaje', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
