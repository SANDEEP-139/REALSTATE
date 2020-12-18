

<div class="container">
<div class="row">
<div class="col-md-12">
<?php
$success=$this->session->userdata('success');
if ($success != "") {   
?>
<div class="alert alert-success" style="position: relative; left: 22px;"><?php  echo $success;?></div>
<?php
}
?>
<?php
$failure=$this->session->userdata('failure');
if ($failure != "") {   
?>
<div class="alert alert-success"><?php echo $failure; ?></div>
<?php
}
?>
</div>
</div> 
<div id="content">
<div class="row mb-4">
<div class="col-12 mb-4 mb-xl-0">
<div class="card redial-border-light redial-shadow mb-4">
  <div class="card-body">
              
<ul class="list-inline mb-0">
<li id="dropzone" class="list-inline-item mr-3 redial-relative">
<div class="row">
<div class="col-md-5 col-sm-5 col-xs-6">
<a href="<?php  echo base_url().'Product/updateproductlist';?>" class="btn btn-primary btn-xs text-uppercase"> Add Post property</a>
</div>
              
              
              
</div> 
</li>

</ul>

</div>    

<div class="col-12 col-sm-12">
<div class="row">
<div class="col-12 col-md-12 mb-4">
<div class="card redial-border-light redial-shadow">
<div class="card-body" style="overflow: visible;">


      
</div>
<div>



<div class="card-body">
<table id="" class="display table table-bordered" cellspacing="0" style="width:100%">
<thead>
<tr>
<th>Srno</th>
<th>Service</th>
<th>Title</th>
<th>Category</th>
<th>PRICE</th>
<th>Published</th>
<th>AREA</th>
<th>FURNISHED</th>
<th>ROOMS</th>
<th>Name</th>
<th>Email</th>
<th>Description</th>
<th>Mobile</th>
<th>City</th>
<th>locality</th>
<th>upload</th>
<th>Actions</th>
</tr>
</thead>
<tbody>

<?php  
$i = 1;
foreach($record as $user){ ?>

<tr>
<td> <?php  echo $i;?></td>
<td><?php  echo  $user['drpservice']?></td>
<td> <?php  echo $user['txtadtitle']?></td>
<td><?php  echo  $user['drpcategory']?></td>
<td> <?php  echo $user['pricephone']?></td>
<td><?php  echo  $user['ddlPublished']?></td>
<td><?php  echo  $user['areasquareef']?></td>
<td> <?php  echo $user['furnstatus']?></td>
<td><?php  echo  $user['rooms']?></td>
<td> <?php  echo $user['txtname']?></td>
<td> <?php  echo $user['txtemail']?></td>
<td> <?php  echo $user['txtdescription']?></td>
<td><?php  echo  $user['txtphone']?></td>
<td> <?php  echo $user['txtcity']?></td>
<td> <?php  echo $user['txtlocality']?></td>
<td><img src="<?php echo base_url();?>/uploads/<?php  echo $user['uploadfile'];?>" height="55px" width="100px"/></td>


<td>
<div class="btn-group">
<a href="<?php  echo base_url().'Product/updateproductlist/'.$user['id'];?>"> <i class="fa fa-edit"></i></a>
</div>  
<div class="btn-group">
<a href="<?php echo base_url(); ?>Product/updateproductlist/<?php echo $user['id']; ?>/view">View</a>
</div>
  <div class="btn-group">
<a href="<?php  echo base_url().'Product/product_management/delete/'.$user['id'];?>
" onclick="return confirm('Are you sure you want to delete this item?');" >  <i class="fa fa-trash"></i></a>
</div>
</td>
              </tr>
<?php $i++;} ?> 
              
          </tbody>
      </table>
                          
                  </div>           
              
    


</div>
</div>
</div>

</div>           




</div>
</div>
</div>

</div>



</div>
</div>
<script>
$(document).ready(function(){



$(".statuscheck").click(function () {
var a = confirm('Are you sure you want to status changed success?');

if(a==true){
var cat_id = $(this).attr('cat_id_attr');

if ($(this).is(":checked")) {
$.ajax({
url: '<?php echo base_url();?>Product/getproductactive',
data: { title: 'Active',cat_id: cat_id},
method: "POST",
success: function(data) {

location.reload();

}             
});
} else {
$.ajax({
url: '<?php echo base_url();?>Product/getproductactive',
data: { title: 'Inactive',cat_id: cat_id },
method: "POST",
success: function(data) {
location.reload();
//alert('Status changed');
}             
});
}
}else{

//alert(alert($(this).is(":checked")));
}
//return false;

});
});

</script>
                          
              
              
