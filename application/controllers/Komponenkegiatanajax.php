<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponenkegiatanajax extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model(array("Komponenkegiatan_model","Komponen_mst_model"));
	}
	
	public function list()
	{
		$input = $this->input->get();
		if(count($input) == 0) {
			$this->json_badrequest();
		}
		$search = $input["search"]["value"];
		// $search = "";
		$offer = $input["start"];
		$limit = $input["length"];
		$order = $input["order"][0]["column"];
		$order_type = $input["order"][0]["dir"];
		$data = $this->Komponenkegiatan_model->komponen_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        $this->json($data);
	}

	public function delete()
	{
		$this->post_only();
		
        $this->form_validation->set_rules('id', 'Identity', 'required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
			
			$id=  $this->form_validation->set_value('id');
			$this->Komponenkegiatan_model->delete($id);
			$this->json_success();
			return;
        }
        $this->json_badrequest(validation_errors());
        return false;
	}

    public function insert() {
        $this->insert_komponenkegiatan();
    }

    private function insert_komponenkegiatan() {
        $value = $this->validation_komponen();
        if($value) {
            unset($value["id"]);
            $data=$this->Komponenkegiatan_model->set($value);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }

    public function update_komponen() {
        $this->update_komponenkegiatan();
    }

    private function update_komponenkegiatan() {
        $value = $this->validation_komponen();
        if(!$value["id"]) {
            $this->json_badrequest("id not found");
        }
        if($value) {
            $id = $value["id"];
            unset($value["id"]);
            $data=$this->Komponenkegiatan_model->update_value_by_id($value, $id);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }
    // validation input from komponen
    private function validation_komponen()
    {
        $this->post_only();

        $this->form_validation->set_rules('id', 'Identity', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('sub_key', 'Komponen', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('satuan', 'Satuan', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('estimasi', 'Estimasi', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('pembagi', 'Pembagi', 'xss_clean|htmlentities');

        if ($this->form_validation->run()) {

            $mst_komponen = $this->Komponen_mst_model->get_by_id($this->form_validation->set_value('sub_key'));

            $value=array(
                'id' => $this->form_validation->set_value('id'),
                'key' => $mst_komponen->key,
                'sub_key' => $mst_komponen->sub_key,
                'id_komponen' => $this->form_validation->set_value('sub_key'),
                'komponen_spam' => $mst_komponen->komponen_spam,
                'kegiatan' => $this->form_validation->set_value('kegiatan'),
                'satuan' => $this->form_validation->set_value('satuan'),
                'estimasi' => $this->form_validation->set_value('estimasi'),
                'pembagi' => $this->form_validation->set_value('pembagi'),
            );
            // if success will return all value
            return $value;
        }
        $this->json_badrequest(validation_errors());
        return false;
    }

}
