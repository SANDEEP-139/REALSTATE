
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

        <div class="container">
        <div class="col-md-9 ">
        <form  method="post" id="mainstore" action="<?php  echo base_url();?>Postpro/postadd/create" enctype='multipart/form-data'>

        <h2 style="font-family: 'Times New Roman'; color: black;">Post your property for Sale / Rent</h2>

        <span style="color:black;"><b>Title</b></span>
        <input name="txtadtitle" id="txtadtitle" class="form-control" type="text" maxlength="100"  placeholder="Enter your title" style="border-style:Groove;" /><br>



        <span style="color: black;"><b>Service</b></span>
        <select name="drpservice"  id="drpservice" class="form-control" onchange="changeFunc();" id="drpservice" type="text" style="border-style:Groove;">
        <option selected="selected" value="0">Select Service</option>
        <option  value="Rent/Lease">Rent/Lease</option>
        <option value="Sell">Sell</option>
        </select>


        <span class="ar-none ar-font categ">Please Select Category</span>
        <select name="drpcategory" class="form-control ar-none categ" onchange="changecat();"  id="drpcategory" type="text" style="border-style:Groove;" >
        <option selected="selected" value="0" >Select Category</option>
        <option  value="House">House</option>
        <option value="Apartments">Apartments</option>
        <option  value="PG & Roommates">PG & Roommates</option>
        <option value="Shop-office">Shop-office</option>
        <option value="Guest-house">Guest-house</option>
        </select>


        <div class="container">

        <div class="row">
        <div class="col-sm-6 " id="pricenum" style="display:none!important;">
        <label style=" color:black; font-weight:bold!important;">PRICE*</label>
        <input id="txtPriceNew" name="pricephone" type="number" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==9) return false;" class="form-control"  placeholder="Eg:- 4000000"  style="border-style:Groove; " />
        </div>
        <div class="col-sm-6 " id="areasquareef" style="display:none;">
        <label style=" color:black; font-weight: bold!important;">AREA (SQUAREFEET)*</label>
        <input id="txtAreasqu" name="areasquareef" type="number" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==9) return false;" class="form-control"  placeholder="Eg:- 3000"  style="border-style:Groove; " />
        </div>





        <div class="col-sm-6 " id="furnstatus" style="display:none;">
        <label style="color:black;font-weight: bold!important;">FURNISHED STATUS*</label>
        <select name="furnstatus"  id="txtfurnstatus" class="form-control"    placeholder="Enter your Furnished status"  type="text"  style="border-style:Groove;" >
            <option selected="selected" value="0">Please Select</option>
            <option value="Furnished">Furnished</option>
            <option value="Unfurnished">Unfurnished</option>
            <option value="Semi-Furnished">Semi-Furnished</option>

        </select>
        </div>
    <div class="col-sm-6 " id="rooms" style="display:none;">
    <label style=" color:black; font-weight: bold!important;">ROOMS*</label>
    <select name="rooms"  id="txtrooms"  class="form-control" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==9) return false;"  placeholder="Enter your Rooms"  type="text" style="border-style:Groove;" >

    <option selected="selected" value="0">Please Select</option>
        <option value="1 room">1 room</option>
        <option value="2 rooms">2 rooms</option>
        <option value="3 rooms">3 rooms</option>
        <option value="4 and more">4 and more</option>
    </select>
    </div>
    </div>
    </div>


    <span  style="color: black;"><label><b>Description</b>*</label></span>
    <textarea name="txtdescription" class="form-control"  rows="10" cols="20" maxlength="300" id="txtdescription" placeholder="Enter your Description" style="border-style:Groove; ">
    </textarea>


    <span style="color: black; font-weight: bold;">Published By<label>*</label></span>
    <select name="ddlPublished" class="form-control" id="ddlPublished" type="text" style="border-style:Groove;">
    <option value="0">Select Published By</option>
    <option value="Owner">Owner</option>
    <option value="Property Dealer">Property Dealer</option>
    <option value="Builder">Builder</option>

    </select>


    <span style="color: black; font-weight: bold; margin-top: 50px">Name<label>*</label></span>
    <input type="text" name="txtname"  class="form-control" id="txtname"  maxlength = "30" placeholder="Enter your name" style=" border-style:Groove;" />




    <span id="phone" style=" color: black; font-weight:bold;">Mobile number<label>*</label></span>
    <input  type="number" name="txtphone"  class="form-control" id="txtphone" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==10) return false;" placeholder="Enter your mobile number" style="border-style:Groove;" />
    <!--  min="-9999" maxlength = "10" 
    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
    -->


    <span style="color: black; font-weight: bold;">Email<label>*</label></span>
    <input  type="email" name="email" class="form-control" id="emailid" data-validation-regexp ="^([a-z]+)$" maxlength="50"  placeholder="Enter your email"
    style="border-style:Groove;" />



    <span style="color: black; font-weight: bold;">City<label>*</label></span>
    <select name="txtcity"  id="txtcity" class="form-control"  onchange="test(this.value);" placeholder="Enter your city"  type="text" autocomplete="off" style="border-style:Groove;" >

    <option selected="selected" value="" >Select city*</option>
    <?php foreach($record as $key=>$value){


    ?>
    <option <?php if(!empty($updaterecord)){ if($updaterecord['id']==$value['id']){echo "selected";}}?> value='<?php echo $value['id']; ?>'>
    <?php  echo $value['category_name'];?></option>

    <?php }?>        

    </select>
                                     
    <span style="color: black; font-weight: bold;">Locality</span>
    <select name="txtlocality"  id="txtlocality" class="form-control"  placeholder="Enter your city"  type="text" autocomplete="off" style="border-style:Groove;" >
    <option selected="selected" value="" >Select Locality*</option>
    <?php foreach ($record3 as $key=>$value){

    ?>

    <option <?php if(!empty($updaterecord)){if($updaterecord['id']==$value['id']){echo "selected";}} ?> value='<?php  echo $value['id'];?>'>
    <?php  echo $value['subcategory_name'];?></option> <br />

    <?php }?> 

    </select>


    <div id="content" >
    <!-- Example 2 -->
    <input type="hidden" class="" id="imgupload" name="imgupload[]"  value="<?php  echo $updaterecord['uploadfile'];?>">
    <input type="file" name="imgupload[]" id="filer_input"  multiple="multiple" >
    
    <!-- end of Example 2 -->

    </div>

    <!-- recall name imagesubmit -->
    <p id="msg"></p>
            <!-- <input type="file" id="multiFiles" name="files[]" multiple="multiple"/> -->
            <!-- <button id="upload">Upload</button> -->
            
            <button  type="button" name="imgupload"  onclick="chekValidation()"   id="btnsubmit" class="btn btn-primary pull-left">Submit</button><br><br>
                

            
                </form>  
                
            </div>
        </div>
                
        </div>                         
    </div>
