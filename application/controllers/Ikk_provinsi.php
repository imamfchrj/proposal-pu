<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikk_provinsi extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model(array("Ikk_provinsi_model","Provinsi_model"));
	}
	
	public function list()
	{
		$data["script"] = "manajemen_wilayah/ikk_provinsi/list_js";
		$this->view("manajemen_wilayah/ikk_provinsi/list", $data);
	}

    public function insert()
    {
        $data["script"] = "manajemen_wilayah/ikk_provinsi/insert_js";
        $data["option"] = $this->option_insert();
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $this->view("manajemen_wilayah/ikk_provinsi/insert", $data);
    }

    private function option_insert()
    {
        $data["title_page"] = "Insert";
        $data["link"] = "insert";
        $data["description_page"] = "Tambah IKK Provinsi";
        return $data;
    }

    public function update($id)
    {
        $data["script"] = "manajemen_wilayah/ikk_provinsi/insert_js";
        $data["option"] = $this->option_update($id);
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $this->view("manajemen_wilayah/ikk_provinsi/insert", $data);
    }

    private function option_update($id)
    {
        $data["title_page"] = "Update";
        $data["link"] = "update";
        $data["description_page"] = "Update IKK Provinsi";
        $data["form_value"] = $this->Ikk_provinsi_model->get_by_id($id);
        return $data;
    }


}
