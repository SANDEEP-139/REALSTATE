
	
	<!--============== Page title Start ==============-->
	<div class="full-row">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb" class="mb-2">
					  <ol class="breadcrumb mb-0 bg-transparent p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Property</a></li>
						<li class="breadcrumb-item active text-primary" aria-current="page"><?=$property['txtadtitle']; ?></li>
					  </ol>
					</nav>
					<h2 class="text-secondary">Property list</h2>
				</div>
			</div>
		</div>
	</div>
	<!--============== Page title End ==============-->
	
	<!--============== Property Details Start ==============-->
	<div class="full-row pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
						
							<?php
							$myString= $property["uploadfile"];
							$myArray = explode(',',$myString);
							?>
					<div class="property-overview border overflow-hidden rounded bg-white mb-30">
					   
						<div class="row">
							<div class="col-md-12">
								<div id="single-property" style="width:1200px; height:600px;"> 
									<!-- Slide 1-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="<?php  echo base_url()?>uploads/<?php echo $myArray[0] ?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 2-->
									
									
									<!-- Slide 3-->
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="property-overview border summary rounded bg-white p-30 mb-30">
						<div class="row mb-4">
							<div class="col-auto">
								<span class="d-inline-block text-primary"><?=$property['txtadtitle']; ?></span>
								<h4><a class="font-600 text-secondary" href="single_property.html"></a></h4>
								<!-- <span class="mb-2 d-block"><i class="fas fa-map-marker-alt text-primary"></i> 4213 Duff Avenue South Burlington, VT </span> -->
								
							</div>
							<div class="col-auto ml-auto xs-m-0 text-right xs-text-left pb-4">
								<span class="text-primary font-large font-700 d-table ml-auto xs-m-0">INR120,5500</span>
								<span class="d-table mb-3 ml-auto xs-m-0">Fixed Amount</span>
								<span class="text-white font-mini px-2 rounded product-status ml-auto xs-m-0 py-1 bg-primary"><i class="fas fa-check"></i> Available</span>
							</div>
							<div class="col-12">
								<div class="product-offers mt-2">
									<!-- <ul class="product-offers-list">
										<li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
										<li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
										<li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
									</ul> -->
								</div>
								<div class="mt-4"> 
									<ul class="quick-meta">
										<!-- <li class="bg-secondary"><a href="#" title="Add to compare" class="text-white"><i class="flaticon-transfer flat-mini"></i></a></li>
										<li class="bg-secondary"><a href="#" title="Add wishlist" class="text-white"><i class="flaticon-like-1 flat-mini"></i></a></li>
										<li class="bg-secondary"><a href="#" title="Media share" class="text-white"><i class="flaticon-share flat-mini"></i></a></li>
										<li class="bg-secondary"><a href="#" title="Print Data" class="text-white"><i class="flaticon-printer flat-mini"></i></a></li>
										<li class="bg-secondary"><a href="#" title="Download PDF" class="text-white"><i class="fas fa-download flat-mini"></i></a></li> -->
										<li class="bg-secondary w-auto"><a href="<?php echo base_url();?>Postreq/postreq" class="px-5 text-white">Booking Now</a></li>
									</ul>
								</div>
								
								<hr>
								<div class="mt-2">
									<ul class="list-three-fold-width d-table">
										<li><b><?php  echo $property['rooms']?>:</b></li>
										<li><b><?php  echo $property['areasquareef']?>:</b>Sqft<sup>2</sup></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row row-cols-1">
							<div class="col">
								<h5 class="mb-3">Description</h5>
								<p><?php  echo $property['txtdescription'];?></p>
								<div class="short-description d-flex">
									
									
								</div>
							</div>
						</div>
					</div>
                  
					
					<div class="property-overview border rounded bg-white p-30 mb-30">
						<div class="row row-cols-1">
							<div class="col">
								<div id="comments" class="comments">
									<div class="row mb-4">
										<div class="col"><h3>80 Reviews</h3></div>
										<div class="col text-right">
											<span class="d-inline-block py-2 font-mini text-warning">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star-half-alt"></i>
											</span>
											<span class="d-inline-block py-2">
												(4.9 out of 5)
											</span>
										</div>
									</div>
									<div class="media">
									  <img src="<?php echo base_url();?>assetsss/images/user2.jpg" class="mr-3 rounded-circle" alt="...">
									  <div class="media-body">
										<div class="row mb-3">
											<div class="col-auto"><h5 class="mb-0">Lee Sipes</h5></div>
											<div class="col-auto">
												<span class="d-inline-block py-2 font-mini text-warning">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</span>
												<span class="d-inline-block py-1">
													(5 out of 5)
												</span>
											</div>
										</div>
									<div class="comments-date mb-2"><span>Posted On 21th May, 2019 - </span><a href="#">Replay</a></div>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
										<div class="media mt-4">
										  <img src="<?php echo base_url();?>assetsss/images/user4.jpg" class="mr-3 rounded-circle" alt="...">
										  <div class="media-body">
											<div class="row mb-3">
												<div class="col-auto"><h5 class="mb-0">Lee Sipes</h5></div>
											</div>
											<div class="comments-date mb-2"><span>Posted On 10th June, 2019 - </span><a href="#">Replay</a></div>
											<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
										  </div>
										</div>
									  </div>
									</div>
									<hr>
									
									<hr>
									
								</div>
							</div>
						</div>
					</div>
         
					<div class="property-overview border rounded bg-white p-30 mb-30">
						<div class="row row-cols-1">
							<div class="col">
								<h5 class="mb-4">Write A Review</h5>
								<div class="d-flex w-100 mb-5">
									<span>Your Rating:</span>
									<ul class="d-flex mx-2 text-primary font-12">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
								</div>
								<form   method="post" class="contact_message form-boder" action="<?php  echo base_url();?>user/propertyreview/create"  novalidate="novalidate">
									<div class="form-row">
										<div class="col-md-6 col-sm-6 mb-10">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Name" >
											</div>
										</div>
										<div class="col-md-6 col-sm-6 mb-10">
											<div class="form-group">
												<input  type="email"  class="form-control" id="email" name="email" placeholder="Email Address">
											</div>
										</div>
										<div class="col-md-12 col-sm-12 mb-10">
											<div class="form-group">
												<textarea class="form-control" id="message" rows="5" name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12 col-sm-6">
											<div class="form-group">
												<button  type="submit" class="btn btn-primary" id="send" value="send" >Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>	
				</div>
				
				<div class="col-lg-4">
                    <!-- Message Form -->
                    
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
             <div class="widget widget_contact bg-white border p-30 shadow-one rounded mb-30">
						<h5 class="mb-4">Listed By</h5>
						<div class="media mb-3">
							<img class="rounded-circle mr-3" src="<?php echo base_url();?>assetsss/images/user1.jpg" alt="avata">
							<div class="media-body">
								<div class="h6 mt-0">Luann McLawhorn</div>
								<span>+(81) 84 538 91231</span>
								<span>info@website.com</span>
							</div>
						</div>
						<form method="post" class="quick-search form-icon-right"   action="<?php echo base_url();?>user/propertyform/create" >
							<div class="form-row">
								<div class="col-12 mb-10">
									<div class="form-group mb-0">
										<input type="text" class="form-control" name="name" placeholder="Your Name">
									</div>
								</div>
								<div class="col-12 mb-10">
									<div class="form-group mb-0">
										<input type="number" class="form-control" name="phone" onkeyup="NumToWord(this.value,'lblnumberwords');" onkeypress="if(this.value.length==10) return false;" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-12 mb-10">
									<div class="form-group mb-0">
										<input type="email" class="form-control" name="email" placeholder="Your Email">
									</div>
								</div>
								<div class="col-12 mb-10">
									<div class="form-group mb-0">
										<textarea class="form-control" name="message" placeholder="Message" rows="10"></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group mb-0">
										<button type="submit" class="btn btn-primary w-100">Send Message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Property Search -->
					<div class="widget advance_search_widget">
						<h5 class="mb-30">Search Property</h5>
						<form class="rounded quick-search form-icon-right" action="#" method="post">
							<div class="form-row">
								<!-- <div class="col-12 mb-20">
									<div class="form-group mb-0">
										<input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
									</div>
								</div> -->
								<div class="col-12 mb-20">
									<div class="form-group mb-0">
									<select name="txtadtitle" id="txtadtitle" class="selectpicker show-tick">
									<option selected="selected" value="" >Property types</option>
										<?php
										foreach($records as $key=>$user){ 
										?>
										<option value='<?php echo $user['id'] ?>'><?php echo $user['txtadtitle'] ?></option>
										<?php
										} 
									?>
									</select>
									</div>
								</div>
								<!-- <div class="col-12 mb-20">
									<div class="form-group mb-0">
										<select name="datepick" class="selectpicker show-tick">
											<option>Property Status</option>
											<option>For Rent</option>
											<option>For Sale</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="col-12 mb-20">
									<div class="form-group mb-0">
										<input type="text" class="form-control" name="location" placeholder="Location">
										<i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
									</div>
								</div> -->
								<div class="col-12 mb-20">
									<div class="form-group mb-0">
										<button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>		
										<div id="data-range-price" class="price_range price-range-toggle w-100">
											<div class="area-filter price-filter">
												<span class="price-slider">
													<input class="filter_price" type="text" name="price" value="0;10000000" />
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 mb-20">
									<div class="form-group mb-0">
									<select name="rooms"  id="rooms"  class="selectpicker show-tick"   placeholder="Enter your rooms"  type="text" autocomplete="off" style="border-style:Groove;" >
									<option selected="selected" value="" >Select Bedrooms</option>

										<?php
										 foreach($records as $key=>$value){
										?>
									<option  value='<?php echo $value['id']; ?>'><?php  echo $value['rooms'];?></option>

                                  <?php }?>  
									</select>
									</div>
								</div>
								<!-- <div class="col-12 mb-20">
									<div class="form-group mb-0">
										<select name="datepick" class="selectpicker show-tick">
											<option>Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="col-12 mb-20">
									<div class="form-group mb-0">
										<select name="datepick" class="selectpicker show-tick">
											<option>Garage</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="col-6 mb-20">
									<div class="form-group mb-0">
										<input type="text" class="form-control" name="keyword" placeholder="Min Area">
									</div>
								</div>
								<div class="col-6 mb-20">
									<div class="form-group mb-0">
										<input type="text" class="form-control" name="keyword" placeholder="Max Area">
									</div>
								</div>
								<div class="col-12 mb-20">
									<div class="form-group mb-0">
										<button class="form-control border-0 text-left" type="button" data-toggle="collapse" data-target="#check-info" aria-expanded="false">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
									</div>
								</div> -->
								<!-- <div class="col-12">
									<div id="check-info" class="aditional-features position-static visible opacity-1 shadow-none collapse">
										<h5 class="mb-3">Aditional Options</h5>
										<ul class="row row-cols-1 custom-check-box mb-20">
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck2">
												<label class="custom-control-label" for="customCheck2">Garage Facility</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck3">
												<label class="custom-control-label" for="customCheck3">Swiming Pool</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck4">
												<label class="custom-control-label" for="customCheck4">Fire Security</label>
											</li>
											
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck5">
												<label class="custom-control-label" for="customCheck5">Fire Place Facility</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck6">
												<label class="custom-control-label" for="customCheck6">Play Ground</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck7">
												<label class="custom-control-label" for="customCheck7">Ferniture Include</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck8">
												<label class="custom-control-label" for="customCheck8">Marbel Floor</label>
											</li>
											
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck9">
												<label class="custom-control-label" for="customCheck9">Store Room</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck10">
												<label class="custom-control-label" for="customCheck10">Hight Class Door</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck11">
												<label class="custom-control-label" for="customCheck11">Floor Heating System</label>
											</li>
											<li class="col">
												<input type="checkbox" class="custom-control-input hide" id="customCheck12">
												<label class="custom-control-label" for="customCheck12">Garden Include</label>
											</li>
										</ul>
									</div>
								</div> -->
								<div class="col-12 mb-20">
									<div class="form-group mb-0">
										<button class="btn btn-primary w-100">Search</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					
					<!--============== Recent Property Widget Start ==============-->
					<div class="widget widget_recent_property">
						<h5 class="text-secondary mb-4">Recent Property</h5>
						<ul>
							
							<?php
							$result = $this->db->get_where('postpro')->result_array();
							if(!empty($result)){
							foreach($result as $user): 
							?>
							<?php
							$myString= $user["uploadfile"];
							$myArray = explode(',',$myString);
							?>
							<li> 
								<img src="<?php echo base_url();?>uploads/<?php  echo $myArray[0];?>" alt="">
								<div class="thumb-body">
									<h6 class="text-secondary hover-text-primary mb-0"><a href="property-single-1.html"><?php  echo $user['txtadtitle']?></a></h6>
									<span class="text-primary d-table py-1">INR1280<small>/mo</small></span> 
									<div class="quantity">
										<ul class="d-flex">
											<li><span><?php  echo $user['rooms']?></span></li>
											
											<li><span><?php  echo $user['areasquareef']?></span>Sqft<sup>2</sup></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					<?php
					endforeach;
					}
					?>
					</div>
					<!--============== Recent Property Widget End ==============-->
				</div>
			</div>
		</div>
	</div>
	<!--============== Property Details End ==============-->
	
	<!--============== Footer Section Start ==============-->
