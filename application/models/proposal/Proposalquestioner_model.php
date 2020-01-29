<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * select komponen kegiatan by provinsi
 */
class Proposalquestioner_model extends CI_Model {

    private $table = "tb_proposal_quisioner";
    private $selected_row = array("total_investasi", "harga_rata_rata_A", "harga_rata_rata_B");
   
    public function __construct() {
        parent::__construct();
        $this->load->database('default');
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

    function delete_by_proposal_id($id) {
        return $this->db->delete($this->table, array('proposal_id' => $id));
    }

    function get_proposal_id_selected($proposal_id) {
        $this->db->select("*");
        $this->db->where("proposal_id",$proposal_id);
        $result = $this->db->get($this->table)->result_array();
        $data = array();
        foreach($result as $value){
            $data[$value["key_question"]] = $value["value"];
            $data["verifikasi"][$value["key_question"]]["text"] = $value["verifikasi"];
            $data["verifikasi"][$value["key_question"]]["option"] = $value["option_verifikasi"];
            $data["harga_satuan"][$value["key_question"]]["text"] = $value["harga_satuan"];
            $data["harga_satuan"][$value["key_question"]]["option"] = $value["option_harga_satuan"];
            $data["indikator"][$value["key_question"]]["text"] = $value["indikator"];
            $data["indikator"][$value["key_question"]]["option"] = $value["option_indikator"];
        }
        return $data;
    }
}