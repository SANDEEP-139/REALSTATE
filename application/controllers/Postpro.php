<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postpro extends CI_controller{

            public function __construct(){
            parent::__construct();
           
                    
            }
public function getproduct($par1=''){


$result = $this->db->get_where('add_subcategory',array('category'=>$par1))->result_array();
//print_r($result);die;
$output = '';
foreach($result as $value){
?>
<option value="<?php  echo $value['category'];?>"><?php  echo $value['subcategory_name'];?>	</option>
<?php

}

} 







public function postadd($par1=''){

  // $files= $_FILES;
  // $cpt = count ($_FILES['uploadfile']['name']);
  // for($i = 0; $i < $cpt; $i ++) {

  //     $_FILES['uploadfile']['name'] = $files['uploadfile']['name'][$i];
  //     $_FILES['uploadfile']['type'] = $files['uploadfile']['type'][$i];
  //     $_FILES['uploadfile']['tmp_name'] = $files['uploadfile']['tmp_name'][$i];
  //     $_FILES['uploadfile']['error'] = $files['uploadfile']['error'][$i];
  //     $_FILES['uploadfile']['size'] = $files['uploadfile']['size'][$i];

  //     //$this->upload->initialize ( $this->set_upload_options1() );
  //     $this->upload->do_upload("uploadfile");
  //     $fileName = $_FILES['uploadfile']['name'];
  //     $images[] = $fileName;
  // }





$imgepath="";
$check = getimagesize($_FILES["imgupload"]["tmp_name"]);
  if($check !== false)
  {
    //print_r("Get file");
      $allowTypes = array('jpg','png','jpeg','gif'); 
      foreach($_FILES['imgupload']['name'] as $key=>$val){ 
          $fileName = basename($_FILES['imgupload']['name'][$key]); 
          $targetFilePath = "uploads/" . $fileName; 
         
            //unlink($targetFilePath);

          $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
          if(in_array($fileType, $allowTypes)){
              if(move_uploaded_file($_FILES["imgupload"]["tmp_name"][$key], $targetFilePath)){ 
                  $imgepath.= ",".$fileName;
                  // @unlink('uploads');
              }
              else{
              
              }
          }
          else{

          }
      }

    $imgepath = ltrim($imgepath,',') ;
  }
  
  


$data=array(

'txtadtitle'=>$this->input->post('txtadtitle'),
'drpservice'=>$this->input->post('drpservice'),              
'drpcategory'=>$this->input->post('drpcategory'),
'pricephone'=>$this->input->post('pricephone'),
'areasquareef'=>$this->input->post('areasquareef'),
'furnstatus'=>$this->input->post('furnstatus'),
'rooms'=>$this->input->post('rooms'),
'txtdescription'=>$this->input->post('txtdescription'),
'ddlPublished'=>$this->input->post('ddlPublished'),
'txtname'=>$this->input->post('txtname'),
'txtphone'=>$this->input->post('txtphone'),
'txtemail'=>$this->input->post('email'),
'txtcity'=>$this->input->post('txtcity'),
'txtlocality'=>$this->input->post('txtlocality'),
'uploadfile'=>$imgepath
   //print_r($filename); die;

  // print_r($filename); 


);



// print_r($data); die;

$pagedata['record'] = $this->db->get('add_category')->result_array();
$pagedata['record4']= $this->db->get_where('postpro')->result_array();
$pagedata['record3']=$this->db->get_where('add_subcategory',array('status'=>'Active'))->result_array();
$pagedata['record2']= $this->db->get_where('postpro')->result_array();

$this->load->view('User/include/header');
$this->load->view('Post/postpro',$pagedata);
$this->load->view('User/include/footer');

//print_r($data); die;

if($par1=='create'){
$user=$this->db->insert('postpro' ,$data);
  //print_r($user); die;
if ($user) {
$this->session->set_flashdata('success','Record added successfully');
redirect('Postpro/postadd');
}
else{
$this->session->set_flashdata('failure','Record not added');
}
//redirect('Postpro/postadd');
}
}



//////

}

?>