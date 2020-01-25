<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komponen_mst_model extends CI_Model {

    private $table = "tb_master_komponen";
    public $column_order = ["id", "key", "sub_key","komponen_spam","created_at","updated_at"];
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function select_komponen_mst() {
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

    function get_by_id($id){
        $this->db->where('id', $id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

    function delete($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }

    function komp_mst_list($search, $limit, $offer, $order, $order_type) {
        $select_komp_mst = $this->select_komp_mst( $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_komp_mst(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_komp_mst_count( $search);
        $data["data"] = $select_komp_mst;
        return $data;
    }

    function select_komp_mst( $search, $limit, $offer, $order, $order_type) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("id", $search)
                ->or_like("key", $search)
                ->or_like("sub_key", $search)
                ->or_like("komponen_spam", $search)
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

    function select_komp_mst_count( $search) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
            ->or_like("id", $search)
            ->or_like("key", $search)
            ->or_like("sub_key", $search)
            ->or_like("komponen_spam", $search)
            ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }



    function count_all_komp_mst($komp_mst_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }
}