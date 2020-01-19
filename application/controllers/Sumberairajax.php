<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberairajax extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("air_minum/Sumberair_model");
	}
	
	public function list()
	{
		$data = $this->Sumberair_model->get_list();
        $this->json_success($data);
	}

}
