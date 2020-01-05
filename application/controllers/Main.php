<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends All_Controller {
    function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		header("Location: ". base_url("/login"), true, 301);
	}
}
