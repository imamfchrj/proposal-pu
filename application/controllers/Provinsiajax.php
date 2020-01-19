<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsiajax extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Provinsi_model");
	}
	
	public function list()
	{
		$data = $this->Provinsi_model->select_provinsi();
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
		$data = $this->Provinsi_model->prov_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        $this->json($data);
	}

}
