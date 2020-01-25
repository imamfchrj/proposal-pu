<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponen_mstajax extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Komponen_mst_model");
	}
	
	public function list()
	{
		$data = $this->Komponen_mst_model->select_komponen_mst();
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
		$data = $this->Komponen_mst_model->prov_list(
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
