<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends All_Controller {
    function __construct() {
		parent::__construct();
	}
	
	public function list()
	{
		$data["script"] = "user/list_js";
		$this->view("user/list", $data);
	}

	public function insert()
	{
		$data["script"] = "user/insert_js";
		$this->view("user/insert", $data);
	}

}
