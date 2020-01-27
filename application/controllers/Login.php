<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends All_Controller {
	
	public function index()
	{
		$data = array(
		);
		$this->load->view('default/login',$data);
	}

	public function ajax_login(){
        $this->form_validation->set_rules('g-recaptcha-response', "Captcha", 'required|trim|xss_clean|callback__check_recaptcha');
        $this->form_validation->set_rules('email', "Email", 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', "Password", 'trim|required|xss_clean|min_length[8]|max_length[200]');
        $error=array();
        if ($this->form_validation->run()) {	
            $this->load->model('user/auth');
            $email = $this->form_validation->set_value('email');
            $user=$this->auth->get_data_user_by_email($email);
            if($user){
                if($user->password==hashpass($this->form_validation->set_value('password'))){
                    if(!$user->name){
                        $user->username=$user->email;
                    } else {
                        $user->username=$user->name;
                    }
                    // $this->load->model("admin/adminrole_m");
                    // $menu = $this->adminrole_m->get_menu_by_role($user->role);
                    $set_session=array(
                        'user_id'	=> $user->id,
                        // 'photo'	=> $user->photo,
                        'username'	=> $user->username,
                        'email'		=> $user->email,
                        'user_type'		=> $user->user_type,
                        'login_config' => hashpass($user->email.$user->id),
                        // "menu" => $menu
                    );
                    /* login user */
                    echo json_encode(array(
                        'is_error'=>false
                    ));
                    // $this->log("auth/login", "Melakukan login", 1, $user->id);
					$this->session->set_userdata($set_session);
                    return;
                }
            }
            // $this->log("auth/login", $email. " Gagal Melakukan login password atau email salah", 1);
            echo json_encode(array(
                'is_error'=>true,
                'error_message'=>  " Email atau Password salah"
            ));
            return;
        }
		echo json_encode(array(
            'is_error'=>true,
			'error_message'=>  validation_errors()
        ));
        return;
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function tes() {
        echo json_encode(is_admin());
        exit;
    }
}
