<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_controller{

public function __construct(){
parent::__construct();
}


public function aboutsection(){
// $session= $this->session->userdata('user');
// if(!$session){
//     redirect('about/aboutsection');
// }





// print_r($data); die;


$this->load->view('User/include/header');
$this->load->view('Post/aboutsection');
$this->load->view('User/include/footer');





}
//////

}

?>