<div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-circle"></i></a>
    <a href="https://twitter.com/login" class="twitter"><i class="fa fa-twitter"></i></a> 
    <a href="https://9to5google.com/guides/google-plus/" class="google"><i class="fa fa-google"></i></a> 
    <a href="https://www.linkedin.com/login" class="linkedin"><i class="fa fa-linkedin"></i></a>
   
</div>
<footer class="full-row footer-default-dark bg-footer" style="padding-bottom:0px!important;">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6">
	<div class="footer-widget mb-4">
		<div class="footer-logo mb-4">
			<a href="#"><img class="logoft" src="<?php  echo base_url();?>assetsss/images/logo/logo-full-white1.jpg" alt="Image not found!" /></a>
		</div>
		<p class="fpara">PROPERTY kONA GROUP Introduces magnificent and fully loaded Residential Projects with Great locations in north India.Our very first focus is site development and delivery of commitments before time.</p>
	</div>
	<div class="footer-widget media-widget mb-4">
		<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
		<a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
		<a href="https://9to5google.com/guides/google-plus/"><i class="fab fa-google-plus-g"></i></a>
		<a href="https://in.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
	</div>
</div>
				<div class="col-lg-3 col-md-6">
	<div class="footer-widget contact-widget mb-4">
		<h3 class="widget-title mb-4">Contact Info</h3>
		<ul>
			<li class="fcontat">Property Kona Design Agency 301 The Greenhouse, Custard Factory, London, E3 8DY.</li>
			<li>+91 9965321564</li>
			<li>info@propertycona.com</li>
		</ul>
	</div>
