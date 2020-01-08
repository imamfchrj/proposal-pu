<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $table = 'tb_user';
    // private $table_admin_profile = 'admin_profiles';

    function get_data_user_by_email($email){

        $this->db->select("password,id,email,name, user_type");
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        // $this->db->where('banned', 0);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

    function get_by_email($email){
        $this->db->select("email");
        $this->db->where('email', $email);
        $query=$this->db->get($this->table);
        if($query){
            return $query->row();
        }
        return false;
    }

}