<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Provinsi_model");
	}
	
	public function list()
	{
		$data["script"] = "manajemen_wilayah/provinsi/list_js";
		$this->view("manajemen_wilayah/provinsi/list", $data);
	}

}