</div>
				<div class="col-lg-3 col-md-6">
	<div class="footer-widget footer-nav mb-4">
		<h3 class="widget-title mb-4">Quick Links</h3>
		<ul>
		<li><a href="<?php echo base_url().'User/userpanel';?>">HOME</a></li>
			<li><a href="<?php echo base_url().'about/aboutsection';?>">ABOUT US</a></li>
			<li><a href="<?php  echo base_url().'properties/propertiessection';?>">PROPERTIES</a></li>
			<li><a href="<?php echo base_url().'Postpro/postadd';?>">POST PROPERTIES</a></li>
			<li><a href="<?php echo base_url().'Postreq/postreq';?>">POST REQUIREMENT</a></li>
			<li><a href="<?php echo base_url().'contact/contactadd';?>">CONTACT US</a></li>
		</ul>
	</div>
</div>
				<div class="col-lg-3 col-md-12">
	<div class="footer-widget newslatter-widget mb-4">
		<h4 class="widget-title mb-4">Appointment</h4>
		
		
		<li class="float-left"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14232.723993662697!2d80.99814679999999!3d26.89775025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1606537401398!5m2!1sen!2sin" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></li>
	</ul>
		<a href="<?php  echo base_url();?>Postreq/postreq" class="btn btn-primary w-100">Register Now</a>
