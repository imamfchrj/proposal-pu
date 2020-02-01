<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends All_Controller {
    function __construct() {
		parent::__construct();
        get_session();
		get_admin_ajax();
        $this->load->model(array("Kabupaten_model","Provinsi_model"));
	}
	
	public function list()
	{
		$data["script"] = "manajemen_wilayah/kabupaten/list_js";
        $data['menu']="ikk";
		$this->view("manajemen_wilayah/kabupaten/list", $data);
	}

    public function insert()
    {
        $data["script"] = "manajemen_wilayah/kabupaten/insert_js";
        $data["option"] = $this->option_insert();
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $data['menu']="ikk";
        $this->view("manajemen_wilayah/kabupaten/insert", $data);
    }

    private function option_insert()
    {
        $data["title_page"] = "Insert";
        $data["link"] = "insert";
        $data["description_page"] = "Tambah Kabupaten";
        return $data;
    }

    public function update($id)
    {
        $data["script"] = "manajemen_wilayah/kabupaten/insert_js";
        $data["option"] = $this->option_update($id);
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $data['menu']="ikk";
        $this->view("manajemen_wilayah/kabupaten/insert", $data);
    }

    private function option_update($id)
    {
        $data["title_page"] = "Update";
        $data["link"] = "update";
        $data["description_page"] = "Update Kabupaten";
        $data["form_value"] = $this->Kabupaten_model->get_by_id($id);
        return $data;
    }


}
