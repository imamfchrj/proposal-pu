<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airminum extends All_Controller {
    function __construct() {
		parent::__construct();
        get_session();
        $this->load->model(array("proposal/Proposal_model", "proposal/Proposalquestioner_model"));
	}
	
	public function list()
	{
		$data["script"] = "proposal/airminum/list_js";
        $data['menu']="pengajuan";
		$this->view("proposal/airminum/list", $data);
	}


	public function detail($id=0)
	{
		if(!$id) {
			redirect('');
			return;
		}
		$proposal = $this->Proposal_model->get_by_id($id);
		if(!$proposal){
			redirect('airminum/list');
			return;
		}
		$selected = $this->Proposalquestioner_model->get_proposal_id_selected($id);
		$data["script"] = "proposal/airminum/detail_js";
		$data["proposal_data"] = $proposal;
		$data["selected_data"] = $selected;
        $data['menu']="pengajuan";
		$this->view("proposal/airminum/detail", $data);
	}

	public function insert($id=0)
	{
		$data["script"] = "proposal/airminum/insert_js";
		$data["option"] = $this->option_insert();
		$data["id_proposal"] = $id;
        $data['menu']="pengajuan";
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