</div>
</div>
</div>
</div>
</footer>
	
	<!--============== Copyright Section Start ==============-->
	<div class="copyright bg-footer text-default py-4">
<div class="container">
<div class="row">
<div class="col-md-6">
<a href="http://www.dmdsolutions.co.in/">Copyright © 2013-2019 The All rights reserved DMD Solutions</a> 
</div>
<div class="col-md-6">
	<ul class="line-menu float-right list-color-gray">
		<li class="float-left"><a href="#">Privacy & Policy </a></li>
		<li class="float-left">|</li>
		<li class="float-left">Site Map</li>
	</ul>
</div>
</div>
</div>
</div>
	<!--============== Copyright Section End ==============-->
	
	<!-- Scroll to top -->
	<a href="#" class="text-general scroll-top-vertical xs-mx-none" id="scroll">Scroll to top</a>
	<!-- End Scroll To top -->
	<!--============== Footer Section End ==============-->
	
	<!--============== Modal Start ==============-->
	<div class="overlay-dark modal fade quick-view-modal" id="quick-view">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">		
				<div class="close view-close">
				  <span aria-hidden="true">&times;</span>
				</div>
				<div class="modal-body property-block summary p-3">
					<div class="row">
						<div class="col-md-6">
							<div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
								<div class="cata position-absolute">
									<span class="sale bg-secondary text-white">For Rent</span>
									<span class="featured bg-primary text-white">Featured</span>
								</div>
								<a href="#"><img class="w-100" src="<?php echo base_url();?>assetsss/images/property/2.png" alt=""></a>
								<ul class="position-absolute quick-meta">
									<li><a href="#"><i class="flaticon-transfer flat-mini"></i></a></li>
									<li><a href="#"><i class="flaticon-like-1 flat-mini"></i></a></li>
									<li><a href="#"><i class="flaticon-share flat-mini"></i></a></li>
									<li><a href="#"><i class="flaticon-printer flat-mini"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="property_text transation py-3 pr-3">
								<span class="d-inline-block text-primary">Condos</span>
								<h5 class="modal-title mb-1" id="staticBackdropLabel"><a href="#" class="text-secondary hover-text-primary transation">Luxury Condos Infront of the street of Green Park</a></h5>
								<span class="mt-1 mb-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i> 2305 Tree Frog Lane Overlandpk, MO 66210</span>
								<a href="#" class="d-block text-light hover-text-primary font-mini mb-2">( 100 People Recommended )</a>
								<div class="d-flex">
									<span class="text-secondary font-large font-700">$5600 - $8300/<small>mo</small></span>
									<span class="text-white font-mini px-2 rounded product-status ml-5 my-1 bg-primary"><i class="fas fa-check"></i> Available</span>
								</div>
								<div class="product-offers mt-3">
									<ul class="product-offers-list">
										<li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
										<li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
										<li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
									</ul>
								</div>
								<hr>
								<!-- <div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><a href="#">Apartment</a></li>
										<li class="list-inline-item"><a href="#">Beds: 4</a></li>
										<li class="list-inline-item"><a href="#">Baths: 2</a></li>
										<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
									</ul>
								</div> -->
								<div class="quantity">
									<ul class="d-flex">
										<li><span>Rooms:</span> 5</li>
										<li><span>Beds:</span> 3</li>
										<li><span>Bathrooms:</span> 2</li>
										<li><span>Garage:</span> 1</li>
										<li><span>Area:</span> 1100 Sqft</li>
									</ul>
								</div>
								<h5 class="text-secondary my-3">Description</h5>
								<p>Bibendum purus aenean mus aenean eu interdum nonummy ipsum ad consequat. Dui eros donec faucibus convallis tempus rutrum id donec mus hymenaeos placerat congue curae mauris turpis gravida viverra consequat consequat gravida luctus.</p>
								<div class="short-description d-flex">
									<span class="mr-4"><b>Highlights:</b></span>
									<div class="short-description">
										<ul class="list-style-tick">
											<li>Regular Fit.</li>
											<li>Full sleeves.</li>
											<li>Machine wash, tumble dry.</li>
										</ul>
									</div>
								</div>
								<div class="d-flex align-items-center post-meta mt-2 py-3 border-top">
									<div class="agent">
										<a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle mr-2" src="<?php echo base_url();?>assetsss/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
									</div>
									<div class="post-date ml-auto"><span>2 Month Ago</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--============== Modal End ==============-->
