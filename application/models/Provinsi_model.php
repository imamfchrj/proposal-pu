<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

    private $table = "tb_provinsi";
    public $column_order = ["prov_id", "nama", "prov_id"]; 
   
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

    function prov_list($search, $limit, $offer, $order, $order_type) {
        $select_prov = $this->select_prov( $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_prov(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_prov_count( $search);
        $data["data"] = $select_prov;
        return $data;
    }

    function select_prov( $search, $limit, $offer, $order, $order_type) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("nama", $search)
                ->or_like("id", $search)
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

    function select_prov_count( $search) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
            ->or_like("nama", $search)
            ->or_like("id", $search)
            ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }



    function count_all_prov($prov_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }

    function get_ikk_provinsi($id) {
        if(!$id) {
            return 0;
        }
        $this->db->select("*");
        $this->db->where("prov_id", $id);
        $result = $this->db->get("tb_ikk_provinsi")->row();
        if(!$result){
            return 0;
        }
        return $result->ikk_decimal;
    }
}