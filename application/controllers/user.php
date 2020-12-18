<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller{

      public function __construct(){
            parent::__construct();
      }

      public function userpanel(){


            $pagedata['record']= $this->db->get('postpro')->result_array();
     
            $this->load->view('User/include/header');
            $this->load->view('User/include/section',$pagedata);
            $this->load->view('User/include/footer');
      }


      public function propertydetail($id=""){
         
      // $id  =$this->input->post('id');
      // $this->db->where( 'id' ,$id);
      $result['property'] = $this->db->get_where('postpro', array('id'=>$id))->row_array();
      $result['records']= $this->db->get('postpro')->result_array();
      
     // print_r($result['txtadtitle']);
      $this->load->view('User/include/header');
      $this->load->view('Post/propertylist',$result);
      

      }

      public function propertyform($par1=''){
            $data=array(
                  'name'=>$this->input->post('name'),
                  'phone'=>$this->input->post('phone'),
                  'email'=>$this->input->post('email'),
                  'message'=>$this->input->post('message')


            );

            if($par1=='create'){

                  $user=$this->db->insert('propertform',$data);
                  if($user){
                        $this->session->set_flashdata('success','Record add successfully');
                        redirect('user/propertydetail');
                  }
                  else{
                        $this->session->set_flashdata('failure','Record not found');
                  }
               redirect('user/propertydetail');
            }
      }
      public function propertyreview($par1=''){
            $data=array(
                  'name'=>$this->input->post('name'),
                  'email'=>$this->input->post('email'),
                  'message'=>$this->input->post('message')


            );

            if($par1=='create'){

                  $user=$this->db->insert('propertreview',$data);
                  if($user){
                        $this->session->set_flashdata('success','Record add successfully');
                        redirect('user/propertydetail');
                  }
                  else{
                        $this->session->set_flashdata('failure','Record not found');
                  }
               redirect('user/propertydetail');
            }
      }
}

?>