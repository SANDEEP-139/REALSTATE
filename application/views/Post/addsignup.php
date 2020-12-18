
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
	<!--============== Signup Form Start ==============-->
	<div class="full-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 mx-auto">
					<div class="bg-white p-50 border rounded">
						<h4 class="mb-4 down-line">Registration</h4>
						<div class="form-icon-left form-boder">
							<form  id="Usersignup" action="<?php  echo  base_url();?>signup/signupadd/create" method="post">
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<label class="mb-2">Your Name</label>
										<input type="text"  id="name" name="name" class="form-control bg-light" value="" >
									</div>
									<div class="col-md-12 mb-3">
										<label class="mb-2">Email Address</label>
										<input type="text"  name="admin_email" id="admin_email" value="" class="form-control bg-light"  >
									</div>
									<div class="col-md-12 mb-3">
										<label class="mb-2">Password</label>
										<input type="password" name="password" id="password" value="" class="form-control bg-light" value="" >
									</div>
									<div class="col-md-12 mb-3">
										<label class="mb-2">Re-enter Password</label>
										<input type="password" name="repassword" id="repassword" value="" class="form-control bg-light" value="" >
									</div>
									<div class="col-md-12 form-check mb-4">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
										<label>Accept Terms and Conditions</label>
									</div>
									<div class="col-md-12 form-check">
										<button  name="submit" type="submit" class="btn btn-primary mb-3">Sign Up Now</button>
									</div>
									<div class="col-md-12">
										<a href="#" class="btn-link text-dark">View Terms and Condition</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
$("#Usersignup").validate({
    rules: {
name:"required",
admin_email:"required",
password:"required",
repassword:"required"

    },
   messages:{
name:"Please enter name",
admin_email:"Please enter admin_email",
password:"Please enter password",
repassword:"Please enter repassword"

   }
    
  });
</script>
	</div>
	<!--============== Signup Form End ==============-->
	
