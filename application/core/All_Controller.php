<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class All_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();	
	}
	
	function check_session() {
		// this function for check session
	}
	
	



	/**
	 * start page is for views management
	 */
	function view($ui, $data = false, $title = false, $menu = false) {
		
		$this->view_default(
			'default/header',
			'default/navbar',
			$ui,
			'default/footer',
			$data,
			$title,
			$menu,
		);
	}

	function view_default($header, $navbar, $ui, $footer, $data = false, $title = false, $menu = false) {
		$ui_data['data']= $data;
		if (!$title) {
			$ui_data["title"] = APP_NAME;
		}
		if (!$menu) {
			$ui_data["menu"] = "home";
		}
		$ui_data["js"] = "default/js";
		$ui_data["ui"] = $ui;
		$ui_data["header"] = $header;
		$ui_data["footer"] = $footer;
		$ui_data["navbar"] = $navbar;
		$this->load->view("default/template",$ui_data);
	}
	/**
	 * end page is for views management
	 */
}
	