</div>

<!-- Javascript Files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="<?php echo base_url();?>assetsss/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/greensock.js"></script>
<script src="<?php echo base_url();?>assetsss/js/layerslider.transitions.js"></script>
<script src="<?php echo base_url();?>assetsss/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="<?php echo base_url();?>assetsss/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/piechart/chart.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/owl.js"></script>
<script src="<?php echo base_url();?>assetsss/js/range/tmpl.js"></script> 
<script src="<?php echo base_url();?>assetsss/js/range/jquery.dependClass.js"></script> 
<script src="<?php echo base_url();?>assetsss/js/range/draggable.js"></script> 
<script src="<?php echo base_url();?>assetsss/js/range/jquery.slider.js"></script>
<script src="<?php echo base_url();?>assetsss/js/wow.js"></script>
<script src="<?php echo base_url();?>assetsss/js/mixitup.min.js"></script>
<script src="<?php echo base_url();?>assetsss/js/paraxify.js"></script>
<script src="<?php echo base_url();?>assetsss/js/custom.js"></script>
<script>
$('#single-property').layerSlider({
	sliderVersion: '6.5.0b2',
	type: 'popup',
	pauseOnHover: 'disabled',
	skin: 'photogallery',
	globalBGSize: 'cover',
	navStartStop: false,
	hoverBottomNav: true,
	showCircleTimer: false,
	thumbnailNavigation: 'always',
	tnContainerWidth: '100%',
	tnHeight: 70,
	popupShowOnTimeout: 1,
	popupShowOnce: false,
	popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
	popupResetOnClose: 'disabled',
	popupDistanceLeft: 20,
	popupDistanceRight: 20,
	popupDistanceTop: 20,
	popupDistanceBottom: 20,
	popupDurationIn: 750,
	popupDelayIn: 500,
	popupTransitionIn: 'scalefromtop',
	popupTransitionOut: 'scaletobottom',
	skinsPath: '<?php echo base_url();?>assetsss/skins/'
});

