<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

    private $table = "tb_provinsi";
    // public $column_order = ["id", "name", "email", "hp", "status", "created_at", "updated_at"]; 
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function select_provinsi() {
        $this->db->select("*");
        $this->db->order_by("id", "asc");
        return $this->db->get($this->table)->result_array();
    }


	function set($array){
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }


	function update_value_by_id($value, $id){
        $data = $value;
        $this->db->where('id', $id);
        $data = $this->db->update($this->table, $data); 
		return $data;
    }

    function delete($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }
}