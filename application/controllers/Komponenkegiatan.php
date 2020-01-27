<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komponenkegiatan extends All_Controller {
    function __construct() {
		parent::__construct();
        $this->load->model("Komponenkegiatan_model");
        get_session();
	}
	
	public function list()
	{
		$data["script"] = "komponenkegiatan/list_js";
		$this->view("komponenkegiatan/list",$data);
	}

    public function insert()
    {
        $data["script"] = "komponenkegiatan/insert_js";
        $data["option"] = $this->option_insert();
        $this->view("komponenkegiatan/insert", $data);
    }

    private function option_insert()
    {
        $data["title_page"] = "Insert";
        $data["link"] = "insert";
        $data["description_page"] = "Tambah Komponen Kegiatan";
        return $data;
    }

    public function update_komponen($id)
    {
        $data["script"] = "komponenkegiatan/insert_js";
        $data["option"] = $this->option_update($id);
        $this->view("komponenkegiatan/insert", $data);
    }

    private function option_update($id)
    {
        $data["title_page"] = "Update";
        $data["link"] = "update_komponen";
        $data["description_page"] = "Update Komponen Kegiatan";
        $data["form_value"] = $this->Komponenkegiatan_model->get_komponen_by_id($id);
        return $data;
    }

}
