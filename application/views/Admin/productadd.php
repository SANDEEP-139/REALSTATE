<?php
//error_reporting(0);
if ($updaterecord) {
$action = 'update';
} else {
$action = 'create';
}
?>
<head><script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script></head>
<style>
.error{
color: red;
}
</style>

<div class="row">
<div class="col-md-12">
<?php
$success=$this->session->userdata('success');
if ($success != "") {   
?>
<div class="alert alert-success"><?php  echo $success;?></div>
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

</div>
<div class="col-12 col-sm-12">
<div class="row">
<div class="col-12 col-md-12 mb-4">
<div class="card redial-border-light redial-shadow">
<div class="card-body" style="overflow: visible;">
<form name="frm" id="addproduct" method="post" action="<?php  echo base_url()?>Product/product_management/<?php echo $action;?>"
enctype="multipart/form-data">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Service*</label>
<select name="drpservice"  id="drpservice" class="form-control" onchange="changeFunc();" id="drpservice" type="text" style="border-style:Groove;">
<option selected="selected" value="0">Select Service</option>
<option  value="Rent/Lease">Rent/Lease</option>
<option value="Sell">Sell</option>
</select>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<span class="ar-none ar-font categ">Please Select Category</span>
<select name="drpcategory" class="form-control ar-none categ" onchange="changecat();"  id="drpcategory" type="text" style="border-style:Groove;" >
<option selected="selected" value="0" >Select Category</option>
<option  value="House">House</option>
<option value="Apartments">Apartments</option>
<option  value="PG & Roommates">PG & Roommates</option>
<option value="Shop-office">Shop-office</option>
<option value="Guest house">Guest house</option>
</select>
</div>
</div>

</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">


<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Title*</label>
<input type="hidden" name="id" value="<?php  echo $updaterecord['id']; ?>">
<input type="text" name="txtadtitle"  value="<?php  echo $updaterecord['txtadtitle'];?>" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">PRICE*</label>
<input type="number"  name="pricephone"  value="<?php echo $updaterecord['pricephone']; ?>" class="form-control">
</div>




<div class="form-group color_type" style="display: none;">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Published By*</label>
<select  name=" ddlPublished" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="form-control">
<option value="0">Select Published By</option>
<option value="Owner">Owner</option>
<option value="Property Dealer">Property Dealer</option>
<option value="Builder">Builder</option>                 
</select>
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">AREA (SQUAREFEET)*</label>
<input type="number"  name="areasquareef" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['areasquareef'];?>" value="" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">FURNISHED STATUS*</label>
<select name="furnstatus"  id="furnstatus" class="form-control"    placeholder="Enter your Furnished status"  type="text" autocomplete="off" style="border-style:Groove;" >
	<option selected="selected" value="0">Please Select</option>
	<option value="Furnished">Furnished</option>
	<option value="Unfurnished">Unfurnished</option>
	<option value="Semi-Furnished">Semi-Furnished</option>

</select>

</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">ROOMS*</label>
<select name="rooms"  id="rooms" class="form-control"   placeholder="Enter your Rooms"  type="text" autocomplete="off" style="border-style:Groove;" >

<option selected="selected" value="0">Please Select</option>
	<option value="1 room">1 room</option>
	<option value="2 rooms">2 rooms</option>
	<option value="3 rooms">3 rooms</option>
	<option value="4 and more">4 and more</option>
</select>
</div>


<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Name*</label>
<input type="text" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> name="txtname" value="<?php echo $updaterecord['txtname'];?>" class="form-control">
</div>
<div class="form-group">
	<label>Product Image </label>
	<input type="file" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> class="" id="uploadfile" name="uploadfile" />

	<input type="hidden" class="" id="update_uploadfile" name="update_uploadfile"  value="<?php  echo $updaterecord['uploadfile'];?>">
	<img src="<?php echo base_url();?>/uploads/images/<?php  echo $updaterecord['uploadfile'];?>" alt="photo" style="border-radius: 50%; width:50px; height: 50px;">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Description*</label>
<textarea name="txtdescription" class="form-control"  rows="10" cols="20" id="txtdescription" value=""  placeholder="Enter your Description" style="border-style:Groove; "><?php  echo $updaterecord['txtdescription'];?></textarea>
</div>
<div class="form-group">                   
<div class="col-md-6" >
<label class="redial-font-weight-600 "  style="margin-bottom: 10px;">Mobile number*</label>
<input type="number"  name="txtphone" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['txtphone'];?>" class="form-control" >

</div>


</div>


<div class="form-group">
<div class="col-md-6" >
<label class="redial-font-weight-600"  style="margin-bottom: 10px;">Email*</label> 
<input type="text"  name="txtemail" <?php if(!empty($pagestatus)){if($pagestatus=='view'){echo 'readonly' ;}} ?> value="<?php  echo $updaterecord['txtemail'];?>" class="form-control" >

</div>
           
</div>
<div class="form-group">
<span style="color: black; font-weight: bold;">City<label>*</label></span>
<select name="txtcity"  id="txtcity" class="form-control"  onchange="test(this.value);" placeholder="Enter your city"  type="text" autocomplete="off" style="border-style:Groove;" >

<option selected="selected" value="" >Select city*</option>
<?php foreach($record as $key=>$value){


?>
<option <?php if(!empty($updaterecord)){ if($updaterecord['txtcity']==$value['id']){echo "selected";}}?> value='<?php echo $value['id']; ?>'>
<?php  echo $value['category_name'];?></option>

<?php }?>        

</select>
</div>
<div class="form-group">
<span style="color: black; font-weight: bold;">Locality</span>
<select name="txtlocality"  id="txtlocality" class="form-control"  placeholder="Enter your city"  type="text" autocomplete="off" style="border-style:Groove;" >
<option selected="selected" value="" >Select Locality*</option>
<?php foreach ($record3 as $key=>$value){

?>

<option <?php if(!empty($updaterecord)){if($updaterecord['txtlocality']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
<?php  echo $value['subcategory_name'];?></option> <br />

<?php }?> 

</select>
</div>

</div>
</div>

    
    



<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Status</label>



<?php  if($pagestatus!='view'){
                ?>
<button type="submit" name="imgupload" class="btn btn-primary btn-sm ">ADD</button>
<?php } ?>
<a href="<?php  echo base_url().'Product/productlist';?>" class="btn btn-primary btn-sm">Cancel</a>

</form>
</div>
</div>

</div>
</div>
</div>
</div>
</div>




<script src="<?php echo base_url();?>assets/erpjs/add_product.js"></script>

<script>

function test(x){
var category_name= x;
jQuery.ajax({
type: "POST",
url: "<?php echo base_url();?>" + "Product/getproduct/"+category_name,
data: {},
success: function(response) {


$('#txtlocality').html(response);

}

});
//ajax se data send kroge ctroller ki kisi function pr
}


function changeFunc() {
// alert("hello");
var drpservice = document.getElementById("drpservice");
var selectedValue = drpservice.options[drpservice.selectedIndex].value;
if (selectedValue=="Rent/Lease"){
//alert("hello");
$('.categ').show();
}
else {
//alert("Error");
//$('#drpcategory').hide();
}
}

function changecat() {
//alert("hello");
var drpcategory = document.getElementById("drpcategory");
var selectedValue = drpcategory.options[drpcategory.selectedIndex].value;
if (selectedValue=="House","Apartments","PG & Roommates", "Shop-office","Guest house"){
//alert("hello");
$('#pricenum,#furnstatus,#rooms,#areasquareef').show();
$('#pricenum,#areasquareef').show();
}
else {
// alert("Error");
$('#pricenum,#furnstatus,#rooms,#areasquareef').hide();
$('#pricenum,#areasquareef').show();
}



}


</script>


