<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikk_kabupatenajax extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model(array("Ikk_kabupaten_model","Kabupaten_model"));
	}
	
	public function list()
	{
		$data = $this->Ikk_kabupaten_model->select_ikk_kabupaten();
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
		$data = $this->Ikk_kabupaten_model->ikk_kab_list(
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
        $this->insert_ikk_kabupaten();
    }

    private function insert_ikk_kabupaten() {
        $value = $this->validation_ikk_kabupaten();
        if($value) {
            unset($value["id"]);
            $data=$this->Ikk_kabupaten_model->set($value);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }

    public function update() {
        $this->update_ikk_kabupaten();
    }

    private function update_ikk_kabupaten() {
        $value = $this->validation_ikk_kabupaten();
        if(!$value["id"]) {
            $this->json_badrequest("id not found");
        }
        if($value) {
            $id = $value["id"];
            unset($value["id"]);
            $data=$this->Ikk_kabupaten_model->update_value_by_id($value, $id);
            $this->json_success();
        } else {
            $this->json_badrequest();
        }
    }
    // validation input from komponen
    private function validation_ikk_kabupaten()
    {
        $this->post_only();

        $this->form_validation->set_rules('id', 'Identity', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('kab_id', 'kabupaten ID', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('ikk_persen', 'IKK Persen', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('ikk_decimal', 'IKK Decimal', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('tahun', 'Tahun', 'xss_clean|htmlentities');

        if ($this->form_validation->run()) {

            $value=array(
                'id' => $this->form_validation->set_value('id'),
                'kab_id' => $this->form_validation->set_value('kab_id'),
                'ikk_persen' => $this->form_validation->set_value('ikk_persen'),
                'ikk_decimal' => $this->form_validation->set_value('ikk_decimal'),
                'tahun' => $this->form_validation->set_value('tahun'),
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
            $this->Ikk_kabupaten_model->delete($id);
            $this->json_success();
            return;
        }
        $this->json_badrequest(validation_errors());
        return false;
    }

    function get_kab_by_prov()
    {
        $prov_id = $this->input->post('prov_id');
        $result = $this->Kabupaten_model->get_all_by_prov($prov_id);
        echo "<option value='0'> Pilih Kabupaten </option>";
        foreach($result as $row)
            echo "<option value='".$row->kab_id."'>".strtoupper($row->nama)."</option>";
    }

}
