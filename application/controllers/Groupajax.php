<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupajax extends All_Controller {
    function __construct() {
		parent::__construct();
        get_session_ajax();
        $this->load->model("Komponenkegiatan_model");
	}
	
	public function komponen_kegiatan($key, $sub_key, $bangunan_penunjang = 0, $year=false)
	{
		$data = $this->Komponenkegiatan_model->komponen_by_key(
			$key, 
			$sub_key,
			$bangunan_penunjang,
            $year
		);
        $this->json_success($data);
	}

}
