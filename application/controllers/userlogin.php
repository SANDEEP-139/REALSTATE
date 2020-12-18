
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class userlogin extends CI_Controller {


public function __construct() {
parent::__construct();

$this->load->model('hash');

}




public function loginuser()
{
$this->load->view('User/include/header');
$this->load->view('Post/userlogin');
$this->load->view('User/include/footer');


}

public function signin() {
// echo "hii"; die;
// redirect('Home_login/login');
$session = $this->session->userdata('user');
if(!$session){
//redirect('login/loginview');


$mailid = trim($this->input->post('admin_email'));
$paswd = $this->input->post('password');


$result = $this->db->get_where('usersignup', array('admin_email' => $mailid,'password'=>$paswd));

$data = $result->row_array();

if($this->hash->verifyHash($paswd, $data['password'])){

$this->session->set_userdata('user', $data);
$user = $this->session->userdata('user');
$this->session->set_flashdata('success', 'Login Succesfully!!');

redirect('Admin/dashboard');
} else {
$this->session->set_flashdata('error_message', 'Invalid Email Or Password');
redirect('Admin/dashboard');
}

}else{
$this->session->set_flashdata('error_message', 'Invalid Email Or Password');
redirect('Admin/dashboard');
}


}



public function logout(){
$this->session->unset_userdata('user', '');
$this->session->set_flashdata('success', 'Logout Succesfully!!');
redirect('userlogin/loginuser');
}





}    