// Statistic
// if(document.querySelector('#mychart') !== null){
// 	var ctx = document.getElementById("mychart").getContext('2d');
	
// 	// Data with datasets options
// 	var data = {
// 		type: 'line',
// 		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
// 		datasets: [
// 			{
// 				label: 'Growth',
// 				fill: true,
// 				backgroundColor: "#def7e0",
// 				borderColor: "#17c788",
// 				data: [0, 150, 450, 400, 480, 630, 580, 500, 530, 400, 430, 600, 400],
// 			}
// 		]
// 	}
	
// 	// Chart declaration with some options:
// 	var mychart = new Chart(ctx, {
// 		type: 'line',
// 		data: data,
// 	});
// }

// //Doughnut and Pie
// if(document.querySelector('#mychart-2') !== null){
// 	var ctx2 = document.getElementById("mychart-2").getContext('2d');
	
// 	// Data with datasets options
// 	var data2 = {
// 		type: 'doughnut',
// 		labels: [ 'Desktop', 'Tablet', 'Mobile' ],
// 		datasets: [{
// 			data: [10, 20, 30],
// 			backgroundColor: ['rgb(255, 99, 132)','rgb(54, 162, 235)','rgb(255, 205, 86)']
// 		}],

// 	};
	
// 	// For a pie chart
// 	var myPieChart = new Chart(ctx2, {
// 		type: 'pie',
// 		data: data2,
// 	});
// 	// And for a doughnut chart
// 	var myDoughnutChart = new Chart(ctx2, {
// 		type: 'doughnut',
// 		data: data2,
// 	});
// }

</script>
</body>

<!-- Mirrored from unicoderbd.com/theme/html/uniland-new/property-single-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 09:43:42 GMT -->
</html>