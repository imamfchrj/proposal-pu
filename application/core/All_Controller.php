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


    function _check_recaptcha()
	{
		if(!$_POST['g-recaptcha-response']){
			$this->form_validation->set_message('_check_recaptcha', "Silahkan gunakan capcha");
            return FALSE;
		}
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->config->item('recatpcha_secret_key')."&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']));

		if ($response->success) {
            return TRUE;
        } else {
			$this->form_validation->set_message('_check_recaptcha', "Captcha gagal");
            return FALSE;
        }
    }

	/**
	 * start page ajax output
	 */
	function json_success($data = false) {
		$data_output = array(
			'is_error'=>false,
		);
		if($data) {
			$data_output["data"] = $data;
		}
		$this->json($data_output);
	}

	function json($data_output) {
		header('Content-Type: application/json');
		echo (json_encode($data_output));
		exit;
	}

	function json_badrequest($data = false) {
		http_response_code(400);
		$data_output = array(
			'is_error'=>true,
		);
		if($data) {
			$data_output["error_messages"] = $data;
		}
		$this->json($data_output);
	}


	function json_unauthorized($data = false) {
		http_response_code(401);
		$data_output = array(
			'is_error'=>true,
		);
		if($data) {
			$data_output["error_messages"] = $data;
		}
		$this->json($data_output);
	}

	function post_only() {
		$data_post = $this->input->post();
		if(count($data_post) == 0) {
			$this->json_badrequest();
		}
	}

	/**
	 * end page ajax output
	 */
	



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
	