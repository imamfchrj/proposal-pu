<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * select komponen kegiatan by provinsi
 */
class Proposal_model extends CI_Model {

    private $table = "tb_proposal";
    private $table_provinsi = "tb_provinsi";
    private $table_user = "tb_user as user";
    private $table_user_alias = "user";
    private $table_approval = "tb_user as approval";
    private $table_approval_alias = "approval";
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function proposal_list($search, $limit, $offer, $order, $order_type) {
        $select_all = $this->get_list($search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_proposal();
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->get_list_count($search);
        $data["data"] = $select_all;
        return $data;
    }

    function get_list($search, $limit, $offer, $order, $order_type) {
        $column_list = array(
            $this->table . ".id as id" ,
            $this->table . ".proposal_status as proposal_status" ,
            $this->table_provinsi . ".nama as prov_name",
            $this->table_user_alias . ".name as user_name" ,
            $this->table . ".status as status" ,
            $this->table_approval_alias . ".name as approval_name" ,
            $this->table . ".created_at as created_at"
        );
        $column_order = array(
            $this->table . ".id" ,
            $this->table . ".proposal_status" ,
            $this->table_provinsi . ".nama",
            $this->table_user_alias . ".name" ,
            $this->table . ".status" ,
            $this->table_approval_alias . ".name" ,
            $this->table . ".created_at"
        );
        $column = implode (", ", $column_list);
        $this->db->select( $column);
        
        $this->db->join(
            $this->table_provinsi, 
            $this->table. '.prov_id = '.$this->table_provinsi.'.prov_id',
            'left'
        );
        $this->db->join(
            $this->table_user, 
            $this->table. '.user_id = '.$this->table_user_alias.'.id',
            'left'
        );
        $this->db->join(
            $this->table_approval, 
            $this->table. '.user_approv = '.$this->table_approval_alias.'.id',
            'left'
        );

        if($search) {
            $this->db->or_group_start()
                ->or_like($this->table . ".nama_proposal", $search)
                ->or_like($this->table_user_alias . ".name", $search)
                ->or_like($this->table_approval_alias . ".name", $search)
                ->or_like($this->table_provinsi . ".nama", $search)
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
        $this->db->order_by($column_order[$order], $order_type);
        $this->db->limit($limit, $offer);
        return $this->db->get($this->table)->result_array();
    }


    function get_by_id($proposal_id) {
        $column_list = array(
            $this->table . ".id as id" ,
            $this->table . ".proposal_status as proposal_status" ,
            $this->table_provinsi . ".nama as prov_name",
            $this->table_user_alias . ".name as user_name" ,
            $this->table . ".status as status" ,
            $this->table_approval_alias . ".name as approval_name" ,
            $this->table . ".created_at as created_at"
        );
        $column = implode (", ", $column_list);
        $this->db->select( $column);
        
        $this->db->join(
            $this->table_provinsi, 
            $this->table. '.prov_id = '.$this->table_provinsi.'.prov_id',
            'left'
        );
        $this->db->join(
            $this->table_user, 
            $this->table. '.user_id = '.$this->table_user_alias.'.id',
            'left'
        );
        $this->db->join(
            $this->table_approval, 
            $this->table. '.user_approv = '.$this->table_approval_alias.'.id',
            'left'
        );
        
        $this->db->where($this->table . ".id", $proposal_id);
        return $this->db->get($this->table)->row();
    }

    function get_list_count($search) {
        $column_list = array(
            $this->table . ".id as id" 
        );
        $column = implode (", ", $column_list);
        $this->db->select( $column);
        
        $this->db->join(
            $this->table_provinsi, 
            $this->table. '.prov_id = '.$this->table_provinsi.'.prov_id',
            'left'
        );
        $this->db->join(
            $this->table_user, 
            $this->table. '.user_id = '.$this->table_user_alias.'.id',
            'left'
        );
        $this->db->join(
            $this->table_approval, 
            $this->table. '.user_approv = '.$this->table_approval_alias.'.id',
            'left'
        );

        if($search) {
            $this->db->or_group_start()
                ->or_like($this->table . ".nama_proposal", $search)
                ->or_like($this->table_user_alias . ".name", $search)
                ->or_like($this->table_approval_alias . ".name", $search)
                ->or_like($this->table_provinsi . ".nama", $search)
            ->group_end();
        }
        return count($this->db->get($this->table)->result_array());
    }


    function count_all_proposal() {
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