</div>

<br>


<script type="text/javascript">
   function deleteimage(){
       alert("hello");
   }
</script>
<script>
function changeFunc() {
// alert("hello");
var drpservice = document.getElementById("drpservice");
var selectedValue = drpservice.options[drpservice.selectedIndex].value;
if (selectedValue=="Rent/Lease"){
//alert("hello");
$('.categ').show();
}
else {
$('.categ').show();
}
}

function changecat() {
//alert("hello");
//debugger;
var drpcategory = document.getElementById("drpcategory");
var selectedValue = drpcategory.options[drpcategory.selectedIndex].value;
if (selectedValue=="House"){
//alert("hello");
$('#pricenum,#furnstatus,#rooms,#areasquareef').show();
}

else if(selectedValue=="Shop-office"){
$('#pricenum,#furnstatus,#rooms,#areasquareef').hide();
$('#pricenum,#areasquareef').show();

}
if (selectedValue=="Apartments"){
//alert("hello");
$('#pricenum,#furnstatus,#rooms,#areasquareef').show();
}
else if(selectedValue=="Guest-house"){
	$('#pricenum,#furnstatus,#rooms,#areasquareef').hide();
    $('#pricenum,#furnstatus').show();
}
if (selectedValue=="PG & Roommates") {
	$('#pricenum,#furnstatus,#rooms,#areasquareef').show();
}

}


