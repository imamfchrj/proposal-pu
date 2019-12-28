<?php
class Users_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    public function person() {
        return $this->db->get('Person')->result();
    }
}