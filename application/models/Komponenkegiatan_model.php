<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * select komponen kegiatan by provinsi
 */
class Komponenkegiatan_model extends CI_Model {

    private $table = "tb_komponen_kegiatan";
    private $table_prov = "tb_provinsi";
  
    public $column_order = ["id", "sub_key", "komponen_spam", "kegiatan", "estimasi", "pembagi", "satuan", "created_at", "updated_at"];
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }
    function komponen_list($search, $limit, $offer, $order, $order_type) {
        $select_komponen = $this->select_komponen($search, $limit, $offer, $order, $order_type);
//        $this->db->last_query();exit;
        $count = $this->count_all_komponen(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_komponen_count($search);
        $data["data"] = $select_komponen;
        return $data;
    }

    function komponen_by_key($key, $sub_key, $year=false) {
        $this->db->select("*");
        if($year) {
            $this->db->where("year",$year);
        }
        $this->db->where("key",$key);
        $this->db->where("sub_key",$sub_key);
        $this->db->where("aktif", 1);
        $this->db->order_by("id", "desc");
        return $this->db->get($this->table)->result();
    }

    function get_komponen_by_id($id) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        $this->db->where("id", $id);
        return $this->db->get($this->table)->row();
    }

    function select_komponen($search, $limit, $offer, $order, $order_type) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        if($search) {
            $this->db->or_group_start()
                ->or_like("komponen_spam", $search)
                ->or_like("kegiatan", $search)
            ->group_end();
        }
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

    function select_komponen_count($search) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        if($search) {
            $this->db->or_group_start()
                ->or_like("komponen_spam", $search)
                ->or_like("kegiatan", $search)
            ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }



    function count_all_komponen($komponen_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
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