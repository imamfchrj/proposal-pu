<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends All_Controller {
    function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view("default/tes");
	}

	public function mantap()
	{
		$this->load->model("Users_model");
		$tes = $this->Users_model->person();
		echo json_encode($tes);
	}

	public function tes() 
	{
		$this->view("default/form");
	}
}
