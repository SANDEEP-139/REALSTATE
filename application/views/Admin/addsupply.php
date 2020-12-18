
<?php
//error_reporting(0);
if($updaterecord){
$action='update';
}else{
$action='create';
}
?>
<style>
.error{
color: red;
}
</style>
<div id="content">
<div class="row mb-4">
<div class="col-12 mb-4 mb-xl-0">

</div>
<div class="col-12 col-sm-12">
<div class="row">
<div class="col-12 col-md-12 mb-4">
<div class="card redial-border-light redial-shadow">
<div class="card-body" style="overflow: visible;">
<form  id="Addsupplier" action="<?php  echo base_url();?>Product/supplier_management/<?php  echo $action;?>" method="post">


<span style="color: black; font-weight: bold">I want
<label>*</label></span>

<table id="chkservice" style="width:100%;">
<tr>
<td><input id="chkservice_0" type="radio" name="chkservice" value="Buy" checked="checked" /><label for="chkservice_0">Buy</label></td>
<td><input id="chkservice_1" type="radio" name="chkservice" value="Rent" /><label for="chkservice_1">Rent</label></td>
</tr>
</table>




<br />
<span style="color: black; font-weight: bold">Property Type<label>*</label></span>
<table id="chkcatergory" style="width:100%;">
<tr>
<td><input id="chkcatergory_0" type="checkbox" name="chkcatergory$0" checked="checked" value="House" /><label for="chkcatergory_0">House</label></td><td><input id="chkcatergory_1" type="checkbox" name="chkcatergory$1" value="Apartments" /><label for="chkcatergory_1">Apartments</label></td><td><input id="chkcatergory_2" type="checkbox" name="chkcatergory$2" value="Land&amp;Plots" /><label for="chkcatergory_2">Land&Plots</label></td>
</tr><tr>
<td><input id="chkcatergory_3" type="checkbox" name="chkcatergory$3" value="PG &amp; Roommates" /><label for="chkcatergory_3">PG & Roommates</label></td><td><input id="chkcatergory_4" type="checkbox" name="chkcatergory$4" value="Guest house" /><label for="chkcatergory_4">Guest house</label></td><td><input id="chkcatergory_5" type="checkbox" name="chkcatergory$5" value="Shop-office" /><label for="chkcatergory_5">Shop-office</label></td>
</tr>
</table>
<div class="row">

<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" >Budget</label>
<select name="drpprice" id="drpprice" class="form-control" style="border-style:Groove;">
	<option value="0">Select Budget</option>
	<option value="10-20 Lac">10-20 Lac</option>
	<option value="20-30 Lac">20-30 Lac</option>
	<option value="30-40 Lac">30-40 Lac</option>
	<option value="40-50 Lac">40-50 Lac</option>
	<option value="50 -60 Lac">50 -60 Lac</option>
	<option value="60 -70 Lac">60 -70 Lac</option>
	<option value="80 -90 Lac">80 -90 Lac</option>
	<option value="90 -1 Cr">90 -1 Cr</option>
	
</select>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" >Area Range(Sqfeet)</label>
<select name="drparea" id="drparea" class="form-control" style="border-style:Groove;">
	<option value="0">Select Area</option>
	<option value="0 to 500">0 to 500</option>
	<option value="500 to 1000">500 to 1000</option>
	<option value="1000 to 2000">1000 to 2000</option>
	<option value="2000 to 3000">2000 to 3000</option>
	<option value="3000 to 5000">3000 to 5000</option>
	<option value="5000 to max">5000 to max</option>

</select>
</div>
</div>

</div>

<div>
<br />
<span style="color: black; font-weight: bold">I am
<label>*</label></span>
<table id="rdlplantype" style="width:100%;">
<tr>
<td><input id="rdlplantype_0" type="radio" name="rdlplantype" value="Individual" checked="checked" /><label for="rdlplantype_0">Individual</label></td>
<td><input id="rdlplantype_1" type="radio" name="rdlplantype" value="Agent/Broker" /><label for="rdlplantype_1">Agent/Broker</label></td>
</tr>
</table>
</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Name*</label>
<input type="hidden" name="id" value="<?php  echo $updaterecord['id'];?>">
<input onkeydown = "return Check(this,event)" id="name" type="text" name="txtname" value="<?php  echo $updaterecord['txtname'];?>" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Mobile Number*</label>
<input onkeydown = "return Check(this,event)" type="number"  name="txtphone" value="<?php  echo $updaterecord['txtphone'];?>" class="form-control">
</div>
<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Property Description*</label>
<input onkeydown = "return Check(this,event)"type="text" name="txtdec" value="<?php  echo $updaterecord['txtdec'];?>" class="form-control">
</div>


</div>
<div class="col-md-6 col-sm-6 col-xs-12">

<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">City*</label>
<input onkeydown = "return Check(this,event)" type="text" name="txtcity" value="<?php  echo $updaterecord['txtcity'];?>" class="form-control">
</div>


<div class="form-group">
<label class="redial-font-weight-600" style="margin-bottom: 10px;">Status</label>


<?php 
if($action=='update'){
?>
<select  name="status" class="form-control" id='k'>
<option value="Active" <?php if($updaterecord['status']=='Active'){echo "selected";} ?>>Active</option>
<option value="Inactive" <?php if($updaterecord['status']=='Inactive'){echo "selected";} ?>>Inactive</option>

</select>
<?php }else{?>



<select  name="status" class="form-control" id='p'>
<option value="Active" selected="selectd">Active</option>
<option value="Inactive">Inactive</option>

</select>
<?php }?>

</div>
</div>
</div>





<button type="submit" class="btn btn-primary btn-sm ">ADD</button>
<a href="<?php  echo base_url().'Product/supplierlist';?>" class="btn btn-primary btn-sm">Cancel</a>

</form>


</div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url();?>assets/erpjs/add_supplier.js"></script>
</div>
</div>
