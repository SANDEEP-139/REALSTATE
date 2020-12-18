
<div class="container">
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
</div>
<div class="main-1">
<div class="login-page">
<div class="container">


<div class="col-md-9 login-right  wow fadeInRight" data-wow-delay="0.4s">
<form  id="Addpostreq" method="post"  action="<?php  echo base_url();?>Postreq/postreq/create">
<h1><a href="postyourrequirement">Post Your Requirement Form</a></h1>
<br />
<h5 style="color: green;">(If you want to sell your the property. Please <a href="<?php  echo base_url().'Postreq/postreq';?>">click here)</a></h5>
<br />
<div>


<span id="UpdatePanel1">

<span style="color: black; font-weight: bold">I want
<label>*</label></span>

<table id="chkservice" style="width:100%;">
<tr>
<td><input id="chkservice_0" type="radio" name="chkservice" value="Buy" checked="checked" /><label for="chkservice_0">Buy</label></td><td><input id="chkservice_1" type="radio" name="chkservice" value="Rent" /><label for="chkservice_1">Rent</label></td>
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
<br />
<span style="color: black; font-weight: bold">Budget</span>

<select name="drpprice" class="form-control" id="drpprice" style="border-style:Groove;">
<option value="0">Select Budget</option>
<?php  foreach($record1 as $key=>$value){
    ?>
<option  <?php if(!empty($updaterecord)){if($updaterecord['drpprice']==$value['id']){echo "selected";}}?> value= '<?php echo $value['id'];?>'>
<?php  echo $value['drpprice'];?></option>
<?php }?>
</select>
        </span>
</div>

<div>
    <br />
    <span style="color: black; font-weight: bold">Area Range(Sqfeet)</span>
    <select name="drparea" class="form-control" id="drparea" style="border-style:Groove;">
<option value="0">Select Area</option>
<?php  foreach($record2 as $key=>$value){
    ?>
    <option <?php if(!empty($updaterecord)){if($updaterecord['drparea']==$value['id']){echo "selected";}}?> value='<?php echo $value['id'];?>'>
    <?php  echo $value['drparea'];?></option>
<?php }?>

</select>
</div>
<div>
    <br />
    <span style="color: black; font-weight: bold">City<label>*</label></span>
    <select name="txtcity"  id="txtcity" class="form-control"   placeholder="Enter your city"  type="text" autocomplete="off" style="border-style:Groove;" >

<option selected="selected" value="" >Select city*</option>
<?php foreach($record as $key=>$value){


?>
<option <?php if(!empty($updaterecord)){ if($updaterecord['id']==$value['id']){echo "selected";}}?> value='<?php echo $value['id']; ?>'>
<?php  echo $value['category_name'];?></option>

<?php }?>        

</select>
    
    <span id="rdfcity" style="color:Red;display:none;">Please Enter your City</span>
</div>
<div>
    <br />
    <span style="color: black; font-weight: bold">I am
        <label>*</label></span>
    <table id="rdlplantype" style="width:100%;">
<tr>
<td><input id="rdlplantype_0" type="radio" name="rdlplantype" value="Individual" checked="checked" /><label for="rdlplantype_0">Individual</label></td><td><input id="rdlplantype_1" type="radio" name="rdlplantype" value="Agent/Broker" /><label for="rdlplantype_1">Agent/Broker</label></td>
</tr>
</table>
</div>
<div>
    <br />

    <span style="color: black; font-weight: bold">Name<label>*</label></span>
    <input type="text" name="txtname" class="form-control"  id="txtname" onkeyup="this.value = this.value.toUpperCase();" maxlength = "30" style="border-style:Groove;width:100%;" />
    <span id="rdftxtname" style="color:Red;display:none;">Please Enter your name</span>
</div>
<div>
    <br />
    <span style="color: black; font-weight: bold">Mobile Number<label>*</label></span>
    <input  type="number"  name="txtphone"  class="form-control" id="txtphone" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==9) return false;"  style="border-style:Groove;" maxlength="10"  />
    <br />
    
</div>
<div>
    <br />
    <span style="color: black; font-weight: bold">Property Description<label>*</label></span>
    <textarea name="txtdec" class="form-control" rows="10" cols="20" id="txtdec" maxlength="300" style="border-style:Groove;width:100%;">
</textarea>
</div>
<br />
<button id="btnsubmit" type="Submit" class="btn btn-primary pull-left">Submit</button>
</div>
<br><br><br>
</div>
</div>
<script>

$("#Addpostreq").validate({
rules: {
drpprice:"required",
drparea:"required",
txtcity:"required",
txtname:"required",
txtphone:"required",
txtdec:"required"


},
messages:{
drpprice:"Please enter drpprice",
drparea:"Please Select drparea",
txtcity:"PLEASE ENTER YOUR CITY",
txtname:"PLEASE ENTER YOUR NAME",
txtphone:"PLEASE ENTER YOUR MOBILE NUMBER",
txtdec:"PLEASE ENTER AD DESCRIPTION"


}

});
   






</script>
</div>