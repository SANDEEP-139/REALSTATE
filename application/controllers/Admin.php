<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {


public function __construct() {
parent::__construct();
$this->load->model('hash');


}

public function dashboard()
{

//print_r($this->session->userdata('user'));
$session = $this->session->userdata('user');
if(!$session){
redirect('login/loginview');
}




$this->load->view('Admin/include/header');
$this->load->view('Admin/admin_dashboard');
$this->load->view('Admin/include/footer');

}




public function changePassword()
    
{

$session = $this->session->userdata('user');
$id = $session['user_id'];
// echo "$id"; die;
$opassword= $this->input->post('oldpassword');

$newpassword= $this->input->post('newpassword');
$confirmpass=  $this->input->post('confirmpassword');

if($newpassword == $confirmpass)
{

$result = $this->db->get_where('signup', array( 'user_id'  =>$id));
//  echo "$result"; die;
$data=$result->row_array();
//   echo "$data"; die;

if($this->hash->verifyHash($opassword,$data['password'])){
  
  $new_pass = $this->hash->hash($confirmpass);
  // echo "$new_pass"; die;
  
    $this->db->where( 'user_id' ,$id);
  $result=$this->db->update('signup',array('password' => $new_pass ));
  
  $result = $this->db->get_where('signup', array('user_id' =>$id ));
//  echo "$result"; die;
  $data=$result->row_array();
    
  
  if( $data){
    $this->session->set_flashdata('success ', 'password change successfully');
        redirect( base_url().'Admin/dashboard');
  }
  
}


}  else {
$this->session->set_flashdata('failure','Old  pass is not match');
//  redirect('Admin/Profile'); 
}
//print_r($formArray['hobbies']);  die;



}



/// end forgot password//


public function signupmanagement($par1='',$par2='',$par3=''){


$data=array(

'name'=>$this->input->post('name'),
'admin_email'=>$this->input->post('admin_email'),
'password'=>$this->input->post('password'),
'mobilenumber'=>$this->input->post('mobilenumber')


);



if($par1=='create'){
  

$this->db->insert('signup' ,$data);

}

$this->load->view('Admin/usersingup');
}






public function profile(){


//databsen se data session id  ke through
$session = $this->session->userdata('user');

$id = $session['user_id'];

$data['userrecord'] = $this->db->get_where('signup',array('user_id'=>$id))->row_array();

//print_r($data); die; 

$this->load->view('Admin/include/header');
$this->load->view('Admin/profile',$data);
$this->load->view('Admin/include/footer');

}

/* 
$par1 = create, update, delete
$par2 = id
*/




public function usermanagement(){

$formArray['name']=$this->input->post('name');
$formArray['admin_email']=$this->input->post('admin_email');
$formArray['password']= $this->input->post('password');

$formArray['mobilenumber']=$this->input->post('mobilenumber'); 



//print_r($formArray['hobbies']);  die;

$session = $this->session->userdata('user');
$hidden_id =$this->input->post('hidden_id');
$this->db->where( 'user_id' ,$hidden_id);
$result=$this->db->update('signup',$formArray);
///echo $this->db->last_query();
//print_r($result); die;
if ($result) {
# code...
$this->session->set_flashdata('success','record update successfully');
redirect('Admin/Dashboard');
}
else{

$this->session->set_flashdata('failure','record not updated');
redirect('Admin/profile');
}



//

} 
}  
?>