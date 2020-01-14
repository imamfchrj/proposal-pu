<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airminumajax extends All_Controller {
    function __construct() {
		parent::__construct();
        // $this->load->model("Komponenkegiatan_model");
    }
    
    private function cek_input() {
        $this->form_validation->set_rules('prov_id', "provinsi", 'numeric|trim|required|xss_clean');

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
        if ($this->form_validation->run()) {
            $data["prov_id"] = $this->form_validation->set_value('prov_id');

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
        // Ketentuan teknis
        $data_input = $this->count_1_1_3($data_input);
        $data_input = $this->count_1_1_4B($data_input);
        // $data_input = $this->count_1_1_6($data_input);

        // Pelayanan

        return $data_input;
    }

    private function count_1_1_3($data_input) {
        $data_input["jenis_spam_1_1_3"] = $data_input["jenis_spam_1_1_1"] - $data_input["jenis_spam_1_1_2"];
        return $data_input;
    }

    private function count_1_1_4B($data_input) {
        $data_input["jenis_spam_1_1_4B"] = ($data_input["jenis_spam_1_1_4A"]/100) *  $data_input["jenis_spam_1_1_2"];
        return $data_input;
    }

    private function count_1_1_6($data_input) {
        $data_input["jenis_spam_1_1_6"] = $data_input["jenis_spam_1_1_5"] *  $data_input["jenis_spam_1_2_1C"];
        return $data_input;
    }

}
