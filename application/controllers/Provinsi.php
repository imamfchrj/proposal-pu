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

    public function insert()
    {
        $data["script"] = "manajemen_wilayah/provinsi/insert_js";
        $data["option"] = $this->option_insert();
        $this->view("manajemen_wilayah/provinsi/insert", $data);
    }

    private function option_insert()
    {
        $data["title_page"] = "Insert";
        $data["link"] = "insert";
        $data["description_page"] = "Tambah Provinsi";
        return $data;
    }

    public function update($id)
    {
        $data["script"] = "manajemen_wilayah/provinsi/insert_js";
        $data["option"] = $this->option_update($id);
        $this->view("manajemen_wilayah/provinsi/insert", $data);
    }

    private function option_update($id)
    {
        $data["title_page"] = "Update";
        $data["link"] = "update";
        $data["description_page"] = "Update Provinsi";
        $data["form_value"] = $this->Provinsi_model->get_by_id($id);
        return $data;
    }


}
