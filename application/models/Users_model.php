<?php
class Users_model extends CI_Model {

    private $table = "tb_user";
    public $column_order = ["id", "name", "email", "hp", "status", "created_at", "updated_at"]; 
   
    function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    public function person() {
        return $this->db->get('Person')->result();
    }

    public function user_list($search, $limit, $offer, $order, $order_type) {
        $select_user = $this->select_user(0, $search, $limit, $offer, $order, $order_type);
        $count = $this->count_all_user(0);
        $data["recordsTotal"] = $count;
        $data["recordsFiltered"] = count($select_user);
        $data["data"] = $select_user;
        return $data;
    }

    public function select_user($user_type, $search, $limit, $offer, $order, $order_type) {
        $this->db->select("
                id, 
                name, 
                email,
                hp,
                status,
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
        $this->db->where("user_type", $user_type);
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



    public function count_all_user($user_type) {
        $this->db->select("count(id) as count_id");
        $data = $this->db->get($this->table)->row();
        return $data->count_id;
    }
}