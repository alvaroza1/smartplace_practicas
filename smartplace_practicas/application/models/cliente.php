<?php 
class Cliente extends CI_Model{
	var $id = '';
	var $nombre = '';
	var $razon_social = '';
	var $rfc = '';
	var $regimen = '';
	var $correo = '';
	var $telefono = '';
	var $celular = '';
	var $contacto = '';
	var $base_datos = '';
	var $fecha_inicio = '';
	var $fecha_fin = '';
	var $eliminado = 0;
		
	public function __construct() {
		parent::__construct();
	}

	public function search(){
		$this->db->where('eliminado', 0);
		return $this->db->get('clientes')->result();
	}
	
	public function insert($data){
		$this->db->insert('clientes', $data);
	}
	
	public function update($data,$id) {
		$this->db->where('id', $id);
		$this->db->update('clientes', $data);
	}
		
	public function get($id) {
		$this->db->where('id', $id);
		return $this->db->get('clientes')->row();
	}

	public function delete($id){
		$this->db->set('eliminado', 1);
		$this->db->where('id', $id);
		$this->db->update('clientes');
	}
	
	public function validar_nombre($nombre) {
		$this->db->where('nombre', $nombre);
		$this->db->where('eliminado', 0);
		return $this->db->count_all_results('clientes');
	}
}
?>