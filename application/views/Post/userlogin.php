
	
	<!--============== Signup Form Start ==============-->
	<div class="full-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 mx-auto">
					<div class="bg-white p-50 border rounded">
						<div class="form-icon-left rounded form-boder">
							<h4 class="mb-4">User Login</h4>
							<form  id="Userlogin" action="<?php  echo base_url();?>userlogin/signin" method="post">
								<div class="row">
									<div class="col-md-12 mb-3">
										<label class="mb-2">Email Address</label>
										<input type="text" name="admin_email" id="admin_email" class="form-control bg-light" value="" >
									</div>
									<div class="col-md-12 mb-3">
										<label class="mb-2">Password</label>
										<input type="password" name="password" id="password" class="form-control bg-light" value="" >
									</div>
									<div class="col-md-12 mb-3">
										<button  name="submit" type="submit" class="btn btn-primary mb-3">Login</button>
										
									</div>
									<div class="col-md-12">
										<a href="#" class="btn-link text-dark d-table py-1">Forgot Password or Username</a>
										<a href="<?php  echo  base_url();?>signup/signupadd/" class="btn-link text-dark d-table py-1"><u>Don't have account? Click here.</u></a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>


$( "#Userlogin" ).validate({
  rules: {
admin_email:"required",
password:"required"
    
  },
  messages:{
admin_email:"Please enter admin_email",
password:"Please enter password"
    }
});
</script>
	</div>
	<!--============== Signup Form End ==============-->
	
	