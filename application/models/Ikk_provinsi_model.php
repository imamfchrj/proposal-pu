<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ikk_provinsi_model extends CI_Model {

    private $table = "tb_ikk_provinsi";
    private $table_provinsi = "tb_provinsi";
    public $column_order = ["id", "prov_id", "ikk_persen", "ikk_decimal", "tahun"];
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function select_ikk_provinsi() {
        $this->db->select("*");
        $this->db->order_by("id", "asc");
        return $this->db->get($this->table)->result_array();
    }


	function set($array){
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }

    function get_by_id($id) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        $this->db->where("id", $id);
        return $this->db->get($this->table)->row();
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

    function ikk_prov_list($search, $limit, $offer, $order, $order_type) {
        $select_ikk_prov = $this->select_ikk_prov( $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_ikk_prov(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_ikk_prov_count( $search);
        $data["data"] = $select_ikk_prov;
        return $data;
    }

    function select_ikk_prov( $search, $limit, $offer, $order, $order_type) {
        $this->db->select(
                $this->table.".id,".
                $this->table.".prov_id,".
                $this->table.".ikk_persen,".
                $this->table.".ikk_decimal,".
                $this->table.".tahun,".
                $this->table_provinsi.".nama as nama_prov,"
            );
        $this->db->join($this->table_provinsi,$this->table_provinsi.".prov_id=".$this->table.".prov_id","left");
        if($search) {
            $this->db->or_group_start()
                ->or_like("id", $search)
                ->or_like("prov_id", $search)
                ->or_like("ikk_persen", $search)
                ->or_like("ikk_decimal", $search)
                ->or_like("tahun", $search)
                ->or_like("nama_prov", $search)
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

    function select_ikk_prov_count( $search) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("id", $search)
                ->or_like("prov_id", $search)
                ->or_like("ikk_persen", $search)
                ->or_like("ikk_decimal", $search)
                ->or_like("tahun", $search)
                ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }

    function count_all_ikk_prov($ikk_prov_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }

    function get_ikk_prov($id) {
        if(!$id) {
            return 0;
        }
        $this->db->select("*");
        $this->db->where("prov_id", $id);
        $result = $this->db->get($this->table)->row();
        if(!$result){
            return 0;
        }
        return $result->ikk_decimal;
    }
}