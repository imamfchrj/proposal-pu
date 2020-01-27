<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ikk_kabupaten extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model(array("Ikk_kabupaten_model","Provinsi_model","Kabupaten_model"));
	}
	
	public function list()
	{
		$data["script"] = "manajemen_wilayah/ikk_kabupaten/list_js";
		$this->view("manajemen_wilayah/ikk_kabupaten/list", $data);
	}

    public function insert()
    {
        $data["script"] = "manajemen_wilayah/ikk_kabupaten/insert_js";
        $data["option"] = $this->option_insert();
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $data["kab_all"] = $this->Kabupaten_model->get_all();
        $this->view("manajemen_wilayah/ikk_kabupaten/insert", $data);
    }

    private function option_insert()
    {
        $data["title_page"] = "Insert";
        $data["link"] = "insert";
        $data["description_page"] = "Tambah IKK Kabupaten";
        return $data;
    }

    public function update($id)
    {
        $data["script"] = "manajemen_wilayah/ikk_kabupaten/insert_js";
        $data["option"] = $this->option_update($id);
        $data["prov_all"] = $this->Provinsi_model->get_all();
        $data["kab_all"] = $this->Kabupaten_model->get_all();
        $this->view("manajemen_wilayah/ikk_kabupaten/insert", $data);
    }

    private function option_update($id)
    {
        $data["title_page"] = "Update";
        $data["link"] = "update";
        $data["description_page"] = "Update IKK Kabupaten";
        $data["form_value"] = $this->Ikk_kabupaten_model->get_by_id($id);
        return $data;
    }


}
