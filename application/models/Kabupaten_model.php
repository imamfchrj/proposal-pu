<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kabupaten_model extends CI_Model {

    private $table = "tb_kabupaten";
    private $table_provinsi = "tb_provinsi";
    public $column_order = ["id", "prov_id", "kab_id", "nama"];
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function select_kabupaten() {
        $this->db->select("*");
        $this->db->order_by("id", "asc");
        return $this->db->get($this->table)->result_array();
    }


	function set($array){
        $this->db->set($array);
        $this->db->insert($this->table);
		return $this->db->insert_id();
    }

    function get_all(){
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
//        echo $this->db->last_query();exit;
        return false;
    }

    function get_all_by_prov($prov_id){
        $this->db->where("prov_id", $prov_id);
        $query=$this->db->get($this->table);
        if($query){
            return $query->result();
        }
//        echo $this->db->last_query();exit;
        return false;
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

    function kab_list($search, $limit, $offer, $order, $order_type) {
        $select_kab = $this->select_kab( $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_kab(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_kab_count( $search);
        $data["data"] = $select_kab;
        return $data;
    }

    function select_kab( $search, $limit, $offer, $order, $order_type) {
        $this->db->select(
                $this->table.".id,".
                $this->table.".prov_id,".
                $this->table.".kab_id,".
                $this->table.".nama,".
                $this->table_provinsi.".nama as prov,"
            );
        $this->db->join($this->table_provinsi,$this->table_provinsi.".prov_id=".$this->table.".prov_id","left");
        if($search) {
            $this->db->or_group_start()
                ->or_like("prov_id", $search)
                ->or_like("nama", $search)
                ->or_like("id", $search)
                ->or_like("prov", $search)
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

    function select_kab_count( $search) {
        $this->db->select("
                *
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("prov_id", $search)
                ->or_like("nama", $search)
                ->or_like("id", $search)
                ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }

    function count_all_kab($kab_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }

    function get_ikk_kab($id) {
        if(!$id) {
            return 0;
        }
        $this->db->select("*");
        $this->db->where("kab_id", $id);
        $result = $this->db->get("tb_ikk_kabupaten")->row();
        if(!$result){
            return 0;
        }
        return $result->ikk_decimal;
    }
}