
	<!--============== Header Section End ==============-->
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
	<!--============== Page title Start ==============-->
	<div class="full-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb" class="mb-2">
					  <ol class="breadcrumb mb-0 bg-transparent p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active text-primary" aria-current="page">Contact</li>
					  </ol>
					</nav>
					<h2 id="contactti" class="text-secondary">Contact</h2>
				</div>
			</div>
		</div>
	</div>
	<!--============== Page title End ==============-->
	
	<!--============== Contact form Start ==============-->
	<div class="full-row pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7">
					<h4 class="down-line mb-5">Send Message</h4>
					<div class="form-simple mb-5">
						<form id="Addcontact" action="<?php echo base_url();?>contact/contactadd/create" method="post" novalidate="novalidate">
							<div class="form-row">
								<div class="col-md-6 mb-20">
									<label class="mb-2">Name</label>
									<input type="text" id="name" class="form-control bg-gray" name="name" 
									onkeyup="this.value = this.value.toUpperCase();"  maxlength = "30">
								</div>
								<div class="col-md-6 mb-20">
									<label class="mb-2">Email:</label>
									<input type="email" id="email" class="form-control bg-gray" name="email"  />
								</div>
								<div class="col-md-12 mb-20">
									<label class="mb-2">Subject:</label>
									<input type="text" id="subject" class="form-control bg-gray" name="subject" />
								</div>
								<div class="col-md-12 mb-20">
									<label class="mb-2">Message:</label>
									<textarea class="form-control bg-gray" id="message" name="message" rows="8" maxlength="50" /></textarea>
								</div>
								<div class="col-md-12">
									<button class="btn btn-primary" name="submit" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<h4 class="down-line mb-5">Get In Touch</h4>
					<p>Property Kona Design Agency 301 The Greenhouse, Custard Factory, London, E3 8DY..</p>
					<div class="d-flex mb-3">
						<ul>
							<li class="mb-3">
								<strong>Office Address :</strong><br>
								Level 13, 2 Elizabeth St, Melbourne, Victoria 3000 Australia
							</li>
							<li class="mb-3">
								<strong>Contact Number :</strong><br>
								+9965321564
							</li>
							<li class="mb-3">
								<strong>Email Address :</strong><br>
								info@propertycona.com
							</li>
						</ul>
					</div>
					<h5 class="mb-2">Career Info</h5>
					<p>If you’re interested in employment opportunities at Propertykona, please email us:<br> <a href="#">info@propertycona.com</a></p>
				</div>
			</div>
		</div>
<script>
$("#Addcontact").validate({
    rules: {
name:"required",
//email:"required",
subject:"required",
message:"required"


     
    },
   messages:{
name:"PLEASE ENTER YOUR NAME",
//email:"Please enter email",
subject:"PLEASE ENTER YOUR SUBJECT",
message:"PLEASE ENTER YOUR MESSAGE"


    
   }
    
  });
</script>

	</div>
	<!--============== Contact form End ==============-->
	
	