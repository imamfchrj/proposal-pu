<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userajax extends All_Controller {
    function __construct() {
		parent::__construct();
		header('Content-Type: application/json');
        $this->load->model("Users_model");
	}
	
	public function list()
	{
		$input = $this->input->get();
		$search = $input["search"]["value"];
		// $search = "";
		$offer = $input["start"];
		$limit = $input["length"];
		$order = $input["order"][0]["column"];
		$order_type = $input["order"][0]["dir"];
		if ($offer > 0) {
			$offer = ($offer/$limit);
		}
		$data = $this->Users_model->user_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        echo json_encode($data);
	}
}
