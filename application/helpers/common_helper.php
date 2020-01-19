<?php

function hashpass($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt');
    $with_love = $CI->config->item('with_love');
    $hashed_value = $with_love.md5($salt.$pass);
    return strtoupper($hashed_value);
}


function get_from_sess($val){
    if(isset($_SESSION[$val])) {
        return $_SESSION[$val];
    }
    return "";
}

function is_have_access($menuname){
    $menu = get_from_sess("menu");
    if(!isset($menu[$menuname])) {
        return false;
    }
    if(!$menu[$menuname]) {
        return false;
    }
    return true;
}

function is_my_level_ajax($menuname){
    if(!is_have_access($menuname)) {
        echo json_encode(array(
            'is_error'=>true,
            'error_message'=>  "You don't have permission"
        ));
        exit;
    }
}

function is_my_level($menuname){
    if(!is_have_access($menuname)) {
        redirect("");
        exit;
    }
}

function is_my_level_menu($menuname){
    if(!is_have_access($menuname)) {
        return "d-none-cst";
    }
}

function get_text_gender($id=0){
    $data=array(
        0 => 'Pilih Jenis Kelamin',
        1 => 'Laki-Laki',
        2 => 'Perempuan',
        3 => 'Tidak ingin disebutkan',
    );
    if($id<0 || $id>3){
        $id=0;
    }
    return $data[$id];
}

function cek_checked($val=0){
    if($val){
        return "checked";
    }
    return "";
}

function cekmenu_ajax($menu=0){
    return true;
}


function get_menu($role_id=1){
    $CI =& get_instance();
    $CI->load->model('admin/mastermenu_m');
    $data=$CI->mastermenu_m->get_master_menu($role_id);
    $i=0;
    foreach($data as $list){
        $sub_menu=$CI->mastermenu_m->get_sub_menu($role_id,$list->id);
        $data[$i]->sub_menu=$sub_menu;
        $i++;
    }
    return $data;
}

function get_title($text=false) {
    $title = "KPU Sahatama";
    if ($text) {
        $title .= " - " . $text;
    }
    return $title;
}

function getter($data) {
    if(isset($data)) {
        return $data;
    }
    return "";
}

function getter_day($data) {
    if(isset($data)) {
        return $data / 86400;
    }
    return "";
}

function getter_date($data) {
    if(isset($data)) {
        if(!$data){
            return "-";
        }
        return date("Y-m-d",$data);
    }
    return "";
}

function upload_image($name="userfile"){
    $CI =& get_instance();
    
    $config['upload_path']          = ".".UPLOAD_PATH;
    $config['allowed_types']        = 'gif|jpg|png|psd|jpeg|jpg2|jpe|j2k|jpf|jpm|pdf|svg';
    $config['encrypt_name']         = TRUE;
    $config['max_size']             = 5000;
    // $config['max_width']            = 10240;
    // $config['max_height']           = 7680;

    $CI->load->library('upload', $config);

    if ( ! $CI->upload->do_upload($name))
    {
            
            return array("is_error"=>true,"error"=>$CI->upload->display_errors());
    }
    else
    {
            $data = $CI->upload->data();
            return array("is_error"=>"0","filename"=>$data["file_name"]);
    }

}


function is_menu_active($menu, $now){
    if($menu == $now) {
        return "current active";
    }
    // return "current active";
}