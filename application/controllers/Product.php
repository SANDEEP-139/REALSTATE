
<?php
class product extends CI_Controller 
{



public function __construct()
{
/*call CodeIgniter's default Constructor*/
parent::__construct();


}
// #@par1 = id
//$par1= read,update,delete
//$par2=id	
//






 
public function getproductactive(){

$id  =$this->input->post('cat_id');
$this->db->where( 'id' ,$id);
$user=$this->db->update('product',array('status' => $this->input->post('title')));
if($user)
{

$this->session->set_flashdata('success','status changed successfully');
}
else{

$this->session->set_flashdata('failure','status not changed');
}

} 
public function getsubcatactive(){

$id  =$this->input->post('cat_id');
$this->db->where( 'id' ,$id);
$user=$this->db->update('add_subcategory',array('status' => $this->input->post('title')));
//echo $this->db->last_query(); die;
if($user)
{

$this->session->set_flashdata('success','status changed successfully');
}
else{
$this->session->set_flashdata('failure','status not changed');
}


} 

public function getactive(){

$id  =$this->input->post('cat_id');
$this->db->where( 'id' ,$id);
$user=$this->db->update('add_category',array('status' => $this->input->post('title')));
if($user)
{



$this->session->set_flashdata('success','status changed successfully');
}
else{
$this->session->set_flashdata('failure','status not changed');

}


} 

//subcategory//

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




//name//

public function productlist($par1='', $par2 = ''){

//$pagedata =$this->db->get('product')->result_array(); 

$this->db->from('postpro');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
$pagedata = $query->result_array();


foreach($pagedata as $key=>$value){
	$res= $this->db->get_where('add_category',array('id'=>$value['txtcity']))->row_array();
	$ress = $this->db->get_where('add_subcategory',array('id'=>$value['txtlocality']))->row_array();
	$pagedata[$key] ['txtcity'] = $res['category_name'];
	$pagedata[$key] ['txtlocality'] = $ress['subcategory_name'];

}


//echo '<pre>';
//print_r($pagedata); die;


$pagedata['record'] = $pagedata;
//echo '<pre>'; print_r($pagedata); die; 
$this->load->view('Admin/include/header');
$this->load->view('Admin/listproduct',$pagedata);
$this->load->view('Admin/include/footer');
//redirect('product/productlist');
}


// product all list//
public function updateproductlist($par1='', $par2 = ''){
$pagestatus;
$pagedata['id']=$par1;
//print_r($pagedata); die;
if($par1){
$pagedata['updaterecord'] = $this->db->get_where('postpro',array('id'=>$par1))->row_array();

}

$pagedata['pagestatus']="";

if(!empty($par1)&& !empty($par2)){
$pagedata['pagestatus']= $par2;
//            if($par2=='view'){
//            
//         }
}
// category




$pagedata['record'] = $this->db->get('add_category')->result_array();
$pagedata['record2']= $this->db->get_where('postpro')->result_array();
$pagedata['record4']= $this->db->get_where('postpro')->result_array();
$pagedata['record3'] = $this->db->get_where('add_subcategory',array('status'=>'Active'))->result_array();
//print_r($pagedata); die;
// $pagedata = 
$this->load->view('Admin/include/header');
$this->load->view('Admin/productadd',$pagedata);
$this->load->view('Admin/include/footer');

//	redirect('product/productlist');
}
/* 
$par1 = create, update, delete

$par2 = id
*/

//product add//




public function product_management($par1='',$par2='',$par3='')
{ 

	$imgepath="";
	$check = getimagesize($_FILES["imgupload"]["tmp_name"]);
	  if($check !== false)
	  {
		//print_r("Get file");
		  $allowTypes = array('jpg','png','jpeg','gif'); 
		  foreach($_FILES['imgupload']['name'] as $key=>$val){ 
			  $fileName = basename($_FILES['imgupload']['name'][$key]); 
			  $targetFilePath = "uploads/" . $fileName; 
			 
				unlink($targetFilePath);
	
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
'txtemail'=>$this->input->post('txtemail'),
'txtcity'=>$this->input->post('txtcity'),
'txtlocality'=>$this->input->post('txtlocality'),
//'status'=>$this->input->post('status'),
'uploadfile'=>$fileName





);


//print_r($data); die;
$this->load->view('Admin/include/header');
$this->load->view('Admin/productadd');
$this->load->view('Admin/include/footer');



if($par1=='create'){
$user=$this->db->insert('postpro' ,$data);
if ($user) {
# code...
$this->session->set_flashdata('success','Record added successfully');
}
else{

$this->session->set_flashdata('failure','Record not added');

}

//redirect('Product/productlist');
//
}



if($par1=='update'){





$id  =$this->input->post('id');
$this->db->where( 'id' ,$id);
$user=$this->db->update('postpro',$data);
///echo $this->db->last_query();
//  print_r($user); die;

if ($user) {
# code...
$this->session->set_flashdata('success','record update successfully');
}
else{

$this->session->set_flashdata('failure','record not updated');

}
redirect('product/productlist');

}
//update user recoord



//redirect
//
//delete
if ($par1=='delete') {



$id=$par2;
$this->db->where('id' ,$id);
$user=$this->db->delete('postpro');

# code...
if($user){
$this->session->set_flashdata('success','record deleted successfully');

}
else
{ 
$this->session->set_flashdata('failure','record not found in database');

}
redirect(base_url().'product/productlist');

//
}


}  



//product list //


//tranferlist//





//add tranfer//


// tranfer end//

// sales list//
public function creationlist()
{

//$pagedata['record']=   $this->db->get('company')->result_array(); 
// print_r($pagedata); die;
$this->db->from('company');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
$pagedata['record'] = $query->result_array();

$this->load->view('Admin/include/header');
$this->load->view('Admin/viewcompany',$pagedata);
$this->load->view('Admin/include/footer');


}


public function updatecreation($par1=''){
$pagedata['id']=$par1;
if($par1){
$pagedata['updaterecord']= $this->db->get_where('company',array('id' =>$par1))->row_array();
}


$this->load->view('Admin/include/header');
$this->load->view('Admin/addcompany',$pagedata);
$this->load->view('Admin/include/footer');
}   


// sales add//

public function companycreation_management($par1='',$par2='',$par3=''){


$data=array(

'Firstname'=>$this->input->post('Firstname'),
'Lastname'=>$this->input->post('Lastname'),
'email'=>$this->input->post('email'),
'business'=>$this->input->post('business'),
'contact'=>$this->input->post('contact'),
'company_name'=>$this->input->post('company_name'),
'address'=>$this->input->post('address'),
'business_type'=>$this->input->post('business_type'),
'state'=>$this->input->post('state'),
'message'=>$this->input->post('message')


);
$this->load->view('Admin/include/header');
$this->load->view('Admin/addcompany');
$this->load->view('Admin/include/footer');
if($par1=='create'){


$result=$this->db->insert('company' ,$data);
if($result){
$this->session->set_flashdata('success','record added successfully');
}else{
$this->session->set_flashdata('fail','unable to add please check');
}


}



if($par1=='update'){


$id  =$this->input->post('id');
$this->db->where( 'id' ,$id);
$result=$this->db->update('company',$data);

if ($result) {
# code...
$this->session->set_flashdata('success','record update successfully');
}
else{

$this->session->set_flashdata('failure','record not updated');

}
redirect('product/creationlist');

}
//update user recoord



//redirect
//
//delete
if ($par1=='delete') {



$id=$par2;
$this->db->where('id' ,$id);
$user=$this->db->delete('company');

# code...
if($user){
$this->session->set_flashdata('success','record deleted successfully');

}
else
{ 
$this->session->set_flashdata('failure','record not found in database');

}
redirect(base_url().'product/creationlist');

//
}






}



// add customer//



//  add end list//
//  supplly list//
public function supplierlist()
{
$pagedata =$this->db->get('postreq')->result_array();


foreach($pagedata as $key=>$value){
$res = $this->db->get_where('add_category',array('id'=>$value['category']))->row_array();
$pagedata[$key]['category'] = $res['category_name'];
}
//print_r($pagedata); die;
$pagedata['record'] = $pagedata;
//$pagedata['record']=   $this->db->get('postreq')->result_array(); 
// print_r($pagedata); die;

$this->load->view('Admin/include/header');
$this->load->view('Admin/supplylist',$pagedata);
$this->load->view('Admin/include/footer');


}

public function updatesupplier($par1=''){

$pagedata['id']=$par1;
if($par1){
$pagedata['updaterecord'] = $this->db->get_where('postreq',array('id'=>$par1))->row_array();

}

$pagedata['record']=   $this->db->get('postreq')->result_array(); 

$pagedata['record1']= $this->db->get('postreq')->result_array();

$this->load->view('Admin/include/header');
$this->load->view('Admin/addsupply',$pagedata);
$this->load->view('Admin/include/footer');

}





//  add supply//
public function supplier_management($par1='',$par2='',$par3=''){


$data=array(

'chkservice'=>$this->input->post('chkservice'),
'chkcatergory$0'=>$this->input->post('chkcatergory$0'),
'drpprice'=>$this->input->post('drpprice'),
'drparea'=>$this->input->post('drparea'),
'txtcity'=>$this->input->post('txtcity'),
'rdlplantype'=>$this->input->post('rdlplantype'),
'txtname'=>$this->input->post('txtname'),
'txtphone'=>$this->input->post('txtphone'),
'txtdec'=>$this->input->post('txtdec'),
'status'=>$this->input->post('status')

);


// print($data); die;
$this->load->view('Admin/include/header');
$this->load->view('Admin/addsupply');
$this->load->view('Admin/include/footer');

if($par1=='create'){


$result=$this->db->insert('postreq' ,$data);
if($result){
$this->session->set_flashdata('success','suppllier added successfully');
}else{
$this->session->set_flashdata('fail','unable to add please check');
}
}




if($par1=='update'){


$id  =$this->input->post('id');
$this->db->where( 'id' ,$id);
$result=$this->db->update('postreq',$data);

if ($result) {
# code...
$this->session->set_flashdata('success','record update successfully');
}
else{

$this->session->set_flashdata('failure','record not updated');

}
redirect('product/supplierlist');

}
//update user recoord



//redirect
//
//delete
if ($par1=='delete') {



$id=$par2;
$this->db->where('id' ,$id);
$user=$this->db->delete('postreq');

# code...
if($user){
$this->session->set_flashdata('success','record deleted successfully');

}
else
{ 
$this->session->set_flashdata('failure','record not found in database');

}
redirect(base_url().'product/supplierlist');

//
}






}







// purchase return//


//category list//

public function categorylist($par1=''){
//$pages['record']=   $this->db->get('add_category')->result_array(); 
$this->db->from('add_category');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
$pagedata['record'] = $query->result_array();

//echo "<pre>";print_r($pagedata); die;
$this->load->view('Admin/include/header');
$this->load->view('Admin/listcategory',$pagedata);
$this->load->view('Admin/include/footer');


}

public function updatecategory($par1=''){
$page['id']=$par1;
if($par1){
$page['updaterecord'] = $this->db->get_where('add_category',array('id'=>$par1))->row_array();
//print_r($page); die;
}

$this->load->view('Admin/include/header');
$this->load->view('Admin/addcategory',$page);
$this->load->view('Admin/include/footer');
}
/* 
$par1 = create, update, delete
$par2 = id
*/


// category add//

public function mastercategory_management($par1='',$par2='',$par3=''){


$data=array(

'category_name'=>$this->input->post('category_name'),
'status'=>$this->input->post('status')
);
//print_r($data); die;
$this->load->view('Admin/include/header');
$this->load->view('Admin/addcategory');
$this->load->view('Admin/include/footer');
//redirect('Product/categorylist');

if($par1=='create'){


$result=$this->db->insert('add_category' ,$data);	

if($result){
$this->session->set_flashdata('success','category added successfully');
redirect( base_url().'Product/updatecategory');
}else{
$this->session->set_flashdata('fail','unable to add please check');
///redirect('Product/mastercategory_management');
}
// redirect( base_url().'Product/categorylist');	

}	



//redirect('Product/Categorylist');
//redirect

if($par1=='update'){


$id  =$this->input->post('id');
$this->db->where( 'id' ,$id);
$result=$this->db->update('add_category',$data);

if ($result) {
# code...
$this->session->set_flashdata('success','record update successfully');
redirect( base_url().'Product/updatecategory');
}
else{

$this->session->set_flashdata('failure','record not updated');

}
// redirect('Product/categorylist');

}
//update user recoord



//redirect
//
//delete
if ($par1=='delete') {



$id=$par2;
$this->db->where('id' ,$id);
$result=$this->db->delete('add_category');

# code...
if($result){
$this->session->set_flashdata('success','record deleted successfully');
redirect( base_url().'Product/categorylist');

}
else
{ 
$this->session->set_flashdata('failure','record not found in database');

}
//redirect(base_url().'product/categorylist');

//
}






}
//printype//




/* 
$par1 = create, update, delete
$par2 = id
*/


// category add//


public function subcatlist(){	


//$pagedata =$this->db->get('add_subcategory')->result_array();
$this->db->from('add_subcategory');
$this->db->order_by("id", "desc");
$query = $this->db->get(); 
$pagedata = $query->result_array(); 


foreach($pagedata as $key=>$value){
$res = $this->db->get_where('add_category',array('id'=>$value['category']))->row_array();
$pagedata[$key]['category'] = $res['category_name'];
}
//print_r($pagedata); die;
$pagedata['record'] = $pagedata; 

//print_r($pagedata); die;
$this->load->view('Admin/include/header');
$this->load->view('Admin/listsubcategory',$pagedata);
$this->load->view('Admin/include/footer');


}

/* 
$par1 = create, update, delete
$par2 = id
*/
public function updatesubcat($par1=''){
$pagedata['id']=$par1;
if($par1){
$pagedata['updaterecord'] = $this->db->get_where('add_subcategory',array('id'=>$par1))->row_array();

}

$pagedata['record3']=$this->db->get_where('add_category',array('status'=>'Active'))->result_array();

$this->load->view('Admin/include/header');
$this->load->view('Admin/subcategoryadd',$pagedata);
$this->load->view('Admin/include/footer');

}



public function mastersubcateg_management($par1='',$par2='',$par3=''){


$data=array(
'category'=>trim($this->input->post('category')),
'subcategory_name'=>trim($this->input->post('subcategory_name')),
'status'=>$this->input->post('status')
);
//print_r($data); die;
// $data['record'] = $this->db->get('add_category')->result_array();
$this->load->view('Admin/include/header');
$this->load->view('Admin/subcategoryadd');
$this->load->view('Admin/include/footer');



if($par1=='create')
{


$result=$this->db->insert('add_subcategory' ,$data);

}
if($result){
$this->session->set_flashdata('success','subcategory added successfully');
	redirect( base_url().'Product/updatesubcat');
}else{
$this->session->set_flashdata('fail','unable to add please check');
///redirect('Product/mastercategory_management');
}
//redirect


if($par1=='update'){


$id  =$this->input->post('id');
$this->db->where( 'id' ,$id);
$result=$this->db->update('add_subcategory',$data);

if ($result) {
# code...
$this->session->set_flashdata('success','record update successfully');
}
else{

$this->session->set_flashdata('failure','record not updated');

}
redirect('Product/subcatlist');

}
//update user recoord



//redirect
//
//delete
if ($par1=='delete') {



$id=$par2;
$this->db->where('id' ,$id);
$result=$this->db->delete('add_subcategory');

# code...
if($result){
$this->session->set_flashdata('success','record deleted successfully');

}
else
{ 
$this->session->set_flashdata('failure','record not found in database');

}
redirect(base_url().'Product/subcatlist');

//
}






}



// ////////Order management///////////////









//  add supply//




//end//


/////////////order management///////////////
}

?>
