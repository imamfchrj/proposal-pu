<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airminum extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Users_model");
	}
	
	public function list()
	{
		$data["script"] = "proposal/airminum/list_js";
		$this->view("proposal/airminum/list", $data);
	}

	public function insert()
	{
		$data["script"] = "proposal/airminum/insert_js";
		$data["option"] = $this->option_insert();
		$this->view("proposal/airminum/insert", $data);
    }
    

	private function option_insert()
	{
		$data["title_page"] = "Insert";
		$data["link"] = "insert";
		$data["description_page"] = "Berhati-hatilah untuk menambahkan user baru. Pastikan password yang digunakan tidak mudah untuk di tebak.";
		return $data;
	}


}
