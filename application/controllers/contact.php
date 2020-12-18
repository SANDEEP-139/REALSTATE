<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_controller{

public function __construct(){
parent::__construct();
}


public function contactadd($par1='',$par2='',$par3=''){
// $session= $this->session->userdata('user');
// if(!$session){
//     redirect('contact/contactadd');
// }


$data=array(

'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),              
'subject'=>$this->input->post('subject'),
'message'=>$this->input->post('message')
//'uploadfile'=>$filename
// print_r($filename);


);


// print_r($data); die;


$this->load->view('User/include/header');
$this->load->view('Post/contactadd');
$this->load->view('User/include/footer');



if($par1=='create'){




$user=$this->db->insert('contact' ,$data);
if ($user) {
# code...
$this->session->set_flashdata('success','Record added successfully');

}

else
{

$this->session->set_flashdata('failure','Record not added');

}

redirect('contact/contactadd');
//
}



}
//////

}

?>