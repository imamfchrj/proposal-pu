<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airminumajax extends All_Controller {
    private $danger = "text-danger";
    private $success = "text-success";
    private $default = "text-dark";
    function __construct() {
		parent::__construct();
        $this->load->model("Komponenkegiatan_model");
        $this->load->model("Provinsi_model");
    }

    private function get_data_komponen($in_id = false, $year = false) {
        return $this->Komponenkegiatan_model->get_data_fix_and_in_id($in_id, $year);
    }

    public function tes($year = false) {
        $get_id  = array(1, 2, 3);
        echo json_encode($this->get_data_komponen($get_id, $year));
    }
    
    private function cek_input() {
        $this->form_validation->set_rules('prov_id', "provinsi", 'numeric|trim|required|xss_clean');
        $this->form_validation->set_rules('jenis_spam', "Jenis SPAM", 'trim|required|xss_clean');

        // ketentuan teknis
        $this->form_validation->set_rules('jenis_spam_1_1_1', "Jenis SPAM 1.1.1", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_2', "Jenis SPAM 1.1.2", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_4A', "Jenis SPAM 1.1.4A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('jenis_spam_1_1_5', "Jenis SPAM 1.1.5", 'numeric|trim|xss_clean');
        
        // pelayanan
        $this->form_validation->set_rules('pelayanan_1_2_1A', "Pelayanan 1.2.1A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_1B', "Pelayanan 1.2.1B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_1D', "Pelayanan 1.2.1D", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2C', "Pelayanan 1.2.2C", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2E', "Pelayanan 1.2.2E", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2H', "Pelayanan 1.2.2H", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('pelayanan_1_2_2I', "pelayanan_1_2_2I", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_air_baku_1_3_1', "unit_air_baku_1_3_1", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_2', "unit_air_baku_1_3_2", 'trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_3', "unit_air_baku_1_3_3", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_4', "unit_air_baku_1_3_4", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_5', "unit_air_baku_1_3_5", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_7', "unit_air_baku_1_3_7", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_8', "unit_air_baku_1_3_8", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_1_3_11', "unit_air_baku_1_3_11", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_produksi_1_4_1', "unit_produksi_1_4_1", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_2', "unit_produksi_1_4_2", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_3', "unit_produksi_1_4_3", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_1_4_4', "unit_produksi_1_4_4", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_distribusi_1_5_1', "unit_distribusi_1_5_1", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_2', "unit_distribusi_1_5_2", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_3', "unit_distribusi_1_5_3", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_6', "unit_distribusi_1_5_6", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_7', "unit_distribusi_1_5_7", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_1_5_8', "unit_distribusi_1_5_8", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_pelayanan_1_6_1', "unit_pelayanan_1_6_1", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_air_baku_2_1_1A', "unit_air_baku_2_1_1A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_1B', "unit_air_baku_2_1_1B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_2A', "unit_air_baku_2_1_2A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_2B', "unit_air_baku_2_1_2B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_3A', "unit_air_baku_2_1_3A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_3B', "unit_air_baku_2_1_3B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_4A', "unit_air_baku_2_1_4A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_air_baku_2_1_4B', "unit_air_baku_2_1_4B", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_produksi_2_2_1A', "unit_produksi_2_2_1A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_1B', "unit_produksi_2_2_1B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_2A', "unit_produksi_2_2_2A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_2B', "unit_produksi_2_2_2B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_3A', "unit_produksi_2_2_3A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_3B', "unit_produksi_2_2_3B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_4A', "unit_produksi_2_2_4A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_4B', "unit_produksi_2_2_4B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_5A', "unit_produksi_2_2_5A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_5B', "unit_produksi_2_2_5B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_6A', "unit_produksi_2_2_6A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_6B', "unit_produksi_2_2_6B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_7A', "unit_produksi_2_2_7A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_produksi_2_2_7B', "unit_produksi_2_2_7B", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_distribusi_2_3_1A', "unit_distribusi_2_3_1A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_1B', "unit_distribusi_2_3_1B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_2A', "unit_distribusi_2_3_2A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_2B', "unit_distribusi_2_3_2B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_3A', "unit_distribusi_2_3_3A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_3B', "unit_distribusi_2_3_3B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_4A', "unit_distribusi_2_3_4A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_4B', "unit_distribusi_2_3_4B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_5A', "unit_distribusi_2_3_5A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_5B', "unit_distribusi_2_3_5B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_6A', "unit_distribusi_2_3_6A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_6B', "unit_distribusi_2_3_6B", 'numeric|trim|xss_clean');
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71; $index++) {
        $this->form_validation->set_rules('unit_distribusi_2_3_7'.$index, "unit_distribusi_2_3_7", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_7'.$index.'A', "unit_distribusi_2_3_7A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_7'.$index.'B', "unit_distribusi_2_3_7B", 'numeric|trim|xss_clean');
        }
        $this->form_validation->set_rules('unit_distribusi_2_3_8A', "unit_distribusi_2_3_8A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_distribusi_2_3_8B', "unit_distribusi_2_3_8B", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('unit_pelayanan_2_4_1A', "unit_pelayanan_2_4_1A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_pelayanan_2_4_1B', "unit_pelayanan_2_4_1B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_pelayanan_2_4_2A', "unit_pelayanan_2_4_2A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_pelayanan_2_4_2B', "unit_pelayanan_2_4_2B", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_pelayanan_2_4_3A', "unit_pelayanan_2_4_3A", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('unit_pelayanan_2_4_3B', "unit_pelayanan_2_4_3B", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('biaya_non_standar_2_5_5', "biaya_non_standar_2_5_5", 'numeric|trim|xss_clean');

        $this->form_validation->set_rules('biaya_lain_lain_2_6_1', "biaya_lain_lain_2_6_1", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('biaya_lain_lain_2_6_2', "biaya_lain_lain_2_6_2", 'numeric|trim|xss_clean');
        $this->form_validation->set_rules('biaya_lain_lain_2_6_3', "biaya_lain_lain_2_6_3", 'numeric|trim|xss_clean');

        if ($this->form_validation->run()) {
            $data["prov_id"] = $this->form_validation->set_value('prov_id');
            $data["jenis_spam"] = $this->form_validation->set_value('jenis_spam');

            // ketentuan teknis
            $data["jenis_spam_1_1_1"] = (float)$this->form_validation->set_value('jenis_spam_1_1_1');
            $data["jenis_spam_1_1_2"] = (float)$this->form_validation->set_value('jenis_spam_1_1_2');
            $data["jenis_spam_1_1_4A"] = (float)$this->form_validation->set_value('jenis_spam_1_1_4A');
            $data["jenis_spam_1_1_5"] = (float)$this->form_validation->set_value('jenis_spam_1_1_5');

            // pelayanan
            $data["pelayanan_1_2_1A"] = (float)$this->form_validation->set_value('pelayanan_1_2_1A');
            $data["pelayanan_1_2_1B"] = (float)$this->form_validation->set_value('pelayanan_1_2_1B');
            $data["pelayanan_1_2_1D"] = (float)$this->form_validation->set_value('pelayanan_1_2_1D');
            $data["pelayanan_1_2_2C"] = (float)$this->form_validation->set_value('pelayanan_1_2_2C');
            $data["pelayanan_1_2_2E"] = (float)$this->form_validation->set_value('pelayanan_1_2_2E');
            $data["pelayanan_1_2_2H"] = (float)$this->form_validation->set_value('pelayanan_1_2_2H');
            $data["pelayanan_1_2_2I"] = (float)$this->form_validation->set_value('pelayanan_1_2_2I');

            // unit air baku
            $data["unit_air_baku_1_3_1"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_1');
            $data["unit_air_baku_1_3_2"] = $this->form_validation->set_value('unit_air_baku_1_3_2');
            $data["unit_air_baku_1_3_3"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_3');
            $data["unit_air_baku_1_3_4"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_4');
            $data["unit_air_baku_1_3_5"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_5');
            $data["unit_air_baku_1_3_7"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_7');
            $data["unit_air_baku_1_3_8"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_8');
            $data["unit_air_baku_1_3_11"] = (float)$this->form_validation->set_value('unit_air_baku_1_3_11');
            
            $data["unit_produksi_1_4_1"] = (float)$this->form_validation->set_value('unit_produksi_1_4_1');
            $data["unit_produksi_1_4_2"] = (float)$this->form_validation->set_value('unit_produksi_1_4_2');
            $data["unit_produksi_1_4_3"] = (float)$this->form_validation->set_value('unit_produksi_1_4_3');
            $data["unit_produksi_1_4_4"] = (float)$this->form_validation->set_value('unit_produksi_1_4_4');
            
            $data["unit_distribusi_1_5_1"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_1');
            $data["unit_distribusi_1_5_2"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_2');
            $data["unit_distribusi_1_5_3"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_3');
            $data["unit_distribusi_1_5_6"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_6');
            $data["unit_distribusi_1_5_7"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_7');
            $data["unit_distribusi_1_5_8"] = (float)$this->form_validation->set_value('unit_distribusi_1_5_8');
            
            $data["unit_pelayanan_1_6_1"] = (float)$this->form_validation->set_value('unit_pelayanan_1_6_1');
            
            $data["unit_air_baku_2_1_1A"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_1A');
            $data["unit_air_baku_2_1_1B"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_1B');
            $data["unit_air_baku_2_1_2A"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_2A');
            $data["unit_air_baku_2_1_2B"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_2B');
            $data["unit_air_baku_2_1_3A"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_3A');
            $data["unit_air_baku_2_1_3B"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_3B');
            $data["unit_air_baku_2_1_4A"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_4A');
            $data["unit_air_baku_2_1_4B"] = (float)$this->form_validation->set_value('unit_air_baku_2_1_4B');
            
            $data["unit_produksi_2_2_1A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_1A');
            $data["unit_produksi_2_2_1B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_1B');
            $data["unit_produksi_2_2_2A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_2A');
            $data["unit_produksi_2_2_2B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_2B');
            $data["unit_produksi_2_2_3A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_3A');
            $data["unit_produksi_2_2_3B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_3B');
            $data["unit_produksi_2_2_4A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_4A');
            $data["unit_produksi_2_2_4B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_4B');
            $data["unit_produksi_2_2_5A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_5A');
            $data["unit_produksi_2_2_5B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_5B');
            $data["unit_produksi_2_2_6A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_6A');
            $data["unit_produksi_2_2_6B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_6B');
            $data["unit_produksi_2_2_7A"] = (float)$this->form_validation->set_value('unit_produksi_2_2_7A');
            $data["unit_produksi_2_2_7B"] = (float)$this->form_validation->set_value('unit_produksi_2_2_7B');
            
            $data["unit_distribusi_2_3_1A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_1A');
            $data["unit_distribusi_2_3_1B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_1B');
            $data["unit_distribusi_2_3_2A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_2A');
            $data["unit_distribusi_2_3_2B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_2B');
            $data["unit_distribusi_2_3_3A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_3A');
            $data["unit_distribusi_2_3_3B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_3B');
            $data["unit_distribusi_2_3_4A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_4A');
            $data["unit_distribusi_2_3_4B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_4B');
            $data["unit_distribusi_2_3_5A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_5A');
            $data["unit_distribusi_2_3_5B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_5B');
            $data["unit_distribusi_2_3_6A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_6A');
            $data["unit_distribusi_2_3_6B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_6B');
            for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71; $index++) {
            $data["unit_distribusi_2_3_7".$index] = (float)$this->form_validation->set_value("unit_distribusi_2_3_7".$index);
            $data["unit_distribusi_2_3_7".$index."A"] = (float)$this->form_validation->set_value("unit_distribusi_2_3_7".$index."A");
            $data["unit_distribusi_2_3_7".$index."B"] = (float)$this->form_validation->set_value("unit_distribusi_2_3_7".$index."B");
            }
            $data["unit_distribusi_2_3_8A"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_8A');
            $data["unit_distribusi_2_3_8B"] = (float)$this->form_validation->set_value('unit_distribusi_2_3_8B');
            
            $data["unit_pelayanan_2_4_1A"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_1A');
            $data["unit_pelayanan_2_4_1B"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_1B');
            $data["unit_pelayanan_2_4_2A"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_2A');
            $data["unit_pelayanan_2_4_2B"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_2B');
            $data["unit_pelayanan_2_4_3A"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_3A');
            $data["unit_pelayanan_2_4_3B"] = (float)$this->form_validation->set_value('unit_pelayanan_2_4_3B');
            
            $data["biaya_non_standar_2_5_5"] = (float)$this->form_validation->set_value('biaya_non_standar_2_5_5');
            
            $data["biaya_lain_lain_2_6_1"] = (float)$this->form_validation->set_value('biaya_lain_lain_2_6_1');
            $data["biaya_lain_lain_2_6_2"] = (float)$this->form_validation->set_value('biaya_lain_lain_2_6_2');
            $data["biaya_lain_lain_2_6_3"] = (float)$this->form_validation->set_value('biaya_lain_lain_2_6_3');
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
        $data_input = $this->pelayanan_1_2_3C($data_input);
        $data_input = $this->pelayanan_1_2_3D($data_input);
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
        $data_input = $this->unit_distribusi_1_5_4($data_input);
        $data_input = $this->unit_distribusi_1_5_5($data_input);
        $data_input = $this->unit_distribusi_1_5_6($data_input);
        $data_input = $this->unit_distribusi_1_5_8($data_input);
        $data_input = $this->unit_pelayanan_1_6_2($data_input);
        $data_input = $this->unit_pelayanan_1_6_3($data_input);
        $data_input = $this->unit_produksi_2_2_3($data_input);
        // $data_input = $this->unit_produksi_2_2_3($data_input);
        
        
        
        
        
        
        $data_input = $this->set_rounding($data_input);
        

        return $data_input;
    }
    
    private function initial($data_input) {
        $in_id = array();
        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71; $index++) {
            $in_id = $data_input["unit_distribusi_2_3_7".$index];
        }
        $data_input["initial"]["ikk_provinsi"] = $this->Provinsi_model->get_ikk_provinsi($data_input["prov_id"]);
        $data_input["initial"] = $this->get_data_komponen($data_input["initial"]["ikk_provinsi"], $in_id);
        return $data_input;
    }

    private function set_rounding($data_input) {
        $data_input["jenis_spam_1_1_4B"] = round_custom( $data_input["jenis_spam_1_1_4B"],2);
        $data_input["pelayanan_1_2_2D"] = round_custom( $data_input["pelayanan_1_2_2D"],2);
        $data_input["pelayanan_1_2_3A"] = round($data_input["pelayanan_1_2_3A"], 2);
        $data_input["pelayanan_1_2_3B"] = round($data_input["pelayanan_1_2_3B"], 2);
        $data_input["pelayanan_1_2_3C"] = round($data_input["pelayanan_1_2_3C"], 2);
        $data_input["pelayanan_1_2_3D"] = round($data_input["pelayanan_1_2_3D"], 2);
        $data_input["unit_air_baku_1_3_8"] = round_custom($data_input["unit_air_baku_1_3_8"], 2);
        $data_input["unit_air_baku_1_3_9"] = round_custom($data_input["unit_air_baku_1_3_9"], 2);
        $data_input["unit_air_baku_1_3_10"] = round_custom($data_input["unit_air_baku_1_3_10"], 2);
        $data_input["unit_air_baku_1_3_12"] = round_custom($data_input["unit_air_baku_1_3_12"], 2);
        $data_input["unit_air_baku_1_3_13"] = round_custom($data_input["unit_air_baku_1_3_13"], 2);
        $data_input["unit_distribusi_1_5_1"] = round($data_input["unit_distribusi_1_5_1"],2);
        $data_input["unit_distribusi_1_5_4"] = round($data_input["unit_distribusi_1_5_4"],2);
        $data_input["unit_distribusi_1_5_5"] = round($data_input["unit_distribusi_1_5_5"],2);
        $data_input["unit_distribusi_1_5_8"] = round($data_input["unit_distribusi_1_5_8"],2);
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
        $data_input["pelayanan_1_2_3B"] =  1.2 * $data_input["pelayanan_1_2_3A"];
        return $data_input;
    }

    private function pelayanan_1_2_3C($data_input) {
        $data_input["pelayanan_1_2_3C"] =  $data_input["pelayanan_1_2_3B"] - $data_input["jenis_spam_1_1_3"];
        return $data_input;
    }

    private function pelayanan_1_2_3D($data_input) {
        $data_input["pelayanan_1_2_3D"] =  $data_input["pelayanan_1_2_3A"] * 1.75;
        return $data_input;
    }

    private function unit_air_baku_1_3_1($data_input) {
        $text="Justifikasi";
        $option=$this->danger;
        if(($data_input["unit_air_baku_1_3_1"] >= ($data_input["pelayanan_1_2_3C"]* to_percent(105))) && ($data_input["unit_air_baku_1_3_1"] <= ($data_input["pelayanan_1_2_3C"]* to_percent(110)))) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_1"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_1"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_3($data_input) {
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
        $data_input["unit_air_baku_1_3_6"] = abs($data_input["unit_air_baku_1_3_6"]);
        $text="Pompa";
        $option=$this->success;
        if($data_input["unit_air_baku_1_3_6"] > 1) {
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
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_air_baku_1_3_8"] > 0.4 && $data_input["unit_air_baku_1_3_8"] < 2.5 ) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_8"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_8"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_9($data_input) {
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
        $data_input["unit_air_baku_1_3_10"] =  $data_input["unit_air_baku_1_3_6"]+ $data_input["unit_air_baku_1_3_9"];
        $text="Pompa";
        $option=$this->success;
        if($data_input["unit_air_baku_1_3_10"] < 0) {
            $text="Grativikasi";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_air_baku_1_3_10"]["text"] = $text;
        $data_input["verifikasi"]["unit_air_baku_1_3_10"]["option"] = $option;
        return $data_input;
    }

    private function unit_air_baku_1_3_12($data_input) {
        $data_input["unit_air_baku_1_3_12"] =  $data_input["unit_air_baku_1_3_11"]+ $data_input["unit_air_baku_1_3_10"];
        return $data_input;
    }

    private function unit_air_baku_1_3_13($data_input) {
        $data_input["unit_air_baku_1_3_13"] = (($data_input["unit_air_baku_1_3_1"]/1000)*$data_input["unit_air_baku_1_3_12"]*9.81)/(0.9*0.8);
        return $data_input;
    }

    private function unit_produksi_1_4_1($data_input) {
        $data_input["unit_produksi_1_4_1"] = ($data_input["unit_produksi_1_4_1"]);
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_produksi_1_4_1"] >= ceil($data_input["pelayanan_1_2_3C"]) ) {
            $text="Layak";
            $option=$this->success;
        }
        $data_input["verifikasi"]["unit_produksi_1_4_1"]["text"] = $text;
        $data_input["verifikasi"]["unit_produksi_1_4_1"]["option"] = $option;
        return $data_input;
    }

    private function unit_produksi_1_4_2($data_input) {
        $data_input["unit_produksi_1_4_2"] = ($data_input["unit_produksi_1_4_2"]);
        $text="Justifikasi";
        $option=$this->danger;
        if($data_input["unit_produksi_1_4_2"] == ceil($data_input["unit_produksi_1_4_1"]) ) {
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
        $data_input["unit_distribusi_1_5_5"] = ((pow((($data_input["unit_produksi_1_4_2"]/1000) / (0.2785*100*(pow(($data_input["unit_distribusi_1_5_3"]/100),2.63)))),1.85))*$data_input["unit_distribusi_1_5_1"])*1.05;
         
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

    private function unit_produksi_2_2_3($data_input) {
        if($data_input["unit_produksi_2_2_3B"] == 0) {
            return $data_input;
        }
        $data_input["harga_satuan"]["unit_produksi_2_2_3"]["text"] = $data_input["unit_produksi_2_2_3A"] / $data_input["unit_produksi_2_2_3B"];
        $data_input["harga_satuan"]["unit_produksi_2_2_3"]["option"] = $this->default;
        // $text="Justifikasi";
        // $option=$this->danger;
        // if($data_input["unit_produksi_2_2_3A"] >= $data_input["pelayanan_1_2_3D"]) {
        //     $text="Layak";
        //     $option=$this->success;
        // }
        // $data_input["verifikasi"]["unit_produksi_2_2_3_verifikasi"]["text"] = $text;
        // $data_input["verifikasi"]["unit_produksi_2_2_3_verifikasi"]["option"] = $option;
        return $data_input;
    }
    
}
