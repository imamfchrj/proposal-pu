<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userajax extends All_Controller {
    function __construct() {
		parent::__construct();
		get_session_ajax();
		get_admin_ajax();
        $this->load->model("Users_model");
	}
	
	public function list()
	{
		$input = $this->input->get();
		if(count($input) == 0) {
			$this->json_badrequest();
		}
		$search = $input["search"]["value"];
		// $search = "";
		$offer = $input["start"];
		$limit = $input["length"];
		$order = $input["order"][0]["column"];
		$order_type = $input["order"][0]["dir"];
		$data = $this->Users_model->user_list(
			$search, 
			$limit,  
			$offer,
			$order, 
			$order_type
		);
		$data["draw"] = $input["draw"];
        $this->json($data);
	}

	// Ini digunakan untuk insert user biasa
	public function insert() {
		$this->insert_user(0);
	}

	// Ini digunakan untuk insert admin
	public function insert_admin() {
		$this->update_user(1);
	}

	// Ini digunakan untuk update user biasa
	public function update() {
		$this->update_user(0);
	}

	// Ini digunakan untuk update admin
	public function update_admin() {
		$this->update_user(1);
	}

	private function insert_user($user_type=0) {
		$value = $this->validation($user_type=0);
		if($value) {
			unset($value["id"]);
			$data=$this->Users_model->set($value);
			$this->json_success();
		} else {
			$this->json_badrequest();
		}
	}

	private function update_user($user_type=0) {
		$value = $this->validation($user_type=0);
		if(!$value["id"]) {
			$this->json_badrequest("id not found");
		}
		if($value) {
			$id = $value["id"];
			unset($value["id"]);
			$data=$this->Users_model->update_value_by_id($value, $id);
			$this->json_success();
		} else {
			$this->json_badrequest();
		}
	}

	// validation input from user
	private function validation($user_type=0)
	{
		$this->post_only();
		
        $this->form_validation->set_rules('name', 'Name', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('id', 'Identity', 'xss_clean|htmlentities');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('hp', 'No HP', 'trim|xss_clean|htmlentities');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('c_password', 'Confirmation Password', 'trim|required|xss_clean|htmlentities');
        $this->form_validation->set_rules('status', 'Status', 'trim|integer|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
			$password = $this->form_validation->set_value('password');
			$c_password = $this->form_validation->set_value('c_password');
			if($password != $c_password) {

			}
            $value=array(
                'id' => $this->form_validation->set_value('id'),
                'name' => $this->form_validation->set_value('name'),
                'email' => $this->form_validation->set_value('email'),
                'hp' => $this->form_validation->set_value('hp'),
                'user_type' => $user_type,
                'status' => $this->form_validation->set_value('status'),
                'password' => $password
            );
            // if success will return all value
			return $value;
        }
        $this->json_badrequest(validation_errors());
        return false;
	}


	public function delete()
	{
		$this->post_only();
		
        $this->form_validation->set_rules('id', 'Identity', 'required|xss_clean|htmlentities');
        if ($this->form_validation->run()) {
			
			$id=  $this->form_validation->set_value('id');
			$this->Users_model->delete($id);
			$this->json_success();
			return;
        }
        $this->json_badrequest(validation_errors());
        return false;
	}

}
