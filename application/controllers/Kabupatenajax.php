<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupatenajax extends All_Controller {
    function __construct() {
		parent::__construct();
        get_session_ajax();
		get_admin_ajax();
        $this->load->model("Kabupaten_model");
	}
	
	public function list()
	{
		$data = $this->Kabupaten_model->select_kabupaten();
        $this->json_success($data);
	}

	public function list_datatable()
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
		$data = $this->Kabupaten_model->kab_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        $this->json($data);
	}

    public function insert() {
        $this->insert_kabupaten();
    }

    private function insert_kabupaten() {
        $value = $this->validation_kabupaten();
        if($value) {
            unset($value["id"]);
            $data=$this->Kabupaten_model->set($value);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }

    public function update() {
        $this->update_kabupaten();
    }

    private function update_kabupaten() {
        $value = $this->validation_kabupaten();
        if(!$value["id"]) {
            $this->json_badrequest("id not found");
        }
        if($value) {
            $id = $value["id"];
            unset($value["id"]);
            $data=$this->Kabupaten_model->update_value_by_id($value, $id);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }
    // validation input from kabupaten
    private function validation_kabupaten()
    {
        $this->post_only();

        $this->form_validation->set_rules('id', 'Identity', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('prov_id', 'Provinsi', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('kab_id', 'Kabupaten ID', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('nama', 'Kabupaten Name', 'xss_clean|htmlentities');

        if ($this->form_validation->run()) {

            $value=array(
                'id' => $this->form_validation->set_value('id'),
                'prov_id' => $this->form_validation->set_value('prov_id'),
                'kab_id' => $this->form_validation->set_value('kab_id'),
                'nama' => $this->form_validation->set_value('nama'),
            );
            // if success will return all value
            return $value;
        }
        $this->json_badrequest(validation_errors());
        return false;
    }

    public function delete()
    {
        $this->post_only();

        $this->form_validation->set_rules('id', 'Identity', 'required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {

            $id=  $this->form_validation->set_value('id');
            $this->Kabupaten_model->delete($id);
            $this->json_success();
            return;
        }
        $this->json_badrequest(validation_errors());
        return false;
    }

}
