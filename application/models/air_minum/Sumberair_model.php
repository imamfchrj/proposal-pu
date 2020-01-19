<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * select komponen kegiatan by provinsi
 */
class Sumberair_model extends CI_Model {

    private $table = "tb_sumber_air";
    public $column_order = ["name"]; 
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function get_list() {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        return $this->db->get($this->table)->result();
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