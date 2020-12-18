<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class properties extends CI_controller{

public function __construct(){
parent::__construct();
}


public function propertiessection(){

$pagedata['record'] = $this->db->get('postpro')->result_array();
$this->load->view('User/include/header');
$this->load->view('Post/propertiessection',$pagedata);
$this->load->view('User/include/footer');

}
  
public function search(){
 $search= $this->input->post('search');
$this->db->like('id', $search);
$this->db->or_like('rooms', $search);
$this->db->or_like('areasquareef', $search);
$this->db->or_like('txtadtitle', $search);
$this->db->or_like('txtname', $search);
$this->db->or_like('txtcity', $search);
$this->db->or_like('uploadfile', $search);
$query = $this->db->get('postpro')->result_array();
print_r($query);die;
foreach($query as $user){
    echo '
    <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
        <div class="cata position-absolute">
            <span class="sale bg-secondary text-white">For Rent</span>
        </div>
          <a href="'.base_url().'user/propertydetail/'.$user['id'].'"><img src="<?php  echo base_url();?>uploads/<?php  echo $myString[0]?>" alt="Image Not Found!"></a>  -->
         
        <ul class="position-absolute quick-meta">
            <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
            <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
            <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
        </ul>
    </div>
    <div class="property_text p-3" id="txtadtitle">
        <span  class="d-inline-block text-primary">'.$user['txtadtitle'].'</span>
        <h6 class="mt-2"><a class="font-600 text-secondary" href="<?php  echo base_url();?>user/propertydetail">'.$user['txtdescription'].'</a></h6>
        <span class="mt-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i>'.$user['txtcity'].'</span>
        <span class="text-primary font-medium py-2 d-table font-700">INR1,0450/<small>mo</small></span>
        <div class="quantity">
            <ul id="myUL" class="d-flex">
                <li><span> '.$user['rooms'].':</span></li>
                
                <li><span>  '.$user['areasquareef'].':</span>Sqft<sup>2</sup></li>
            </ul>
        </div>
        <div class="d-flex align-items-center post-meta mt-4">
            <div class="agent">
                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle mr-2" src="'.base_url().'assetsss/images/team/1.jpg" alt="avata"><span>'.$user['txtname'].'</span></a>
            </div>
            <div class="post-date ml-auto"><span>2 Month Ago</span></div>
        
    </div>
</div>';
}
}

}

?>