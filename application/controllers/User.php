<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Users_model");
	}
	
	public function list()
	{
		$data["script"] = "user/list_js";
		$this->view("user/list", $data);
	}

	public function insert()
	{
		$data["script"] = "user/insert_js";
		$data["option"] = $this->option_insert();
		$this->view("user/insert", $data);
	}

	private function option_insert()
	{
		$data["title_page"] = "Insert";
		$data["link"] = "insert";
		$data["description_page"] = "Berhati-hatilah untuk menambahkan user baru. Pastikan password yang digunakan tidak mudah untuk di tebak.";
		return $data;
	}


	public function update($id)
	{
		$data["script"] = "user/insert_js";
		$data["option"] = $this->option_update($id);
		$this->view("user/insert", $data);
	}

	private function option_update($id)
	{
		$data["title_page"] = "Update";
		$data["link"] = "update";
		$data["description_page"] = "Berhati-hatilah untuk menambahkan user baru. Pastikan password yang digunakan tidak mudah untuk di tebak.";
		$data["form_value"] = $this->Users_model->get_user_by_id($id);
		return $data;
	}

}
