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

}
