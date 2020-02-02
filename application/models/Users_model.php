<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    private $table = "tb_user";
    public $column_order = ["id", "name", "email", "hp", "status", "user_type", "created_at", "updated_at"]; 
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    function person() {
        return $this->db->get('Person')->result();
    }

    function user_list($search, $limit, $offer, $order, $order_type, $user_type=0) {
        $select_user = $this->select_user($user_type, $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_user(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = $this->select_user_count($user_type, $search);
        $data["data"] = $select_user;
        return $data;
    }

    function select_user($user_type, $search, $limit, $offer, $order, $order_type) {
        $this->db->select("
                id, 
                name, 
                email,
                hp,
                status,
                user_type,
                created_at,
                updated_at
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("name", $search)
                ->or_like("email", $search)
                ->or_like("hp", $search)
            ->group_end();
        }
        // $this->db->where("user_type", $user_type);
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

    function select_user_count($user_type, $search) {
        $this->db->select("
                id, 
                name, 
                email,
                hp,
                status,
                user_type,
                created_at,
                updated_at
                "
            );
        if($search) {
            $this->db->or_group_start()
                ->or_like("name", $search)
                ->or_like("email", $search)
                ->or_like("hp", $search)
            ->group_end();
        }
        // $this->db->where("user_type", $user_type);
        return count($this->db->get($this->table)->result_array());
    }



    function count_all_user($user_type) {
        $this->db->select("count(id) as count_id");
        // $this->db->where("user_type", $user_type);
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }



    function get_user_by_id($id) {
        $column = implode (", ", $this->column_order);
        $this->db->select($column);
        $this->db->where("id", $id);
        return $this->db->get($this->table)->row();
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