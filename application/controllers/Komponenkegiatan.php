<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponenkegiatan extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Users_model");
	}
	
	public function list()
	{
		$data["script"] = "proposal/airminum/list_js";
		$this->view("proposal/airminum/list", $data);
	}


}
