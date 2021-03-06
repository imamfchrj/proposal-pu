<?php

function hashpass($pass){
	$CI =& get_instance();
    $salt = $CI->config->item('salt');
    $with_love = $CI->config->item('with_love');
    $hashed_value = $with_love.md5($salt.$pass);
    return strtoupper($hashed_value);
}

function is_user() {
    return is_type_user(0);
}

function is_admin() {
    return is_type_user(1);
}

function is_type_user($type_id) {

    if(isset($_SESSION["user_type"])){
        if($_SESSION["user_type"] == $type_id) {
            return true;
        }
    }
    return false;
}

function get_user_id() {
    return $_SESSION["user_id"];
}

function get_admin(){
    if(is_admin()){
        return;
    }
    redirect('login/logout');
    exit;
}

function get_admin_ajax(){
    if(is_admin()){
        return;
    }
    $data_output["error_messages"] = "User tidak eligible ke halaman ini!";
    echo json_encode($data_output);
    exit;
}


function get_username(){
    if(isset($_SESSION["username"])){
        return $_SESSION["username"];
    }
    return "user";
}

function get_session(){
    if(isset($_SESSION["login_config"])){
        if(hashpass($_SESSION["email"].$_SESSION["user_id"]) == $_SESSION["login_config"]) {
            return;
        }
    }
    redirect('login/logout');
}

function get_session_ajax(){
    if(isset($_SESSION["login_config"])){
        if(hashpass($_SESSION["email"].$_SESSION["user_id"]) == $_SESSION["login_config"]) {
            return;
        }
    }
    http_response_code(401);
    $data_output = array(
        'is_error'=>true,
    );
    $data_output["error_messages"] = "Sesi habis. User membutuhkan login kembali!";
    echo json_encode($data_output);
    exit;
}


function get_from_sess($val){
    if(isset($_SESSION[$val])) {
        return $_SESSION[$val];
    }
    return "";
}

function round_custom($value, $precision=0){
    return round($value,  $precision, PHP_ROUND_HALF_UP);
}

function ceil_custom($value, $precision=0){
    $pre = 1;
    for($i=1; $i<=$precision; $i++) {
        $pre=$pre*10;
    }
    // return ceil(($value * $pre)) / $pre;
    return ceil(round($value * $pre)) / $pre;
}

function floor_custom($value, $precision=0){
    $pre = 1;
    for($i=1; $i<=$precision; $i++) {
        $pre=$pre*10;
    }
    // return floor(($value * $pre)) / $pre;
    return floor(round($value * $pre)) / $pre;
}

function to_percent($val) {
    if($val == 0){
        return 0;
    }
    return (float)$val/100;
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

function to_float($value){
    $result = str_replace(".","",$value);
    $result = str_replace(",",".",$result);
    return (float)$result;
}


function is_menu_active($menu, $now){
    if($menu == $now) {
        return "current active";
    }
    // return "current active";
}

function get_text_komponen_mst($id=0){
    $data=array(
        0 => 'Pilih Jenis Komponen',
        1 => 'Unit Air Baku',
        2 => 'Unit Produksi',
        3 => 'Unit Distribusi',
        4 => 'Unit Pelayanan',
        5 => 'Bangunan Penunjang',
    );
    if($id<0 || $id>5){
        $id=0;
    }
    return $data[$id];
}

function get_text_sub_komponen_mst_by_field($id=0, $text_field){
    $CI =& get_instance();
    $CI->load->model('Komponen_sub_mst_model');
    return $CI->Komponen_sub_mst_model->get_by_id_with_field($id, $text_field);
}

function get_text_sub_komponen_mst($id=0){
    return get_text_sub_komponen_mst_by_field($id, "komponen_spam");
}

function get_quetion_option($list, $index) {
    $result["success"] = false;
    $result["data"] = array();
    if(!isset($list[$index])) {
        return $result;
    }
    $result["success"] = true;
    $result["data"] = $list[$index];
    return $result;
}

function print_quetion_option($list, $index, $default="") {
   $result =  get_quetion_option($list, $index);
   if(!$result["success"]) {
       echo $default;
       return;
   }
   echo $result["data"][0] . $result["data"][1];
}

function print_quetion_option_text($list, $index) {
   $result =  get_quetion_option($list, $index);
   if(!$result["success"]) {
       echo "Lain-lain";
       return;
   }
   echo $result["data"][2];
}

function get_setter($key, $field) {
    $data = SETTER;
    if(!isset($data[$key][$field])) {
        return "";
    }
    return $data[$key][$field];
}

function get_static_and_disable($key) {
    $result = get_setter($key, "to");
    if(!$result) {
        return "";
    }
    return "disabled";
}

function get_static_data($key, $data_input) {
    $from = get_setter($key, "from");
    $default = 0;
    if(isset($data_input[$key."B"])) {
        $default = $data_input[$key."B"];
    }else {
        $default = $data_input[$key];
    }
    if(!$from) {
        return $default;
    }
    if(!isset($data_input[$from])) {
        return $default;
    }
    return $data_input[$from];
}

function get_static_unit($key) {
    $result = get_setter($key, "satuan");
    if(!$result) {
        return "-";
    }
    return $result;
}

function get_memo($key) {
    if(!isset(MEMO[$key])) {
        return "";
    }
    return '<code>&nbsp;&nbsp;*<i>'.MEMO[$key].'</i></code>';
}
