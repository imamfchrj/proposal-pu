<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airminumajax extends All_Controller {
    private $danger = "text-danger";
    private $success = "text-success";
    private $default = "text-dark";
    private $array_key = array("initial", "verifikasi", "indikator", "harga_satuan");
    function __construct() {
		parent::__construct();
        get_session_ajax();
        $this->load->model(array("Komponenkegiatan_model", "Provinsi_model", "proposal/Proposal_model", "proposal/Proposalquestioner_model"));
    }

    private function get_data_komponen($in_id = false, $year = false) {
        return $this->Komponenkegiatan_model->get_data_fix_and_in_id($in_id, $year);
    }

    public function approv() {
        $this->form_validation->set_rules('status', "Status", 'trim|required|xss_clean');
        $this->form_validation->set_rules('id', "Proposal", 'trim|required|xss_clean');
        if ($this->form_validation->run()) {
            $id = $this->form_validation->set_value('id');
            $status = $this->form_validation->set_value('status');
            $result = $this->Proposal_model->update_value_by_id(array(
                "status" => $status
            ), $id);
            if($result) {
                if($status == 1) {
                    $this->json_success("Proposal diterima");
                }elseif($status == 2) {
                    $this->json_success("Proposal direturn");
                }
            }
            return;
        }
        $this->json_badrequest(validation_errors());
    }

	public function list()
	{
		$input = $this->input->get();
		if(count($input) == 0) {
			$this->json_badrequest();
		}
		$search = $input["search"]["value"];
		$offer = $input["start"];
		$limit = $input["length"];
		$order = $input["order"][0]["column"];
		$order_type = $input["order"][0]["dir"];
		$data = $this->Proposal_model->proposal_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        $this->json($data);
	}
    
    private function cek_input() {
        $this->form_validation->set_rules('prov_id', "provinsi", 'trim|required|xss_clean');
        $this->form_validation->set_rules('jenis_spam', "Jenis SPAM", 'trim|required|xss_clean');

        // ketentuan teknis
        $this->form_validation->set_rules('jenis_spam_1_1_1', "Jenis SPAM 1.1.1", 'trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_2', "Jenis SPAM 1.1.2", 'trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_4A', "Jenis SPAM 1.1.4A", 'trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_5', "Jenis SPAM 1.1.5", 'trim|xss_clean');
        
        // pelayanan
        $this->form_validation->set_rules('pelayanan_1_2_1A', "Pelayanan 1.2.1A", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_1B', "Pelayanan 1.2.1B", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_1D', "Pelayanan 1.2.1D", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2C', "Pelayanan 1.2.2C", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2E', "Pelayanan 1.2.2E", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2H', "Pelayanan 1.2.2H", 'trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2I', "pelayanan_1_2_2I", 'trim|xss_clean');

        $this->form_validation->set_rules('unit_air_baku_1_3_1', "unit_air_baku_1_3_1", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_2', "unit_air_baku_1_3_2", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_3', "unit_air_baku_1_3_3", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_4', "unit_air_baku_1_3_4", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_5', "unit_air_baku_1_3_5", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_7', "unit_air_baku_1_3_7", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_8', "unit_air_baku_1_3_8", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_11', "unit_air_baku_1_3_11", 'trim|xss_clean');

        $this->form_validation->set_rules('unit_produksi_1_4_1', "unit_produksi_1_4_1", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_2', "unit_produksi_1_4_2", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_3', "unit_produksi_1_4_3", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_4', "unit_produksi_1_4_4", 'trim|xss_clean');

        $this->form_validation->set_rules('unit_distribusi_1_5_1', "unit_distribusi_1_5_1", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_2', "unit_distribusi_1_5_2", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_3', "unit_distribusi_1_5_3", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_6', "unit_distribusi_1_5_6", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_7', "unit_distribusi_1_5_7", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_8', "unit_distribusi_1_5_8", 'trim|xss_clean');

        $this->form_validation->set_rules('unit_pelayanan_1_6_1', "unit_pelayanan_1_6_1", 'trim|xss_clean');

        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
            $this->form_validation->set_rules('unit_air_baku_2_1_'.$index, "unit_air_baku_2_1_", 'trim|xss_clean');
            $this->form_validation->set_rules('unit_air_baku_2_1_'.$index.'A', "unit_air_baku_2_1_'.$index.'A", 'trim|xss_clean');
            $this->form_validation->set_rules('unit_air_baku_2_1_'.$index.'B', "unit_air_baku_2_1_'.$index.'B", 'trim|xss_clean');
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
            $this->form_validation->set_rules('unit_produksi_2_2_'.$index, "unit_produksi_2_2_", 'trim|xss_clean');
            $this->form_validation->set_rules('unit_produksi_2_2_'.$index.'A', "unit_produksi_2_2_'.$index.'A", 'trim|xss_clean');
            $this->form_validation->set_rules('unit_produksi_2_2_'.$index.'B', "unit_produksi_2_2_'.$index.'B", 'trim|xss_clean');
        }
        
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
        $this->form_validation->set_rules('unit_distribusi_2_3_'.$index, "unit_distribusi_2_3_", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_'.$index.'A', "unit_distribusi_2_3_'.$index.'A", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_'.$index.'B', "unit_distribusi_2_3_'.$index.'B", 'trim|xss_clean');
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
            $this->form_validation->set_rules('unit_pelayanan_2_4_'.$index, "unit_pelayanan_2_4_".$index, 'trim|xss_clean');
            $this->form_validation->set_rules('unit_pelayanan_2_4_'.$index.'A', "unit_pelayanan_2_4_'.$index.'A", 'trim|xss_clean');
            $this->form_validation->set_rules('unit_pelayanan_2_4_'.$index.'B', "unit_pelayanan_2_4_'.$index.'B", 'trim|xss_clean');
        }

        $this->form_validation->set_rules('biaya_non_standar_2_5_1', "biaya_non_standar_2_5_1", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_non_standar_2_5_2', "biaya_non_standar_2_5_2", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_non_standar_2_5_3', "biaya_non_standar_2_5_3", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_non_standar_2_5_4', "biaya_non_standar_2_5_4", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_non_standar_2_5_5', "biaya_non_standar_2_5_5", 'trim|xss_clean');

        $this->form_validation->set_rules('biaya_lain_lain_2_6_1', "biaya_lain_lain_2_6_1", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_lain_lain_2_6_2', "biaya_lain_lain_2_6_2", 'trim|xss_clean');
        $this->form_validation->set_rules('biaya_lain_lain_2_6_3', "biaya_lain_lain_2_6_3", 'trim|xss_clean');

        if ($this->form_validation->run()) {
            $data["prov_id"] = $this->form_validation->set_value('prov_id');
            $data["jenis_spam"] = $this->form_validation->set_value('jenis_spam');

            // ketentuan teknis
            $data["jenis_spam_1_1_1"] = to_float($this->form_validation->set_value('jenis_spam_1_1_1'));
            $data["jenis_spam_1_1_2"] = to_float($this->form_validation->set_value('jenis_spam_1_1_2'));
            $data["jenis_spam_1_1_4A"] = to_float($this->form_validation->set_value('jenis_spam_1_1_4A'));
            $data["jenis_spam_1_1_5"] = to_float($this->form_validation->set_value('jenis_spam_1_1_5'));

            // pelayanan
            $data["pelayanan_1_2_1A"] = to_float($this->form_validation->set_value('pelayanan_1_2_1A'));
            $data["pelayanan_1_2_1B"] = to_float($this->form_validation->set_value('pelayanan_1_2_1B'));
            $data["pelayanan_1_2_1D"] = to_float($this->form_validation->set_value('pelayanan_1_2_1D'));
            $data["pelayanan_1_2_2C"] = to_float($this->form_validation->set_value('pelayanan_1_2_2C'));
            $data["pelayanan_1_2_2E"] = to_float($this->form_validation->set_value('pelayanan_1_2_2E'));
            $data["pelayanan_1_2_2H"] = to_float($this->form_validation->set_value('pelayanan_1_2_2H'));
            $data["pelayanan_1_2_2I"] = to_float($this->form_validation->set_value('pelayanan_1_2_2I'));

            // unit air baku
            $data["unit_air_baku_1_3_1"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_1'));
            $data["unit_air_baku_1_3_2"] = $this->form_validation->set_value('unit_air_baku_1_3_2');
            $data["unit_air_baku_1_3_3"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_3'));
            $data["unit_air_baku_1_3_4"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_4'));
            $data["unit_air_baku_1_3_5"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_5'));
            $data["unit_air_baku_1_3_7"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_7'));
            $data["unit_air_baku_1_3_8"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_8'));
            $data["unit_air_baku_1_3_11"] = to_float($this->form_validation->set_value('unit_air_baku_1_3_11'));
            
            $data["unit_produksi_1_4_1"] = to_float($this->form_validation->set_value('unit_produksi_1_4_1'));
            $data["unit_produksi_1_4_2"] = to_float($this->form_validation->set_value('unit_produksi_1_4_2'));
            $data["unit_produksi_1_4_3"] = to_float($this->form_validation->set_value('unit_produksi_1_4_3'));
            $data["unit_produksi_1_4_4"] = to_float($this->form_validation->set_value('unit_produksi_1_4_4'));
            
            $data["unit_distribusi_1_5_1"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_1'));
            $data["unit_distribusi_1_5_2"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_2'));
            $data["unit_distribusi_1_5_3"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_3'));
            $data["unit_distribusi_1_5_6"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_6'));
            $data["unit_distribusi_1_5_7"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_7'));
            $data["unit_distribusi_1_5_8"] = to_float($this->form_validation->set_value('unit_distribusi_1_5_8'));
            
            $data["unit_pelayanan_1_6_1"] = to_float($this->form_validation->set_value('unit_pelayanan_1_6_1'));
            
            for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
                $data["unit_air_baku_2_1_".$index] = to_float($this->form_validation->set_value("unit_air_baku_2_1_".$index));
                $data["unit_air_baku_2_1_".$index."A"] = to_float($this->form_validation->set_value("unit_air_baku_2_1_".$index."A"));
                $data["unit_air_baku_2_1_".$index."B"] = to_float($this->form_validation->set_value("unit_air_baku_2_1_".$index."B"));
            }
            for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
                $data["unit_produksi_2_2_".$index] = to_float($this->form_validation->set_value("unit_produksi_2_2_".$index));
                $data["unit_produksi_2_2_".$index."A"] = to_float($this->form_validation->set_value("unit_produksi_2_2_".$index."A"));
                $data["unit_produksi_2_2_".$index."B"] = to_float($this->form_validation->set_value("unit_produksi_2_2_".$index."B"));
            }

            for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
            $data["unit_distribusi_2_3_".$index] = to_float($this->form_validation->set_value("unit_distribusi_2_3_".$index));
            $data["unit_distribusi_2_3_".$index."A"] = to_float($this->form_validation->set_value("unit_distribusi_2_3_".$index."A"));
            $data["unit_distribusi_2_3_".$index."B"] = to_float($this->form_validation->set_value("unit_distribusi_2_3_".$index."B"));
            }

            for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
                $data["unit_pelayanan_2_4_".$index] = to_float($this->form_validation->set_value("unit_pelayanan_2_4_".$index));
                $data["unit_pelayanan_2_4_".$index."A"] = to_float($this->form_validation->set_value("unit_pelayanan_2_4_".$index."A"));
                $data["unit_pelayanan_2_4_".$index."B"] = to_float($this->form_validation->set_value("unit_pelayanan_2_4_".$index."B"));
            }

            $data["biaya_non_standar_2_5_1"] = to_float($this->form_validation->set_value('biaya_non_standar_2_5_1'));
            $data["biaya_non_standar_2_5_2"] = to_float($this->form_validation->set_value('biaya_non_standar_2_5_2'));
            $data["biaya_non_standar_2_5_3"] = to_float($this->form_validation->set_value('biaya_non_standar_2_5_3'));
            $data["biaya_non_standar_2_5_4"] = to_float($this->form_validation->set_value('biaya_non_standar_2_5_4'));
            $data["biaya_non_standar_2_5_5"] = to_float($this->form_validation->set_value('biaya_non_standar_2_5_5'));
            
            $data["biaya_lain_lain_2_6_1"] = to_float($this->form_validation->set_value('biaya_lain_lain_2_6_1'));
            $data["biaya_lain_lain_2_6_2"] = to_float($this->form_validation->set_value('biaya_lain_lain_2_6_2'));
            $data["biaya_lain_lain_2_6_3"] = to_float($this->form_validation->set_value('biaya_lain_lain_2_6_3'));
            return $data;
        }
        $this->json_badrequest(validation_errors());	
        return false;
    }


    public function cek() {
        $data_input = $this->cek_input();
        $data_input = $this->calculate($data_input);
        $this->json_success($data_input);
    }

    function get_by_id($id_proposal) {
		$data_input = $this->Proposalquestioner_model->get_proposal_id_selected($id_proposal);
        $data_input = $this->initial($data_input);
        $this->json_success($data_input);
    }

    function get_chart($id_proposal) {
		$data_input = $this->Proposalquestioner_model->get_proposal_id_selected($id_proposal);
        $data_input = $this->initial($data_input);
        $result = $this->set_chart($data_input);
        $this->json_success($result);
    }

    function set_chart($data_input) {
        $result["total_wajar"] = 0;
        $result["total_justifikasi"] = 0;
        $result["wajar"] = array();
        $result["justifikasi"] = array();


        $result = $this->bab2_format_chart($result, "unit_air_baku_2_1", $data_input, PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1);
        $result = $this->bab2_format_chart($result, "unit_produksi_2_2", $data_input, PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2);
        $result = $this->bab2_format_chart($result, "unit_distribusi_2_3", $data_input, PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3);
        $result = $this->bab2_format_chart($result, "unit_pelayanan_2_4", $data_input, PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4);
        
        return $result;
    }

    private function bab2_format_chart($result, $key, $data_input, $count) {
        for($index = 1; $index <= $count; $index++) {
            if(!isset($data_input["verifikasi"][$key . "_" . $index]["text"])) {
                continue;
            }
            if(!isset($data_input[$key . "_". $index])) {
                continue;
            }
            $id = $data_input[$key . "_". $index];
            if(!isset($data_input["initial"][$id]['kegiatan'])) {
                continue;
            }

            $total_harga = $data_input[$key . "_". $index . "A"];
            $text = $data_input["verifikasi"][$key . "_" . $index]["text"]; 
            
            $kegiatan = $data_input["initial"][$id]['kegiatan'];
            $option = $data_input["verifikasi"][$key . "_" . $index]["option"];

            $tmp_result = "";
            if($option == $this->danger) {
                $result["total_justifikasi"] += $total_harga;
                $tmp_result = "justifikasi";
            }else {
                $result["total_wajar"] += $total_harga;
                $tmp_result = "wajar";
            }
            $result[$tmp_result][] = array(
                "kegiatan" => $kegiatan,
                "harga" => $total_harga,
                "verifikasi" => $text,
            );
        }
        return $result;
    }

    public function insert() {
        $data_input = $this->cek_input();
        $data_input = $this->calculate($data_input);
        // insert the data
        $this->db->trans_start();
        // insert proposal
        // get id 
        $data_proposal = array(
            "nama_proposal" => "Infrastruktur Spam Durolis",
            "key_proposal" => "air_minum",
            "prov_id" => $data_input["prov_id"],
            "user_id" => get_user_id(),
            "status" => 0,
        );
        if(isset($data_input["verifikasi"]["harga_rata_rata_A"]["text"])) {
            $data_proposal["proposal_status"] = $data_input["verifikasi"]["harga_rata_rata_A"]["text"];
        }
        $proposal_id = $this->Proposal_model->set($data_proposal);
        $this->try_insert($data_input, $proposal_id);
        if($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return $this->json_internal_error("Hubungi admin");
        }
        $this->db->trans_complete();
        $this->json_success($data_input);
    }

    public function update($proposal_id) {
        if(!$proposal_id) {
            $this->json_badrequest("Mohon dilakukan refresh ulang");
            return;
        }
        $data_input = $this->cek_input();
        $data_input = $this->calculate($data_input);
        // insert the data
        $this->db->trans_start();
        // insert proposal
        // get id 
        $data_proposal = array(
            "nama_proposal" => "Infrastruktur Spam Durolis",
            "key_proposal" => "air_minum",
            "prov_id" => $data_input["prov_id"],
            "user_id" => get_user_id(),
            "status" => 0,
        );
        if(isset($data_input["verifikasi"]["harga_rata_rata_A"]["text"])) {
            $data_proposal["proposal_status"] = $data_input["verifikasi"]["harga_rata_rata_A"]["text"];
        }
        $this->Proposal_model->update_value_by_id($data_proposal, $proposal_id);
        $this->Proposalquestioner_model->delete_by_proposal_id($proposal_id);
        $this->try_insert($data_input, $proposal_id);
        if($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return $this->json_internal_error("Hubungi admin");
        }
        $this->db->trans_complete();
        $this->json_success($data_input);

    }

    private function try_insert($data_input, $proposal_id) {
        
        foreach($data_input as $key => $value) {
            if(in_array($key, $this->array_key)){
                continue;
            }

            $this->insert_data($data_input, $proposal_id, $key, $value);
        }
        
        // cek kondisi nil
        $already_inserted = array();
        foreach($data_input["indikator"] as $key => $value) {
            if(isset($data_input[$key])) {
                continue;
            }
            if(in_array($key, $already_inserted)) {
                continue;
            }
            $already_inserted[] = $key;

            $this->insert_data($data_input, $proposal_id, $key, $value);
        }
        foreach($data_input["harga_satuan"] as $key => $value) {
            if(isset($data_input[$key])) {
                continue;
            }
            if(in_array($key, $already_inserted)) {
                continue;
            }
            $already_inserted[] = $key;

            $this->insert_data($data_input, $proposal_id, $key, $value);
        }
        foreach($data_input["indikator"] as $key => $value) {
            if(isset($data_input[$key])) {
                continue;
            }
            if(in_array($key, $already_inserted)) {
                continue;
            }
            $already_inserted[] = $key;          
            $this->insert_data($data_input, $proposal_id, $key, $value);
        }

    }

    private function insert_data($data_input, $proposal_id, $key, $value) {
        $data = array(
            "proposal_id" => $proposal_id,
            "key_proposal" => "air_minum",
            "key_question" => $key,
        );
        if(!is_array($value)) {
            $data["value"] = $value;
        }

        if(isset($data_input["verifikasi"][$key]["text"])) {
            $data["verifikasi"] = $data_input["verifikasi"][$key]["text"];
            $data["option_verifikasi"] = $data_input["verifikasi"][$key]["option"];
        }
        if(isset($data_input["harga_satuan"][$key]["text"])) {
            $data["harga_satuan"] = $data_input["harga_satuan"][$key]["text"];
            $data["option_harga_satuan"] = $data_input["harga_satuan"][$key]["option"];
        }
        if(isset($data_input["indikator"][$key]["text"])) {
            $data["indikator"] = $data_input["indikator"][$key]["text"];
            $data["option_indikator"] = $data_input["indikator"][$key]["option"];
        }
        if(isset($data_input[$key])) {
            if(isset($data_input["initial"][$data_input[$key]])) {
                $data["id_group_komponen"] = $data_input[$key];
            }
        }
        $this->Proposalquestioner_model->set($data);
    }



    private function calculate($data_input) {
        $data_input = $this->initial($data_input);

        $data_input = $this->jenis_spam_1_1_3($data_input);
        $data_input = $this->jenis_spam_1_1_4B($data_input);
        $data_input = $this->pelayanan_1_2_1C($data_input);
        $data_input = $this->jenis_spam_1_1_6($data_input);
        $data_input = $this->pelayanan_1_2_2A($data_input);
        $data_input = $this->pelayanan_1_2_2B($data_input);
        $data_input = $this->pelayanan_1_2_2D($data_input);
        $data_input = $this->pelayanan_1_2_2F($data_input);
        $data_input = $this->pelayanan_1_2_2G($data_input);
        $data_input = $this->pelayanan_1_2_2I($data_input);
        $data_input = $this->pelayanan_1_2_3A($data_input);
        $data_input = $this->pelayanan_1_2_3B($data_input);
        $data_input = $this->pelayanan_1_2_3B_2($data_input); // add imam
        $data_input = $this->pelayanan_1_2_3C($data_input);
        $data_input = $this->pelayanan_1_2_3C_2($data_input); // add imam
        $data_input = $this->pelayanan_1_2_3D($data_input);
        $data_input = $this->pelayanan_1_2_3D_2($data_input); // add imam
        $data_input = $this->unit_air_baku_1_3_1($data_input);
        $data_input = $this->unit_air_baku_1_3_3($data_input);
        $data_input = $this->unit_air_baku_1_3_6($data_input);
        $data_input = $this->unit_air_baku_1_3_8($data_input);
        $data_input = $this->unit_air_baku_1_3_9($data_input);
        $data_input = $this->unit_air_baku_1_3_10($data_input);
        $data_input = $this->unit_air_baku_1_3_12($data_input);
        $data_input = $this->unit_air_baku_1_3_13($data_input);
        $data_input = $this->unit_produksi_1_4_1($data_input);
        $data_input = $this->unit_produksi_1_4_2($data_input);
        $data_input = $this->unit_distribusi_1_5_1($data_input);
        $data_input = $this->unit_distribusi_1_5_2A($data_input);
        $data_input = $this->unit_distribusi_1_5_4($data_input);
        $data_input = $this->unit_distribusi_1_5_5($data_input);
        $data_input = $this->unit_distribusi_1_5_6($data_input);
        $data_input = $this->unit_distribusi_1_5_8($data_input);
        $data_input = $this->unit_pelayanan_1_6_2($data_input);
        $data_input = $this->unit_pelayanan_1_6_3($data_input);

        $data_input = $this->bab2_format("unit_air_baku_2_1", $data_input, PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1);
        $data_input = $this->bab2_format("unit_produksi_2_2", $data_input, PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2);
        $data_input = $this->bab2_format("unit_distribusi_2_3", $data_input, PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3);
        $data_input = $this->bab2_format("unit_pelayanan_2_4", $data_input, PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4);
        
        
        $data_input = $this->aggregator($data_input);
        $data_input = $this->biaya_non_standar_2_5_1($data_input);
        $data_input = $this->biaya_non_standar_2_5_2($data_input);
        $data_input = $this->biaya_non_standar_2_5_3($data_input);
        $data_input = $this->biaya_non_standar_2_5_4($data_input);
        $data_input = $this->biaya_non_standar_2_5_5($data_input);
        $data_input = $this->biaya_lain_lain_2_6_1($data_input);
        $data_input = $this->biaya_lain_lain_2_6_2($data_input);
        
        $data_input = $this->set_rounding($data_input);
        

        return $data_input;
    }
    
    private function initial($data_input) {
        $in_id = array();
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
            if(!isset($data_input["unit_air_baku_2_1_" . $index])) {
                continue;
            }
            if(!$data_input["unit_air_baku_2_1_".$index]){
                continue;
            }
            $in_id[] = $data_input["unit_air_baku_2_1_".$index];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
            if(!isset($data_input["unit_produksi_2_2_" . $index])) {
                continue;
            }
            if(!$data_input["unit_produksi_2_2_".$index]){
                continue;
            }
            $in_id[] = $data_input["unit_produksi_2_2_".$index];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
            if(!isset($data_input["unit_distribusi_2_3_" . $index])) {
                continue;
            }
            if(!$data_input["unit_distribusi_2_3_".$index]){
                continue;
            }
            $in_id[] = $data_input["unit_distribusi_2_3_".$index];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
            if(!isset($data_input["unit_pelayanan_2_4_" . $index])) {
                continue;
            }
            if(!$data_input["unit_pelayanan_2_4_".$index]){
                continue;
            }
            $in_id[] = $data_input["unit_pelayanan_2_4_".$index];
        }
        $data_id = array("unit_distribusi_2_3_1");
        foreach($data_id as $value) {
            if(!isset($data_input[$value])) {
                continue;
            }
            if(!$data_input[$value]){
                continue;
            }
            $in_id[] = $data_input[$value];
        }

        $data_input["initial"]["ikk_provinsi"] = $this->Provinsi_model->get_ikk_provinsi($data_input["prov_id"]);
        $data_input["initial"] = $this->get_data_komponen($data_input["initial"]["ikk_provinsi"], $in_id);
        return $data_input;
    }

    private function set_rounding($data_input) {
        $data_input["jenis_spam_1_1_4B"] = round_custom( $data_input["jenis_spam_1_1_4B"],2);
        $data_input["pelayanan_1_2_2A"] = round_custom( $data_input["pelayanan_1_2_2A"],2);
        $data_input["pelayanan_1_2_2D"] = round_custom( $data_input["pelayanan_1_2_2D"],2);
        $data_input["pelayanan_1_2_2F"] = round_custom( $data_input["pelayanan_1_2_2F"],2);
        $data_input["pelayanan_1_2_2G"] = round_custom( $data_input["pelayanan_1_2_2G"],2);
        $data_input["pelayanan_1_2_2I"] = round_custom( $data_input["pelayanan_1_2_2I"],2);
//        $data_input["pelayanan_1_2_3A"] = round($data_input["pelayanan_1_2_3A"], 2);
//        $data_input["pelayanan_1_2_3B"] = round($data_input["pelayanan_1_2_3B"], 2);
//        $data_input["pelayanan_1_2_3B_2"] = round($data_input["pelayanan_1_2_3B_2"], 2); // add imam
//        $data_input["pelayanan_1_2_3C"] = round($data_input["pelayanan_1_2_3C"], 2);
//        $data_input["pelayanan_1_2_3C_2"] = round($data_input["pelayanan_1_2_3C_2"], 2); // add imam
//        $data_input["pelayanan_1_2_3D"] = round($data_input["pelayanan_1_2_3D"], 2);
//        $data_input["pelayanan_1_2_3D_2"] = round($data_input["pelayanan_1_2_3D_2"], 2); // add imam
        $data_input["pelayanan_1_2_3A"] = ceil($data_input["pelayanan_1_2_3A"]);
        $data_input["pelayanan_1_2_3B"] = ceil($data_input["pelayanan_1_2_3B"]);
        $data_input["pelayanan_1_2_3B_2"] = ceil($data_input["pelayanan_1_2_3B_2"]); // add imam
        $data_input["pelayanan_1_2_3C"] = ceil($data_input["pelayanan_1_2_3C"]);
        $data_input["pelayanan_1_2_3C_2"] = ceil($data_input["pelayanan_1_2_3C_2"]); // add imam
        $data_input["pelayanan_1_2_3D"] = ceil($data_input["pelayanan_1_2_3D"]);
        $data_input["pelayanan_1_2_3D_2"] = ceil($data_input["pelayanan_1_2_3D_2"]); // add imam
        $data_input["unit_air_baku_1_3_8"] = round_custom($data_input["unit_air_baku_1_3_8"], 2);
        $data_input["unit_air_baku_1_3_9"] = round_custom($data_input["unit_air_baku_1_3_9"], 2);
        $data_input["unit_air_baku_1_3_10"] = round_custom($data_input["unit_air_baku_1_3_10"], 2);
        $data_input["unit_air_baku_1_3_12"] = round_custom($data_input["unit_air_baku_1_3_12"], 2);
        $data_input["unit_air_baku_1_3_13"] = round_custom($data_input["unit_air_baku_1_3_13"], 2);
        $data_input["unit_distribusi_1_5_1"] = round($data_input["unit_distribusi_1_5_1"],2);
        $data_input["unit_distribusi_1_5_2A"] = round_custom($data_input["unit_distribusi_1_5_2A"],2);
        $data_input["unit_distribusi_1_5_4"] = round($data_input["unit_distribusi_1_5_4"],2);
        $data_input["unit_distribusi_1_5_5"] = round($data_input["unit_distribusi_1_5_5"],2);
        $data_input["unit_distribusi_1_5_8"] = round($data_input["unit_distribusi_1_5_8"],2);
        $data_input["unit_pelayanan_1_6_2"] = round($data_input["unit_pelayanan_1_6_2"],2);
        $data_input["unit_pelayanan_1_6_3"] = round($data_input["unit_pelayanan_1_6_3"],2);
        return $data_input;
    }

    private function jenis_spam_1_1_3($data_input) {
        $data_input["jenis_spam_1_1_3"] = $data_input["jenis_spam_1_1_1"] - $data_input["jenis_spam_1_1_2"];
        return $data_input;
    }

    private function jenis_spam_1_1_4B($data_input) {
        $data_input["jenis_spam_1_1_4B"] = to_percent($data_input["jenis_spam_1_1_4A"]) *  $data_input["jenis_spam_1_1_2"];
        
        return $data_input;
    }

    private function jenis_spam_1_1_6($data_input) {
        $data_input["jenis_spam_1_1_6"] = $data_input["jenis_spam_1_1_5"] *  $data_input["pelayanan_1_2_1D"];
        return $data_input;
    }

    private function pelayanan_1_2_1C($data_input) {
        $data_input["pelayanan_1_2_1C"] =  $data_input["pelayanan_1_2_1A"] * to_percent($data_input["pelayanan_1_2_1B"]);
        return $data_input;
    }

    private function pelayanan_1_2_2A($data_input) {
        if($data_input["pelayanan_1_2_1D"] == 0) {
            $data_input["pelayanan_1_2_2A"] = 0;
            return $data_input;
        }
        $data_input["pelayanan_1_2_2A"] =  $data_input["pelayanan_1_2_1C"] / $data_input["pelayanan_1_2_1D"];
        return $data_input;
    }

    private function pelayanan_1_2_2B($data_input) {
        $data_input["pelayanan_1_2_2B"] =  $data_input["pelayanan_1_2_2A"] - $data_input["jenis_spam_1_1_5"];
        return $data_input;
    }

    private function pelayanan_1_2_2D($data_input) {
        $data_input["pelayanan_1_2_2D"] =  $data_input["pelayanan_1_2_1C"] * $data_input["pelayanan_1_2_2C"] / 86400;

        return $data_input;
    }

    private function pelayanan_1_2_2F($data_input) {
        $data_input["pelayanan_1_2_2F"] =  $data_input["pelayanan_1_2_2D"] * to_percent($data_input["pelayanan_1_2_2E"]);
        return $data_input;
    }

    private function pelayanan_1_2_2G($data_input) {
        $data_input["pelayanan_1_2_2G"] =  $data_input["pelayanan_1_2_2F"] + ($data_input["pelayanan_1_2_2D"]);
        return $data_input;
    }

    private function pelayanan_1_2_2I($data_input) {
        $data_input["pelayanan_1_2_2I"] =  $data_input["pelayanan_1_2_2G"] / (1 - to_percent($data_input["pelayanan_1_2_2H"])) * to_percent($data_input["pelayanan_1_2_2H"]);
        return $data_input;
    }

    private function pelayanan_1_2_3A($data_input) {
        $data_input["pelayanan_1_2_3A"] =  $data_input["pelayanan_1_2_2I"] + $data_input["pelayanan_1_2_2G"];
        return $data_input;
    }

    private function pelayanan_1_2_3B($data_input) {
        $data_input["pelayanan_1_2_3B"] =  1.1 * $data_input["pelayanan_1_2_3A"]; // mod imam 1.2 -> 1.1
        return $data_input;
    }

    // add imam
    private function pelayanan_1_2_3B_2($data_input) {
        $data_input["pelayanan_1_2_3B_2"] =  1.5 * $data_input["pelayanan_1_2_3A"];
        return $data_input;
    }

    private function pelayanan_1_2_3C($data_input) {
        $data_input["pelayanan_1_2_3C"] =  $data_input["pelayanan_1_2_3B"] - $data_input["jenis_spam_1_1_3"];
        return $data_input;
    }

    // add imam
    private function pelayanan_1_2_3C_2($data_input) {
        $data_input["pelayanan_1_2_3C_2"] =  $data_input["pelayanan_1_2_3B_2"] - $data_input["jenis_spam_1_1_3"];
        return $data_input;
    }

    private function pelayanan_1_2_3D($data_input) {
        $data_input["pelayanan_1_2_3D"] =  $data_input["pelayanan_1_2_3A"] * 1.5; // mod imam 1.75 -> 1.5
        return $data_input;
    }

    // add imam
    private function pelayanan_1_2_3D_2($data_input) {
        $data_input["pelayanan_1_2_3D_2"] =  $data_input["pelayanan_1_2_3A"] * 2;
        return $data_input;
    }

    private function unit_air_baku_1_3_1($data_input) {
//        $data_input["indikator"]["unit_air_baku_1_3_1"]["text"] = round_custom($data_input["pelayanan_1_2_3C"] * to_percent(105),2)."  ~  ".round_custom($data_input["pelayanan_1_2_3C_2"] * to_percent(105),2); // add imam
        $data_input["indikator"]["unit_air_baku_1_3_1"]["text"] = ceil($data_input["pelayanan_1_2_3C"] * to_percent(105))."  ~  ".ceil($data_input["pelayanan_1_2_3C_2"] * to_percent(105)); // add imam
        $data_input["indikator"]["unit_air_baku_1_3_1"]["option"] = $this->default; // add imam
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_air_baku_1_3_1"] >= ceil(($data_input["pelayanan_1_2_3C"]* to_percent(105)))) && ($data_input["unit_air_baku_1_3_1"] <= ceil(($data_input["pelayanan_1_2_3C_2"]* to_percent(105))))) { // mod by imam
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_1"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_1"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_3($data_input) {
        $data_input["indikator"]["unit_air_baku_1_3_3"]["text"] = "600"; // add imam
        $data_input["indikator"]["unit_air_baku_1_3_3"]["option"] = $this->default; // add imam
        $text="Non Prasedimentasi";
        $option=$this->danger;
        if($data_input["unit_air_baku_1_3_3"] >= 600) {
            $text="Prasedimentasi";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_3"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_3"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_6($data_input) {
        $data_input["unit_air_baku_1_3_6"] = $data_input["unit_air_baku_1_3_4"] - $data_input["unit_produksi_1_4_3"];
//        $data_input["unit_air_baku_1_3_6"] = abs($data_input["unit_air_baku_1_3_6"]);
        $data_input["indikator"]["unit_air_baku_1_3_6"]["text"] = "0"; // add imam
        $data_input["indikator"]["unit_air_baku_1_3_6"]["option"] = $this->default; // add imam
        $text="Pompa";
        $option=$this->success;
        if($data_input["unit_air_baku_1_3_6"] > 0) {
            $text="Gravitasi";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_6"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_6"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_8($data_input) {
        if($data_input["unit_air_baku_1_3_7"] == 0){
            $data_input["unit_air_baku_1_3_8"] = 0;
            return $data_input;
        }
        $data_input["unit_air_baku_1_3_8"] = ($data_input["unit_air_baku_1_3_1"]/1000) / (0.25*3.14*(pow(($data_input["unit_air_baku_1_3_7"]/1000),2)));
        $data_input["indikator"]["unit_air_baku_1_3_8"]["text"] = "0.5 - 2.5 "; // add imam
        $data_input["indikator"]["unit_air_baku_1_3_8"]["option"] = $this->default; // add imam
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_air_baku_1_3_8"] >= 0.5 && $data_input["unit_air_baku_1_3_8"] <= 2.5 ) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_8"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_8"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_9($data_input) {
        $data_input["unit_air_baku_1_3_9"] = 0;
        if(!isset($data_input["unit_air_baku_1_3_7"])) {
            return $data_input;
        }
        if($data_input["unit_air_baku_1_3_7"] == 0) {
            return $data_input;
        }
        if($data_input["unit_air_baku_1_3_5"] == 0) {
            $data_input["unit_air_baku_1_3_9"] = 0;
            return $data_input;
        }
        $data_input["unit_air_baku_1_3_9"] = ((pow((
            ($data_input["unit_air_baku_1_3_1"]/1000) 
            / 
            (0.2785*100*(
                pow(($data_input["unit_air_baku_1_3_7"]/1000),2.63)))
        ),1.85))*$data_input["unit_air_baku_1_3_5"])*1.05;
        $data_input["indikator"]["unit_air_baku_1_3_9"]["text"] = " 10 "; // add imam
        $data_input["indikator"]["unit_air_baku_1_3_9"]["option"] = $this->default; // add imam
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_air_baku_1_3_9"] / $data_input["unit_air_baku_1_3_5"]*1000) < 10 ) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_9"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_9"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_10($data_input) {
        $data_input["unit_air_baku_1_3_10"] =  $data_input["unit_air_baku_1_3_6"] - $data_input["unit_air_baku_1_3_9"];
        $data_input["indikator"]["unit_air_baku_1_3_10"]["text"] = "0"; // add imam
        $data_input["indikator"]["unit_air_baku_1_3_10"]["option"] = $this->default; // add imam
        $text="Pompa";
        $option=$this->success;
        if($data_input["unit_air_baku_1_3_10"] > 0) {
            $text="Gravitasi";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_10"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_10"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_12($data_input) {
        $data_input["unit_air_baku_1_3_12"] =  $data_input["unit_air_baku_1_3_11"] - $data_input["unit_air_baku_1_3_10"];
        return $data_input;
    }

    private function unit_air_baku_1_3_13($data_input) {
        $data_input["unit_air_baku_1_3_13"] = (($data_input["unit_air_baku_1_3_1"]/1000)*$data_input["unit_air_baku_1_3_12"]*9.81)/(0.9*0.8);
        return $data_input;
    }

    private function unit_produksi_1_4_1($data_input) {
//        $data_input["indikator"]["unit_produksi_1_4_1"]["text"] = round_custom($data_input["pelayanan_1_2_3C"],2)."  ~  ".round_custom($data_input["pelayanan_1_2_3C_2"],2); // add imam
        $data_input["indikator"]["unit_produksi_1_4_1"]["text"] = ceil($data_input["pelayanan_1_2_3C"])."  ~  ".ceil($data_input["pelayanan_1_2_3C_2"]); // add imam
        $data_input["indikator"]["unit_produksi_1_4_1"]["option"] = $this->default; // add imam
        $data_input["unit_produksi_1_4_1"] = ($data_input["unit_produksi_1_4_1"]);
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_produksi_1_4_1"] >= ceil(($data_input["pelayanan_1_2_3C"]))) && ($data_input["unit_produksi_1_4_1"] <= ceil(($data_input["pelayanan_1_2_3C_2"])))) { // mod imam
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_produksi_1_4_1"]["text"] = $text;
        $data_input["verifikasi"]["unit_produksi_1_4_1"]["option"] = $option;
        return $data_input;
    }

    private function unit_produksi_1_4_2($data_input) {
//        $data_input["indikator"]["unit_produksi_1_4_2"]["text"] = round_custom($data_input["pelayanan_1_2_3C"],2)."  ~  ".round_custom($data_input["pelayanan_1_2_3C_2"],2); // add imam
        $data_input["indikator"]["unit_produksi_1_4_2"]["text"] = ceil($data_input["pelayanan_1_2_3C"])."  ~  ".ceil($data_input["pelayanan_1_2_3C_2"]); // add imam
        $data_input["indikator"]["unit_produksi_1_4_2"]["option"] = $this->default; // add imam
        $data_input["unit_produksi_1_4_2"] = ($data_input["unit_produksi_1_4_2"]);
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_produksi_1_4_2"] >= ceil(($data_input["pelayanan_1_2_3C"]))) && ($data_input["unit_produksi_1_4_2"] <= ceil(($data_input["pelayanan_1_2_3C_2"])))) { // mod imam
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_produksi_1_4_2"]["text"] = $text;
        $data_input["verifikasi"]["unit_produksi_1_4_2"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_1($data_input) {
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_distribusi_1_5_1"] > ($data_input["pelayanan_1_2_3C"]*86.4*to_percent(15)) && $data_input["unit_distribusi_1_5_1"] < ($data_input["pelayanan_1_2_3C"]*86.4*to_percent(20)) ) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_distribusi_1_5_1"]["text"] = $text;
        $data_input["verifikasi"]["unit_distribusi_1_5_1"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_2A($data_input) {
        $data_input["unit_distribusi_1_5_2A"] = $data_input["unit_distribusi_1_5_2"] - $data_input["unit_pelayanan_1_6_1"] ;
        $text="Pompa";
        $option=$this->danger;
        if($data_input["unit_distribusi_1_5_2A"] >= 0 ) {
            $text="Gravitasi";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_distribusi_1_5_2A"]["text"] = $text;
        $data_input["verifikasi"]["unit_distribusi_1_5_2A"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_4($data_input) {
        if($data_input["unit_distribusi_1_5_3"] == 0) {
            $data_input["unit_distribusi_1_5_4"] = 0;
            return $data_input;
        }
        $data_input["unit_distribusi_1_5_4"] = ($data_input["pelayanan_1_2_3D"]/1000) / 
        (0.25*3.14*(
            pow(
                ($data_input["unit_distribusi_1_5_3"]/1000)
                ,2)
            )
        );
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_distribusi_1_5_4"] < 2) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_distribusi_1_5_4"]["text"] = $text;
        $data_input["verifikasi"]["unit_distribusi_1_5_4"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_5($data_input) {
        if($data_input["unit_distribusi_1_5_3"]==0) {
            $data_input["unit_distribusi_1_5_5"] = 0;
            return $data_input;
        }
        $data_input["unit_distribusi_1_5_5"] =
            ((pow((
                    ($data_input["unit_produksi_1_4_2"]/1000)
                    /
                    (0.2785*100*(
                        pow(($data_input["unit_distribusi_1_5_3"]/1000),2.63)))
                ),1.85))*$data_input["unit_distribusi_1_5_1"])*1.05;
//            ((pow((($data_input["unit_produksi_1_4_2"]/1000) / (0.2785*100*(pow(($data_input["unit_distribusi_1_5_3"]/100),2.63)))),1.85))*$data_input["unit_distribusi_1_5_1"])*1.05;

        $data_input["indikator"]["unit_distribusi_1_5_5"]["text"] = "Indikator dihitung menggunakan Software tesendiri"; // add imam
        $data_input["indikator"]["unit_distribusi_1_5_5"]["option"] = $this->default; // add imam
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_distribusi_1_5_5"]/$data_input["unit_distribusi_1_5_1"]*1000) < 10) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_distribusi_1_5_5"]["text"] = $text;
        $data_input["verifikasi"]["unit_distribusi_1_5_5"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_6($data_input) {
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_distribusi_1_5_6"] >= $data_input["pelayanan_1_2_3D"]) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_distribusi_1_5_6"]["text"] = $text;
        $data_input["verifikasi"]["unit_distribusi_1_5_6"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_1_5_8($data_input) {
        $data_input["unit_distribusi_1_5_8"] = (($data_input["pelayanan_1_2_2C"]/1000)*$data_input["unit_distribusi_1_5_7"]*9.81)/(0.9*0.8);
       return $data_input;
    }

    private function unit_pelayanan_1_6_2($data_input) {
        $data_input["unit_pelayanan_1_6_2"] = $data_input["pelayanan_1_2_2A"];
       return $data_input;
    }

    private function unit_pelayanan_1_6_3($data_input) {
        $data_input["unit_pelayanan_1_6_3"] = $data_input["unit_pelayanan_1_6_2"]*6;
       return $data_input;
    }
    

    /**
     * Bab 2
     */

    private function bab2_format($key,$data_input, $count) {
        // PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1

        for($index = 1; $index <= $count; $index++) {
            $data_input[$key . "_". $index . "B"] = get_static_data($key . "_". $index, $data_input);
            if($data_input[$key . "_". $index . "B"] == 0) {
                continue;
            }
            if(!$data_input[$key . "_". $index]) {
                continue;
            }
            $id = $data_input[$key . "_". $index];
            $data_input["harga_satuan"][$key . "_" . $index]["text"] = round_custom($data_input[$key . "_". $index . "A"] / 1000 / $data_input[$key . "_". $index . "B"],2);
            $data_input["harga_satuan"][$key . "_" . $index]["option"] = $this->default;
            
            $data_input["indikator"][$key . "_" . $index]["text"] = round_custom($data_input["initial"][$id]['harga_satuan'],2);
            $data_input["indikator"][$key . "_" . $index]["option"] = $this->default;

            $text="Justifikasi";
            $option=$this->danger;
            if($data_input["harga_satuan"][$key . "_" . $index]["text"] <= $data_input["initial"][$id]['harga_satuan']) {
                $text="Wajar";
                $option=$this->success;
            }
            $data_input["verifikasi"][$key . "_" . $index]["text"] = $text;
            $data_input["verifikasi"][$key . "_" . $index]["option"] = $option;
        }
        return $data_input;
    }
    private function unit_produksi_2_2_3($data_input) {
        if($data_input["unit_produksi_2_2_3B"] == 0) {
            return $data_input;
        }
        $data_input["harga_satuan"]["unit_produksi_2_2_3"]["text"] = round_custom( $data_input["unit_produksi_2_2_3A"] / 1000 / $data_input["unit_produksi_2_2_3B"],2);
        $data_input["harga_satuan"]["unit_produksi_2_2_3"]["option"] = $this->default;
        $data_input["indikator"]["unit_produksi_2_2_3"]["text"] = $data_input["initial"]['scada']['harga_satuan'] + $data_input["initial"]['plc']['harga_satuan'];
        $data_input["indikator"]["unit_produksi_2_2_3"]["option"] = $this->default;
         $text="Justifikasi";
        $option=$this->danger;
        if($data_input["harga_satuan"]["unit_produksi_2_2_3"]["text"] <= $data_input["indikator"]["unit_produksi_2_2_3"]["text"]) {
            $text="Wajar";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_produksi_2_2_3"]["text"] = $text;
        $data_input["verifikasi"]["unit_produksi_2_2_3"]["option"] = $option;
        return $data_input;
    }

    private function unit_distribusi_2_3_1($data_input){
        return $this->default_by_id($data_input, "unit_distribusi_2_3_1");
    }

    private function unit_distribusi_2_3_3($data_input){
        return $this->default($data_input, "unit_distribusi_2_3_3", "pompa_genset");
    }

    private function unit_distribusi_2_3_4($data_input){
        return $this->default($data_input, "unit_distribusi_2_3_4", "pompa_genset");
    }

    private function unit_distribusi_2_3_5($data_input){
        return $this->default($data_input, "unit_distribusi_2_3_5", "workshop");
    }

    private function unit_distribusi_2_3_6($data_input){
        return $this->default($data_input, "unit_distribusi_2_3_6", "rumah_jaga");
    }

    private function unit_distribusi_2_3_8($data_input){
        return $this->default($data_input, "unit_distribusi_2_3_8", "hdd");
    }

    private function default($data_input, $key_input, $fix_key) {
        if($data_input[$key_input."B"] == 0) {
            return $data_input;
        }
        $data_input["harga_satuan"][$key_input]["text"] = round_custom($data_input[$key_input."A"] / 1000 / $data_input[$key_input."B"],2);
        $data_input["harga_satuan"][$key_input]["option"] = $this->default;
        $data_input["indikator"][$key_input]["text"] = round_custom($data_input["initial"][$fix_key]['harga_satuan'],2);
        $data_input["indikator"][$key_input]["option"] = $this->default;
         $text="Justifikasi";
        $option=$this->danger;
        if($data_input["harga_satuan"][$key_input]["text"] <= $data_input["indikator"][$key_input]["text"]) {
            $text="Wajar";
            $option=$this->success;
        }
        $data_input["verifikasi"][$key_input]["text"] = $text;
        $data_input["verifikasi"][$key_input]["option"] = $option;
        return $data_input;
    }


    private function default_by_id($data_input, $key_input) {
        $key_id = $data_input[$key_input];
        if($key_id == 0) {
            return $data_input;
        }
        if($data_input[$key_input."B"] == 0) {
            return $data_input;
        }
        $data_input["harga_satuan"][$key_input]["text"] = round_custom($data_input[$key_input."A"] / 1000 / $data_input[$key_input."B"],2);
        $data_input["harga_satuan"][$key_input]["option"] = $this->default;
        $data_input["indikator"][$key_input]["text"] = round_custom($data_input["initial"][$key_id]['harga_satuan'],2);
        $data_input["indikator"][$key_input]["option"] = $this->default;
         $text="Justifikasi";
        $option=$this->danger;
        if($data_input["harga_satuan"][$key_input]["text"] <= $data_input["indikator"][$key_input]["text"]) {
            $text="Wajar";
            $option=$this->success;
        }
        $data_input["verifikasi"][$key_input]["text"] = $text;
        $data_input["verifikasi"][$key_input]["option"] = $option;
        return $data_input;
    }
    

    private function unit_distribusi_2_3_7($data_input) {
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71; $index++) {
            if($data_input["unit_distribusi_2_3_7". $index . "B"] == 0) {
                continue;
            }
            if(!$data_input["unit_distribusi_2_3_7". $index]) {
                continue;
            }
            $id = $data_input["unit_distribusi_2_3_7". $index];
            $data_input["harga_satuan"]["unit_distribusi_2_3_7" . $index]["text"] = round_custom($data_input["unit_distribusi_2_3_7". $index . "A"] / 1000 / $data_input["unit_distribusi_2_3_7". $index . "B"],2);
            $data_input["harga_satuan"]["unit_distribusi_2_3_7" . $index]["option"] = $this->default;
            
            $data_input["indikator"]["unit_distribusi_2_3_7" . $index]["text"] = round_custom($data_input["initial"][$id]['harga_satuan'],2);
            $data_input["indikator"]["unit_distribusi_2_3_7" . $index]["option"] = $this->default;

            $text="Justifikasi";
            $option=$this->danger;
            if($data_input["harga_satuan"]["unit_distribusi_2_3_7" . $index]["text"] <= $data_input["initial"][$id]['harga_satuan']) {
                $text="Wajar";
                $option=$this->success;
            }
            $data_input["verifikasi"]["unit_distribusi_2_3_7" . $index]["text"] = $text;
            $data_input["verifikasi"]["unit_distribusi_2_3_7" . $index]["option"] = $option;
        }
        return $data_input;
    }


    private function unit_pelayanan_2_4($data_input) {
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
            if($data_input["unit_pelayanan_2_4_". $index . "B"] == 0) {
                continue;
            }
            if(!$data_input["unit_pelayanan_2_4_". $index]) {
                continue;
            }
            $id = $data_input["unit_pelayanan_2_4_". $index];
            $data_input["harga_satuan"]["unit_pelayanan_2_4_" . $index]["text"] = round_custom($data_input["unit_pelayanan_2_4_". $index . "A"] / 1000 / $data_input["unit_pelayanan_2_4_". $index . "B"],2);
            $data_input["harga_satuan"]["unit_pelayanan_2_4_" . $index]["option"] = $this->default;
            
            $data_input["indikator"]["unit_pelayanan_2_4_" . $index]["text"] = round_custom($data_input["initial"][$id]['harga_satuan'],2);
            $data_input["indikator"]["unit_pelayanan_2_4_" . $index]["option"] = $this->default;

            $text="Justifikasi";
            $option=$this->danger;
            if($data_input["harga_satuan"]["unit_pelayanan_2_4_" . $index]["text"] <= $data_input["initial"][$id]['harga_satuan']) {
                $text="Wajar";
                $option=$this->success;
            }
            $data_input["verifikasi"]["unit_pelayanan_2_4_" . $index]["text"] = $text;
            $data_input["verifikasi"]["unit_pelayanan_2_4_" . $index]["option"] = $option;
        }
        return $data_input;
    }

    private function biaya_non_standar_2_5_1($data_input) {
        return $this->non_standard($data_input, "biaya_non_standar_2_5_1", 10, 10);
    }

    private function biaya_non_standar_2_5_2($data_input) {
        return $this->non_standard($data_input, "biaya_non_standar_2_5_2", 20, 20);
    }

    private function biaya_non_standar_2_5_3($data_input) {
        return $this->non_standard($data_input, "biaya_non_standar_2_5_3", 5, 5);
    }

    private function biaya_non_standar_2_5_4($data_input) {
        return $this->non_standard($data_input, "biaya_non_standar_2_5_4", 5, 5);
    }

    private function biaya_non_standar_2_5_5($data_input) {
        return $this->non_standard($data_input, "biaya_non_standar_2_5_5", 5, 5);
    }


    private function biaya_lain_lain_2_6_1($data_input) {
        return $this->non_standard($data_input, "biaya_lain_lain_2_6_1", 10, 10);
    }

    private function biaya_lain_lain_2_6_2($data_input) {
        return $this->non_standard($data_input, "biaya_lain_lain_2_6_2", 10, 10);
    }

    private function non_standard($data_input, $key_input, $verifikasi_percent, $indikator_percent) {
        if(!isset($data_input[$key_input])) {
            return $data_input;
        }
        if(!$data_input["total_investasi"]) {
            return $data_input;
        }
        $data_input["harga_satuan"][$key_input]["text"] = round_custom($data_input[$key_input] / $data_input["total_investasi"]*100,2);
        $data_input["harga_satuan"][$key_input]["option"] = $this->default;

        $data_input["indikator"][$key_input]["text"] = round_custom($indikator_percent,2);
        $data_input["indikator"][$key_input]["option"] = $this->default;
        
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input[$key_input] <= ($data_input["total_investasi"] * to_percent($verifikasi_percent))) {
            $text="Wajar";
            $option=$this->success;
        }
        $data_input["verifikasi"][$key_input]["text"] = $text;
        $data_input["verifikasi"][$key_input]["option"] = $option;
        return $data_input;
    }

    private function aggregator($data_input) {
        $key = array(
            "unit_distribusi_2_3_1A",
            "unit_distribusi_2_3_2A",
            "unit_distribusi_2_3_3A",
            "unit_distribusi_2_3_4A",
            "unit_distribusi_2_3_5A",
            "unit_distribusi_2_3_6A",
            "unit_distribusi_2_3_8A",
            "biaya_non_standar_2_5_1",
            "biaya_non_standar_2_5_2",
            "biaya_non_standar_2_5_3",
            "biaya_non_standar_2_5_4",
            "biaya_non_standar_2_5_5",
            "biaya_lain_lain_2_6_1",
            "biaya_lain_lain_2_6_2",
            // "biaya_lain_lain_2_6_3"
        );
        $sum = 0;
        foreach($key as $value) {
            if(array_key_exists($value, $data_input)) {
                $sum += $data_input[$value];
            }
        }

        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
            $sum += $data_input["unit_distribusi_2_3_". $index . "A"];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
            $sum += $data_input["unit_pelayanan_2_4_". $index . "A"];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
            $sum += $data_input["unit_air_baku_2_1_". $index . "A"];
        }
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
            $sum += $data_input["unit_produksi_2_2_". $index . "A"];
        }
        // pajak
        $data_input["biaya_lain_lain_2_6_3"] = round_custom($sum * to_percent(10),2);
        $data_input["total_investasi"] = $sum + $data_input["biaya_lain_lain_2_6_3"];
        if($data_input["unit_produksi_1_4_2"]) {
            $data_input["harga_rata_rata_A"] = round_custom($sum / $data_input["unit_produksi_1_4_2"],2);

            $text="Justifikasi";
            $option=$this->danger;
            if($data_input["harga_rata_rata_A"] <= 2000000) {
                $text="Wajar";
                $option=$this->success;
            }
            $data_input["verifikasi"]["harga_rata_rata_A"]["text"] = $text;
            $data_input["verifikasi"]["harga_rata_rata_A"]["option"] = $option;
            $data_input["indikator"]["harga_rata_rata_A"]["text"] = 200000000;
            $data_input["indikator"]["harga_rata_rata_A"]["option"] = $this->default;
        }
        if($data_input["pelayanan_1_2_2A"]) {
            $data_input["harga_rata_rata_B"] = round_custom($sum / $data_input["pelayanan_1_2_2A"],2);
            $text="Justifikasi";
            $option=$this->danger;
            if($data_input["harga_rata_rata_B"] <= 8360) {
                $text="Wajar";
                $option=$this->success;
            }
            $data_input["verifikasi"]["harga_rata_rata_B"]["text"] = $text;
            $data_input["verifikasi"]["harga_rata_rata_B"]["option"] = $option;
            $data_input["indikator"]["harga_rata_rata_B"]["text"] = 8360;
            $data_input["indikator"]["harga_rata_rata_B"]["option"] = $this->default;
            if($data_input["pelayanan_1_2_2A"] > 0){
                $data_input["harga_satuan"]["harga_rata_rata_B"]["text"] = round_custom($sum / 1000 / $data_input["pelayanan_1_2_2A"],2);
                $data_input["harga_satuan"]["harga_rata_rata_B"]["option"] = $this->default;
            }
        }
        return $data_input;
    }
    
}