function chekValidation(){
    //alert();
var title=$("#txtadtitle").val();
    
var drpservice=$("#drpservice").val();
   
var drpcategory=$("#drpcategory").val();
 
   
	if(title==""){
      $("#txtadtitle").css("border", "1px solid red");
      $("#txtadtitle").focus();
      return false;
	}
	else{
       $("#txtadtitle").css("border", "1px solid black");
      
	}


if(drpservice=="0"){
$("#drpservice").css("border","1px solid red");
$("#drpservice").focus();
return false;
}
else{
$("#drpservice").css("border","1px solid black");
}


if(drpcategory=="0"){
$("#drpcategory").css("border","1px solid red");
$("#drpcategory").focus();
return false;
}
else{
	$("#drpcategory").css("border","1px solid black");
}



//debugger
            if (drpcategory=="Shop-office")
             {
                    //debugger
                if ($("#txtPriceNew").val()=="") {
                // debugger;
                        $("#txtPriceNew").css("border","1px solid red");
                        $("#txtPriceNew").css("border","1px solid red");
                        $("#txtPriceNew").focus();
                        //$().focus();
                        return false;
                    }
                    else {
                        $("#txtPriceNew").css("border","1px solid black");
                        
                    }


                if($("#txtAreasqu").val()==""){
                    $("#txtAreasqu").css("border", "1px solid red");
                    $("#txtAreasqu").css("border","1px solid red");
                    $("#txtAreasqu").focus();
                    return false;
                }
                else{
                    $("#txtAreasqu").css("border", "1px solid black");
                }
            }
          if (drpcategory=="Guest-house")
            {
                //debugger
             if ($("#txtPriceNew").val()=="") {
               // debugger;
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").focus();
                    //$().focus();
                    return false;
                }
                else {
                    $("#txtPriceNew").css("border","1px solid black");
                    
                }


               if($("#txtfurnstatus").val()=="0"){
                $("#txtfurnstatus").css("border", "1px solid red");
                $("#txtfurnstatus").css("border","1px solid red");
                $("#txtfurnstatus").focus();
                return false;
               }
               else{
                $("#txtfurnstatus").css("border", "1px solid black");
               }
         }
          if (drpcategory=="Apartments")
            {
                //debugger
             if ($("#txtPriceNew").val()=="") {
               // debugger;
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").focus();
                    //$().focus();
                    return false;
                }
                else {
                    $("#txtPriceNew").css("border","1px solid black");
                    
                }

               if($("#txtAreasqu").val()==""){
                $("#txtAreasqu").css("border", "1px solid red");
                $("#txtAreasqu").css("border","1px solid red");
                $("#txtAreasqu").focus();
                return false;
               }
               else{
                $("#txtAreasqu").css("border", "1px solid black");
               }


               if($("#txtfurnstatus").val()=="0"){
                $("#txtfurnstatus").css("border", "1px solid red");
                $("#txtfurnstatus").css("border","1px solid red");
                $("#txtfurnstatus").focus();
                return false;
               }
               else{
                $("#txtfurnstatus").css("border", "1px solid black");
               }
               if($("#txtrooms").val()=="0"){
                $("#txtrooms").css("border", "1px solid red");
                $("#txtrooms").css("border","1px solid red");
                $("#txtrooms").focus();
                return false;
               }
               else{
                $("#txtrooms").css("border", "1px solid black");
               }
         }
         if (drpcategory=="House")
            {
                //debugger
             if ($("#txtPriceNew").val()=="") {
               // debugger;
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").focus();
                    //$().focus();
                    return false;
                }
                else {
                    $("#txtPriceNew").css("border","1px solid black");
                    
                }

               if($("#txtAreasqu").val()==""){
                $("#txtAreasqu").css("border", "1px solid red");
                $("#txtAreasqu").css("border","1px solid red");
                $("#txtAreasqu").focus();
                return false;
               }
               else{
                $("#txtAreasqu").css("border", "1px solid black");
               }


               if($("#txtfurnstatus").val()=="0"){
                $("#txtfurnstatus").css("border", "1px solid red");
                $("#txtfurnstatus").css("border","1px solid red");
                $("#txtfurnstatus").focus();
                return false;
               }
               else{
                $("#txtfurnstatus").css("border", "1px solid black");
               }
               if($("#txtrooms").val()=="0"){
                $("#txtrooms").css("border", "1px solid red");
                $("#txtrooms").css("border","1px solid red");
                $("#txtrooms").focus();
                return false;
               }
               else{
                $("#txtrooms").css("border", "1px solid black");
               }
         }
          if (drpcategory=="House")
            {
                //debugger
             if ($("#txtPriceNew").val()=="") {
               // debugger;
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").focus();
                    //$().focus();
                    return false;
                }
                else {
                    $("#txtPriceNew").css("border","1px solid black");
                    
                }

               if($("#txtAreasqu").val()==""){
                $("#txtAreasqu").css("border", "1px solid red");
                $("#txtAreasqu").css("border","1px solid red");
                $("#txtAreasqu").focus();
                return false;
               }
               else{
                $("#txtAreasqu").css("border", "1px solid black");
               }


               if($("#txtfurnstatus").val()=="0"){
                $("#txtfurnstatus").css("border", "1px solid red");
                $("#txtfurnstatus").css("border","1px solid red");
                $("#txtfurnstatus").focus();
                return false;
               }
               else{
                $("#txtfurnstatus").css("border", "1px solid black");
               }
               if($("#txtrooms").val()=="0"){
                $("#txtrooms").css("border", "1px solid red");
                $("#txtrooms").css("border","1px solid red");
                $("#txtrooms").focus();
                return false;
               }
               else{
                $("#txtrooms").css("border", "1px solid black");
               }
         }
         if (drpcategory=="PG & Roommates")
            {
                //debugger
             if ($("#txtPriceNew").val()=="") {
               // debugger;
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").css("border","1px solid red");
                    $("#txtPriceNew").focus();
                    //$().focus();
                    return false;
                }
                else {
                    $("#txtPriceNew").css("border","1px solid black");
                    
                }

               if($("#txtAreasqu").val()==""){
                $("#txtAreasqu").css("border", "1px solid red");
                $("#txtAreasqu").css("border","1px solid red");
                $("#txtAreasqu").focus();
                return false;
               }
               else{
                $("#txtAreasqu").css("border", "1px solid black");
               }


               if($("#txtfurnstatus").val()=="0"){
                $("#txtfurnstatus").css("border", "1px solid red");
                $("#txtfurnstatus").css("border","1px solid red");
                $("#txtfurnstatus").focus();
                return false;
               }
               else{
                $("#txtfurnstatus").css("border", "1px solid black");
               }
               if($("#txtrooms").val()=="0"){
                $("#txtrooms").css("border", "1px solid red");
                $("#txtrooms").css("border","1px solid red");
                $("#txtrooms").focus();
                return false;
               }
               else{
                $("#txtrooms").css("border", "1px solid black");
               }
         }
         
         
          
             

    if($("#txtdescription").val()==""){
        //debugger;
        $("#txtdescription").css("border","1px solid red");
        $("#txtdescription").focus();
        return false;
    }
    else{
        $("#txtdescription").css("border","1px solid black");
    }
if($("#ddlPublished").val()=="0"){
    $("#ddlPublished").css("border", "1px solid red");
    $("#ddlPublished").focus();
    return false;
}
else{
    $("#ddlPublished").css("border", "1px solid black");
}
if($("#txtname").val()==""){
    $("#txtname").css("border","1px solid red");
    $("#txtname").focus();
    return false;

}
else{
    $("#txtname").css("border", "1px solid black");
}

if($("#txtphone").val()==""){
    $("#txtphone").css("border", "1px solid red");
    $("#txtphone").focus();
    return false;
}
else{
    $("#txtphone").css("border", "1px solid black");
}
if($("#emailid").val()==""){
  //alert(($("#emailid").val()==""));
  //debugger;
    $("#emailid").css("border", "1px solid red");
    $("#emailid").focus();
    return false;
}
else{
    $("#emailid").css("border", "1px solid black");
}
if($("#txtcity").val()==""){
 // alert(($("#txtcity").val()==""));
  //debugger;
    $("#txtcity").css("border", "1px solid red");
    $("#txtcity").focus();
    return false;
}
else{
    $("#txtcity").css("border", "1px solid black");
}
if($("#txtlocality").val()==""){
  //alert(($("#txtlocality").val()==""));
 // debugger;
    $("#txtlocality").css("border", "1px solid red");
    $("#txtlocality").focus();
    return false;
}
else{
    $("#txtlocality").css("border", "1px solid black");
}

if($("input[name=imgupload]").val()==""){
   
   $("input[name=imgupload]").css("border", "1px solid red");
   $("input[name=imgupload]").focus();

    return false;
}
else{
    //alert("hello");
    $("input[name=imgupload]").css("border", "1px solid black");
     $("#btnsubmit").prop("type", "Submit");
}

}

</script>

<script>
function test(x){
var category_name= x;
jQuery.ajax({
type: "POST",
url: "<?php echo base_url();?>" + "Postpro/getproduct/"+category_name,
data: {},
success: function(response) {


$('#txtlocality').html(response);

}

});
//ajax se data send kroge ctroller ki kisi function pr
}

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
function storeupdate(){
$.ajax({
  type:"POST",
  url:"<?php echo base_url(); ?>updatestore",
  data:$("#mainstore").serialize(),
  success: function(response){
    var data = new FormData();
    input = document.getElementById('file');
      for(var i = 0; i < input.files.length; i++)
      {
        data.append('uploadfile[]', document.getElementById('file').files[i]);
      }
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>postadd',
        cache: false,
        contentType: false,
        processData: false,
        data : data,
        success: function(result){
            console.log(result);
        },
        error: function(err){
            console.log(err);
        }
    });
    swal('Successful!', 'Data has been saved!', 'success');
    //window.location.reload();
  },
  error: function() {
    swal("Oops", "We couldn't connect to the server!", "error");
  }
 });
 return false;
 };

</script>
       

