<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * select komponen kegiatan by provinsi
 */
class Komponenkegiatan_model extends CI_Model {

    private $table = "tb_komponen_kegiatan";
    private $table_prov = "tb_provinsi";
    public $column_order = [$this->$table ".id as id", "", "email", "hp", "status", "created_at", "updated_at"]; 
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }
    function komponen_list($search, $limit, $offer, $order, $order_type, $komponen_type=0) {
        $select_komponen = $this->select_komponen($komponen_type, $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_komponen(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_komponen_count($komponen_type, $search);
        $data["data"] = $select_komponen;
        return $data;
    }

    function get_komponen_by_id($id) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        $this->db->where("id", $id);
        return $this->db->get($this->table)->row();
    }

    function select_komponen($komponen_type, $search, $limit, $offer, $order, $order_type) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        if($search) {
            $this->db->or_group_start()
                ->or_like("name", $search)
                ->or_like("email", $search)
                ->or_like("hp", $search)
            ->group_end();
        }
        $this->db->where("komponen_type", $komponen_type);
        if(!$limit) {
            $limit = 10;
        }
        if($limit > 100) {
            $limit = 10;
        }
        
        if(strtolower($order_type) != "desc") {
            $order_type="asc";
        }
        $this->db->order_by($this->column_order[$order], $order_type);
        $this->db->limit($limit, $offer);
        return $this->db->get($this->table)->result_array();
    }

    function select_komponen_count($komponen_type, $search) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        if($search) {
            $this->db->or_group_start()
                ->or_like("name", $search)
                ->or_like("email", $search)
                ->or_like("hp", $search)
            ->group_end();
        }
        $this->db->where("komponen_type", $komponen_type);
        return count($this->db->get($this->table)->result_array());
    }



    function count_all_komponen($komponen_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }

	function set($array){
        $array["password"]=hashpass($array['password']);
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }


	function update_value_by_id($value, $id){
        $data = $value;
        $data['password']=hashpass($data['password']);
        $this->db->where('id', $id);
        $data = $this->db->update($this->table, $data); 
		return $data;
    }

    function delete($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }
}