<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postreq extends CI_controller{

public function __construct(){
parent::__construct();
}

public function postreq($par1=""){

//echo "hello"; die;
//      $session= $this->session->userdata('user');
//     if(!$session){
//   redirect('Postreq/postreq');
//      }

$data=array(
'chkservice'=>$this->input->post('chkservice'),
'chkcatergory$0'=>$this->input->post('chkcatergory$0'),
'drpprice'=>$this->input->post('drpprice'),
'drparea'=>$this->input->post('drparea'),
'txtcity'=>$this->input->post('txtcity'),
'rdlplantype'=>$this->input->post('rdlplantype'),
'txtname'=>$this->input->post('txtname'),
'txtphone'=>$this->input->post('txtphone'),
'txtdec'=>$this->input->post('txtdec')


);

$pagedata['record'] = $this->db->get('add_category')->result_array();
$pagedata['record1'] = $this->db->get('postreq')->result_array();
$pagedata['record2'] = $this->db->get('postreq')->result_array();

$this->load->view('User/include/header');
$this->load->view('Post/postreq',$pagedata);
$this->load->view('User/include/footer');

if($par1=='create'){
$user=$this->db->insert('postreq',$data);
if($user){
$this->session->set_flashdata('success',"Record add succesfully");

}
else{
$this->session->set_flashdata('failure',"Record not added successfully");
}
redirect('Postreq/postreq');
}
}
}

?>