 


<!--============== Slider Area Start ==============-->


<div class="full-row p-0 overflow-hidden">
     
    <div id="slider" class="overflow-hidden" style="width:1200px; height:780px; margin:0 auto;margin-bottom: 0px;">

               <!-- Slide 1-->
                <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
                    <img width="1920" height="1080" src="<?php  echo base_url();?>assetsss/images/slider/11.png" class="ls-bg wow  zoomIn animated" alt="" />
                    <div style="width:740px; height:360px; background:rgba(0, 0, 0, 0.8); top:50%; left:50%;" class="ls-l ls-hide-phone" data-ls="scalexin:0; durationout:400; scalexout:0; scaleyout:0; parallaxlevel:0;"></div>
                    <p style="font-size:30px; font-weight:700; top:260px; left:50%; font-family: sans-serif;" class="ls-l ls-hide-phone text-primary " data-ls="offsetyin:100%; durationin:900; delayin:100; clipin:0 0 100% 0; durationout:400; parallaxlevel:0; "> BEST PROPERTYKONA IN LUCKNOW</p>
                    <p style="top:325px; left:280px; text-align:center; font-weight:400; font-family: sans-serif; text-decoration:none; width:650px; font-size:16px; color:#ffffff; line-height:30px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="showinfo:1; durationin:800; delayin:100; clipin:0 0 100% 0; fadein:false; texttransitionin:true; texttypein:lines_asc; textshiftin:30; textoffsetyin:-20; textstartatin:transitioninstart + 0;">

                    We Focus on Premium Development Across India and Finding Best Plots. Propertykona is  Best Real  Estate  Company in Lucknow . We Offer Genuine Rates and Provide you  Plots.</p>
                    <a style="" class="ls-l ls-hide-phone" href="<?php  echo base_url().'properties/propertiessection';?>" target="_self" data-ls="offsetyin:40; delayin:450; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:darkgreen; hovercolor:#444444;">
                    <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-size:14px; font-family: 'Montserrat', sans-serif; line-height:30px; top:460px; left:50%; border-top:2px solid darkgreen; border-right:2px solid darkgreen; border-bottom:2px solid darkgreen; border-left:2px solid darkgreen; color:#ffffff; border-radius:2px; padding-top:10px; padding-bottom:10px; background:darkgreen; white-space:normal;" class="">SEARCH PROPERTY</p>
                    </a>

                </div>


               <!-- Slide 2-->
                    <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.2;">
                        <img width="1920" height="1080" src="<?php  echo base_url();?>assetsss/images/slider/13.png" class="ls-bg wow  zoomIn animated" alt="" />
                        <div style="width:740px; height:360px; background:rgba(0, 0, 0, .8); top:50%; left:50%;" class="ls-l ls-hide-phone" data-ls="scalexin:0; durationout:400; scalexout:0; scaleyout:0; parallaxlevel:0;"></div>
                        <p style="font-size:30px; font-weight:700; top:260px; left:50%; font-family: 'Montserrat', sans-serif;" class="ls-l ls-hide-phone text-primary" data-ls="offsetyin:100%; durationin:900; delayin:100; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">WE BETTER QUALITY</p>
                        <p style="top:325px; left:280px; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:16px; color:#ffffff; line-height:30px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="showinfo:1; durationin:800; delayin:100; clipin:0 0 100% 0; fadein:false; texttransitionin:true; texttypein:lines_asc; textshiftin:30; textoffsetyin:-20; textstartatin:transitioninstart + 0;">
                            Our Team Members Strive to Ensure Quality in the Areas of Design, Project management, Execution and Infrastructure Development. We Aim to build Inspirational Development.</p>
                            <a style="" class="ls-l ls-hide-phone" href="<?php echo base_url().'contact/contactadd';?>" target="_self" data-ls="offsetyin:40; delayin:450; clipin:0 0 100% 0; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:darkgreen; hovercolor:#444444;">
                            <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:35px; padding-left:35px; font-size:14px; font-family: 'Montserrat', sans-serif; line-height:30px; top:460px; left:50%; border-top:2px solid darkgreen; border-right:2px solid darkgreen; border-bottom:2px solid darkgreen; border-left:2px solid darkgreen; color:#ffffff; border-radius:2px; padding-top:10px; padding-bottom:10px; background:darkgreen; white-space:normal;" class="">CONTACT US</p>
                            </a>     
                    </div>
     </div>

</div>



<!--============== Slider Area End ==============-->

   

<!--============== Property Search Form Start ==============-->
<div class="full-row p-0">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <form class="bg-white rounded shadow-sm quick-search px-5 py-4 form-icon-right position-relative" action="#" method="post">
        <div class="form-row mt-20">
        <div class="col-md-4 col-lg-2 mb-20">
        <div class="form-group mb-0">
        <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
        </div>
       </div>
        <div class="col-md-4 col-lg-2 mb-20">
        <div class="form-group mb-0">
        <select name="txtadtitle" id="txtadtitle" class="selectpicker show-tick">
        <option selected="selected" value="" >Property types</option>
        <?php
        foreach($record as $key=>$value){

        ?>
        <option value='<?php  echo $value['id']?>'><?php  echo $value['txtadtitle']?></option>
        <?php }?>
        </select>
        </div>
        </div>
        <div class="col-md-4 col-lg-2 mb-20">
            <div class="form-group mb-0">
            <input type="text" class="form-control" name="location" placeholder="Location">
            <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
            </div>
        </div>
        <div class="col-md-4 col-lg-2 mb-20">
        <div class="form-group mb-0">
        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
        <!-- Price Range -->
        <div id="data-range-price" class="price_range price-range-toggle">
        <div class="area-filter price-filter">
        <span class="price-slider">
        <input class="filter_price" type="text" name="pricephone" value="0;10000000" />

        </span>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-lg-2 mb-20">
        <div class="form-group mb-0">
        <!-- Advance Feature button -->
        <button class="form-control border-0 text-left toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
        </div>
        </div>
        <div class="col-md-4 col-lg-2 mb-20">
        <div class="form-group mb-0">
        <button class="btn btn-primary w-100">Search</button>
        </div>
        </div>
<!-- Advance Features -->
        <div id="aditional-check" class="aditional-features p-5">
        <h5 class="mb-3">Advance Options</h5>
        <div class="row row-cols-1 row-cols-md-4">
        <div class="col-md-4 mb-20">
        <div class="form-group mb-0">
        <select name="rooms" id="rooms" class="selectpicker show-tick">
        <option selected="selected" value="">Bedrooms</option>
        <?php
        foreach($record as $key=>$value){ 
        ?>

        <option value='<?php  echo $value['id']?>'><?php  echo $value['rooms']?></option>
        <?php }?>
        </select>
        </div>
        </div>
        <div class="col-md-4 mb-20">
        <div class="form-group mb-0">
        <select name="rooms" id="rooms" class="selectpicker show-tick">
        <option selected="selected" value="">Bathrooms</option>
        <?php
        foreach($record as $key=>$value){ 
        ?>
        <option value='<?php  echo $value['rooms']?>'><?php  echo $value['rooms']?></option>
        <?php
        } 
        ?>
        </select>
        </div>
        </div>
    <div class="col-md-4 mb-20">
    <div class="form-group mb-0">
    <input type="text" class="form-control" name="keyword" placeholder="Min Area">
    </div>
    </div>
    <div class="col-md-4 mb-20">
    <div class="form-group mb-0">
    <input type="text" class="form-control" name="keyword" placeholder="Max Area">
    </div>
    </div>
    </div>



    <h5 class="mb-3">Aditional Options</h5>
    <ul class="row row-cols-1 row-cols-md-4 custom-check-box mb-4">
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
    </div>
    </form>
    </div>
    </div>
    </div>
</div>
<!--============== Property Search Form End ==============-->

<!--============== Service Part Start ==============-->
<div class="full-row">
<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
<div class="col">
<div class="thumb-angle-left mb-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
<div class="box-70px bg-primary p-3"><i class="flaticon-sketch-1 flat-small text-white"></i></div>
<h6 class="mt-5 mb-3"><a href="<?php echo base_url();?>Postreq/postreq" class="transation">PROPERTY BOOKING</a></h6>	
<p id="proppara" >Our Realesatate online booking engine Construction delivers high.</p>
<a href="<?php echo base_url();?>Postreq/postreq" class="btn-link">Read More</a> 
</div>
</div>
<div class="col">
<div class="thumb-angle-left mb-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
<div class="box-70px bg-primary p-3"><i class="flaticon-sketch-1 flat-small text-white"></i></div>
<h6 class="mt-5 mb-3"><a href="<?php echo base_url();?>Postreq/postreq" class="transation">PAYMENT GUARANTEE</a></h6>
<p id="paypara">Advance payment guarantees are one of the most common types of.</p>
<a href="<?php echo base_url();?>Postreq/postreq" class="btn-link">Read More</a>
</div>
</div>
<div class="col">
<div class="thumb-angle-left mb-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
<div class="box-70px bg-primary p-3"><i class="flaticon-sketch-1 flat-small text-white"></i></div>
<h6 class="mt-5 mb-3"><a href="<?php echo base_url();?>Postreq/postreq" class="transation">HOUSE MANAGEMENT</a></h6>
<p id="housepara">Housewise is India’s fastest-growing property management.</p>
<a href="<?php echo base_url();?>Postreq/postreq" class="btn-link">Read More</a> 
</div>
</div>
<div class="col">
<div class="thumb-angle-left mb-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
<div class="box-70px bg-primary p-3"><i class="flaticon-sketch-1 flat-small text-white"></i></div>
<h6 class="mt-5 mb-3"><a href="<?php  echo base_url();?>properties/propertiessection" class="transation">PROPERTY DEAL</a></h6>
<p id="properdet">Real Estate Brokers are parties who act as a middleman between.</p>
<a href="<?php  echo base_url();?>properties/propertiessection" class="btn-link">Read More</a>
</div>
</div>
</div>
</div>
</div>
<!--============== Service Part End ==============-->

            

	<!--============== Recent Property Start ==============-->
	<div class="full-row pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="align-items-center d-flex">
						<div class="mr-auto">
							<h2 class="d-table "style="color:darkgreen;font-family: sans-serif!important;">OUR PROPERTIES</h2>
						</div>
						<a href="property_grid.html" class="ml-auto">View All Properties</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="3block-carusel nav-disable owl-carousel">
                        
                    
                    <?php
                   
                        $result = $this->db->get_where('postpro')->result_array();
                        if(!empty($result)){
                           
                        foreach ($result as $user) :
                        ?>
                       
                                        <?php
                                         $myString = $user["uploadfile"];
                                         $myArray = explode(',', $myString);
                                       
                                     ?>
                                <div class="item">
                                    <!-- Property Grid -->
                                    <div class="property-grid-1 property-block border transation-this hover-shadow">
                                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
                                            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                                            <a href="<?php echo base_url();?>user/propertydetail/<?php  echo $user['id'];?>"><img class="wow  zoomIn animated" src="<?php echo base_url();?>uploads/<?php echo $myArray[0];?>" alt="Image Not Found!"></a>
                                            <span class="price-on text-white font-medium font-700">INR1850/<small>mo</small></span>
                                            <ul class="position-absolute quick-meta">
                                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="property_text p-3">
                                            <span class="d-inline-block text-primary"><?php  echo $user['txtadtitle'];?></span>
                                            <h6 class="mt-2"><a  class="font-600 text-secondary" href="<?php echo base_url();?>user/propertydetail/<?php echo $user['id'];?>"><?php echo $user['txtdescription'];?></a></h6>
                                            <span class="my-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i><?php echo $user['txtcity'];?></span>
                                            <div class="quantity">
                                                <ul class="d-flex">
                                                    <li><span><?php echo $user['rooms']?>:</span></li>
                                                    <li><span>Beds:</span> 5</li>
                                                    <li><span><?php  echo $user['areasquareef'];?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center post-meta mt-2 p-3 border-top">
                                            <div class="agent">
                                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle mr-2 wow  zoomIn animated" src="<?php  echo base_url();?>assetsss/images/team/1.jpg" alt="avata"><span><?php echo $user['txtname']?></span></a>
                                            </div>
                                            <div class="post-date ml-auto"><span>2 Month Ago</span></div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                        endforeach;
                        }
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--============== Recent Property End ==============--> 
<!--============== Property Tab Start ==============-->
<!-- <div class="full-row p-0">
		<div class="container-fluid">
			<div class="row">
                <div class="col-12">
					<div class="row">
						<div class="col-md-6">
							<div class="mr-auto">
								<h6 class="my-2 text-dark d-table tagline-2 ml-50 font-700">View Our Development Work</h6>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="mix-tab">
								<ul class="list-color-dark tab-simple ml-auto d-table">
									<li class="font-600" data-filter="all">All</li>
									<li class="font-600" data-filter=".house">House</li>
									<li class="font-600" data-filter=".office">Office</li>
									<li class="font-600" data-filter=".appartment">Appartment</li>
									<li class="font-600" data-filter=".architecture">Architecture</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mix-element row row-cols-lg-5 row-cols-md-3 row-cols-1 mt-4">
					
						<div class="col mix office px-0">
							<div class="property-grid-3 property-block transation hover-img-zoom">
								<div class="data-on p-2">
									<span class="text-white font-medium font-500">$35000</span>
									<h6 class="mb-2"><a href="#" class="text-white hover-text-primary">Amazing architecture of office building.</a></h6>
									<a href="#" class="btn-text text-white">View the projects</a>
								</div>
								<div class="overlay-secondary"><img src="<?php // echo base_url();?>assetsss/images/property/12.png" alt=""></div>
							</div>
						</div>
						
						<div class="col mix office px-0">
							<div class="property-grid-3 property-block transation hover-img-zoom">
								<div class="data-on p-2">
									<span class="text-white font-medium font-500">$71000</span>
									<h6 class="mb-2"><a href="#" class="text-white hover-text-primary">Interior design in top floor.</a></h6>
									<a href="#" class="btn-text text-white">View the projects</a>
								</div>
								<div class="overlay-secondary"><img src="<?php // echo base_url();?>assetsss/images/property/13.png" alt=""></div>
							</div>
						</div>
						
						<div class="col mix house appartment px-0">
							<div class="property-grid-3 property-block transation hover-img-zoom">
								<div class="data-on p-2">
									<span class="text-white font-medium font-500">$27000</span>
									<h6 class="mb-2"><a href="#" class="text-white hover-text-primary">Family apartment building design</a></h6>
									<a href="#" class="btn-text text-white">View the projects</a>
								</div>
								<div class="overlay-secondary"><img src="<?php //echo base_url();?>assetsss/images/property/14.png" alt=""></div>
							</div>
						</div>
						
						<div class="col mix office land px-0">
							<div class="property-grid-3 property-block transation hover-img-zoom">
								<div class="data-on p-2">
									<span class="text-white font-medium font-500">$27000</span>
									<h6 class="mb-2"><a href="#" class="text-white hover-text-primary">Unique architect work in city.</a></h6>
									<a href="#" class="btn-text text-white">View the projects</a>
								</div>
								<div class="overlay-secondary"><img src="<?php //echo base_url();?>assetsss/images/property/15.png" alt=""></div>
							</div>
						</div>
						
						<div class="col mix land architecture px-0">
							<div class="property-grid-3 property-block transation hover-img-zoom">
								<div class="data-on p-2">
									<span class="text-white font-medium font-500">$131000</span>
									<h6 class="mb-2"><a href="#" class="text-white hover-text-primary">Outstand bridge monument project.</a></h6>
									<a href="#" class="btn-text text-white">View the projects</a>
								</div>
								<div class="overlay-secondary"><img src="<?php// echo base_url();?>assetsss/images/property/16.png" alt=""></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div> -->

<!--============== Property Category Start ==============-->


<div class="full-row bg-light">
<div class="container">
<div class="row">
    <div class="col-lg-12 mb-5">
    <h2 class="main-title down-line w-0 mx-auto mb-4 text-center w-sm-100 wow  zoomIn animated"><span id="secspan">WHAT WE OFFER</span></h2>
    <span id="areapara" class="d-table w-50 w-sm-100 sub-title mx-auto text-center text-justify">Real estate investors make money through rental income, appreciation, and profits generated by business activities that depend on the property. The benefits of investing in real estate include passive income, stable cash flow.</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded">
    <span class="flaticon-network flat-medium text-primary"></span>
    <h5 class="mb-3"><a href="<?php  echo base_url().'properties/propertiessection';?>" class="d-block text-secondary hover-text-primary mt-4">HOUSE</a></h5>
    <p id="areahouse">Housewise is India’s fastest-growing property </p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded">
    <span class="flaticon-network flat-medium text-primary"></span>
    <h5 class="mb-3"><a href="<?php  echo base_url().'properties/propertiessection';?>" class="d-block text-secondary hover-text-primary mt-4">LAND</a></h5>
    <p id="landhouse">Land Management and Real Estate Inc. offers.</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded">
    <span class="flaticon-network flat-medium text-primary"></span>
    <h5 class="mb-3"><a href="<?php  echo base_url().'properties/propertiessection';?>" class="d-block text-secondary hover-text-primary mt-4">OFFICE</a></h5>
    <p id="commerhouse">Commercial real estate (CRE) is property that.</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded">
    <span class="flaticon-network flat-medium text-primary"></span>
    <h5 class="mb-3"><a href="<?php  echo base_url().'properties/propertiessection';?>" class="d-block text-secondary hover-text-primary mt-4">BUSINESS</a></h5>
    <p id="realhouse">Real Estate (MSN) is an Oregon-based real. </p>
    </div>
    </div>
    </div>
    </div>
</div>



<!--============== Property Category End ==============-->

<!--============== Property Agent Start ==============-->
<!-- <div class="full-row">
<div class="container">
<div class="row">
<div class="col-12">
<div class="align-items-center d-flex">
<div class="mr-auto">
<div class="tagline text-primary pb-1 d-table">Our Listed</div>
<h2 class="d-table">Property Agents</h2>
</div>
<a href="property_grid.html" class="ml-auto btn-link">View All Agents</a>
</div>
</div>
</div>
<div class="row mt-5">
<div class="col-lg-3 col-md-6 mb-4">
<div class="thumb-team-simple">
<img class="rounded-lg" src="<?php  //echo base_url();?>assetsss/images/team/1.jpg" alt="">
<div class="user-info d-flex py-4">
<div class="mr-auto">
<h6 class="text-dark mb-2"><a href="#">Luann McLawhorn</a></h6>
<span class="text-secondary">At 1st April, 2012</span>
</div>
<div class="member-score font-mini bg-primary d-table text-white ml-auto">
<span>Score: 4.50</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="thumb-team-simple">
<img class="rounded-lg" src="<?php // echo base_url();?>assetsss/images/team/2.jpg" alt="">
<div class="user-info d-flex py-4">
<div class="mr-auto">
<h6 class="text-dark mb-2"><a href="#">Ronald Johnson</a></h6>
<span class="text-secondary">At 1st April, 2012</span>
</div>
<div class="member-score font-mini bg-primary d-table text-white ml-auto">
<span>Score: 5.00</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="thumb-team-simple">
<img class="rounded-lg" src="<?php // echo base_url();?>assetsss/images/team/3.jpg" alt="">
<div class="user-info d-flex py-4">
<div class="mr-auto">
<h6 class="text-dark mb-2"><a href="#">John M. Riddle</a></h6>
<span class="text-secondary">At 1st April, 2012</span>
</div>
<div class="member-score font-mini bg-primary d-table text-white ml-auto">
<span>Score: 5.00</span>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 mb-4">
<div class="thumb-team-simple">
<img class="rounded-lg" src="<?php // echo base_url();?>assetsss/images/team/4.jpg" alt="">
<div class="user-info d-flex py-4">
<div class="mr-auto">
<h6 class="text-dark mb-2"><a href="#">John M. Riddle</a></h6>
<span class="text-secondary">At 1st April, 2012</span>
</div>
<div class="member-score font-mini bg-primary d-table text-white ml-auto">
<span>Score: 4.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!--============== Property Agent End ==============-->

<!--============== Data Counting Start ==============-->
<!-- <div class="full-row p-0">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="fact-counter bg-secondary pt-5 pb-4 rounded">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
<span class="count-num text-primary h2" data-speed="3000" data-stop="310">3210</span>
<div class="text-white h6 pt-2">Listed Property</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;">
<span class="count-num text-primary h2" data-speed="3000" data-stop="51">51</span>
<div class="text-white h6 pt-2">Mega Project</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;"> 
<span class="count-num text-primary h2" data-speed="3000" data-stop="25">25</span>
<div class="text-white h6 pt-2">Awards Won</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="mb-30 text-center count wow fadeIn animate" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeIn;"> 
<span class="count-num text-primary h2" data-speed="3000" data-stop="2130">2130</span>
<div class="text-white h6 pt-2">Happy Clients</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!--============== Data Counting End ==============-->

<!--============== Testimonial Section Start ==============-->
<!-- <div class="full-row">
<div class="container">
<div class="row">
<div class="col-lg-12 mb-5">
<span class="text-primary tagline pb-2 d-table m-auto">Testimonial</span>
<h2 class="down-line w-50 mx-auto mb-4 text-center w-sm-100">Whay Client Says About Us</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="testimonial-simple text-center px-5">
<div class="text-carusel owl-carousel">
<div class="item">
<i class="flaticon-right-quote flat-large text-primary mb-4 d-table mx-auto"></i>
<blockquote class="text-secondary mb-5 font-medium">“ Property Cona provides excellent services as the staff members are good. They are very good advisers and helps us in decision-making..”</blockquote>
<span class="mx-auto d-table rounded-circle" style="width: 80px">
<img class="rounded-circle" src="<?php // echo base_url();?>assetsss/images/user1.jpg" alt="medical template">
</span>
<h4 class="mt-4">Mark Wiggins</h4>
<span class="text-primary">CEO N K Sriswasto </span>
</div>
<div class="item">
<i class="flaticon-right-quote flat-large text-primary mb-4 d-table mx-auto"></i>
<blockquote class="text-secondary mb-5 font-medium">“ A good infrastructure company in town when compared to other infrastructure companies. I would recommend your company to my friends and family.”</blockquote>
<span class="mx-auto d-table rounded-circle" style="width: 80px">
<img class="rounded-circle" src="<?php // echo base_url();?>assetsss/images/user2.jpg" alt="medical template">
</span>
<h4 class="mt-4">Mark Wiggins</h4>
<span class="text-primary">D.K. Rana</span>
</div>
<div class="item">
<i class="flaticon-right-quote flat-large text-primary mb-4 d-table mx-auto"></i>
<blockquote class="text-secondary mb-5 font-medium">“I am happy to buy a residential plot so I would like to thank Pamliya Infratech for making my dream come true.”</blockquote>
<span class="mx-auto d-table rounded-circle" style="width: 80px">
<img class="rounded-circle" src="<?php // echo base_url();?>assetsss/images/user3.jpg" alt="medical template">
</span>
<h4 class="mt-4">Mark Wiggins</h4>
<span class="text-primary"> Clients Priyanka Singh</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!--============== Testimonial Section End ==============-->

<!--============== Recent Property Start ==============-->
<div class="full-row bg-secondary">
        <div class="container-fluid">
			<div class="row">
			<div class="col-lg-12 mb-5">
				<h2  class="down-line text-white w-50 mx-auto text-center w-sm-100 wow  zoomIn animated">MAJOR PROPERTY</h2>
			</div>
		
			<div class="row">
			<div class="col-12">
			<div class="4block-carusel nav-disable owl-carousel">
           
			<?php
			$result= $this->db->get_where('postpro')->result_array();
			if(!empty($result)){
			foreach($result as $user) : 
			?> 
			  <?php
			  $myArray=$user["uploadfile"];
			  $myString= explode (',',$myArray);
			  ?>

			<div class="item">
					<!-- Property Grid -->
			<div class="property-grid-1 property-block border transation-this hover-shadow bg-white">
					<div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
					<div class="cata position-absolute">
					<span class="sale bg-secondary text-white">For Sale</span>
					<span class="featured bg-primary text-white">Featured</span>
					</div>
					<a href="<?php echo base_url();?>user/propertydetail/<?php  echo $user['id'];?>"><img  src="<?php echo base_url();?>uploads/<?php echo $myString[0];?>" alt="Image Not Found!"></a>
					<span class="price-on text-white font-medium font-700">INR120,5500</span>
					<ul class="position-absolute quick-meta">
					<li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
					<li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
					<li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
					</ul>
			</div>
                <div class="property_text p-3">
                <span  class="d-inline-block text-primary"><?php  echo $user['txtadtitle']?></span>
                <h6 class="mt-2"><a id="mostdescrip" class="font-600 text-secondary" href="<?php echo base_url();?>user/propertydetail"><?php  echo $user['txtdescription']?></a></h6>
                <span class="my-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i> 2305 Tree Frog Lane Overlandpk, MO 66210</span>
                <div class="quantity">
                <ul class="d-flex">
                <li><span><?php  echo $user['rooms']?>:</span></li>
                
                <li><span><?php  echo $user['areasquareef']?>:</span>Sqft<sup>2</sup></li>
                </ul>
                </div>
                </div>
                <div class="d-flex align-items-center post-meta mt-2 p-3 border-top">
                <div class="agent">
                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle mr-2" src="assetsss/images/team/1.jpg" alt="avata"><span><?php echo $user['txtname'] ?></span></a>
                </div>
                <div class="post-liked ml-auto"><span>91 Recommand</span></div>
                </div>
            </div>
        </div>

        <?php
        endforeach;
            } 
        ?>

	</div>
		</div>
		</div>
		</div>
        </div>
		</div>
<!--============== Recent Property End ==============-->

<!--============== Blog Section Start ==============-->
<div class="full-row bg-light">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
         <span class="pb-2 d-table w-50 w-sm-100 text-primary m-auto text-center tagline">Our Recent Post</span>
        <h2 class="down-line w-50 w-sm-100 mx-auto text-center mb-5 wow  zoomIn animated"><span id="spanpubl" style="color:darkgreen!important;">OUR</span>
        <span id="spanacti" style="color:#12171f!important;">RECENT PROPERTY</span></h2>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-6">
        <div class="thumb-blog-overlay bg-white hover-text-PushUpBottom mb-4">
        <div class="post-image position-relative overlay-secondary">
        <img  class="wow  zoomIn animated" src="<?php  echo base_url();?>assetsss/images/blog/1.png" alt="Image not found!">
        <div class="position-absolute xy-center">
        <div class="overflow-hidden text-center">
        <!-- <a class="text-white first-push-up transation font-large wow  zoomIn animated" href="#">+</a> -->
        </div>
        </div>
        </div>
        <div class="post-content p-35">
        <h6 class="d-block mb-3"><a href="<?php echo base_url();?>user/propertydetail" id="recentour" class="transation text-dark hover-text-primary">OUR LATEST DEVELOPMENT PROJECTS.</a></h6>
        <p id="psect"><span>Propertykona India gives you the latest information on the Investments happening across the India.</span></p>
        <div class="post-meta text-uppercase">
        <a href="#"><span>By Robert Haven</span></a>
        <a href="#"><span>Dec 25, 2020</span></a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
        <div class="thumb-blog-overlay bg-white hover-text-PushUpBottom mb-4">
        <div class="post-image position-relative overlay-secondary">
        <img class="wow  zoomIn animated" src="<?php  echo base_url();?>assetsss/images/blog/2.png" alt="Image not found!">
        <div class="position-absolute xy-center">
        <div class="overflow-hidden text-center">
        <!-- <a class="text-white first-push-up transation font-large wow  zoomIn animated" href="#">+</a> -->
        </div>
        </div>
        </div>
        <div class="post-content p-35">
        <h6 class="d-block mb-3"><a href="<?php echo base_url();?>user/propertydetail" class="transation text-dark hover-text-primary">CULTIVATING MARKET LEADERSHIP.</a></h6>
        <p><span>As an effective business leader/ CEO/ entrepreneur, one always has a ... Home » Property Trends » Vastu Shastra to cultivate.</span></p>
        <div class="post-meta text-uppercase">
        <a href="#"><span>By Robert Haven</span></a>
        <a href="#"><span>Dec 25, 2020</span></a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
        <div class="thumb-blog-overlay bg-white hover-text-PushUpBottom mb-4">
        <div class="post-image position-relative overlay-secondary">
        <img class="wow  zoomIn animated" src="<?php  echo base_url();?>assetsss/images/blog/3.png" alt="Image not found!">
        <div class="position-absolute xy-center">
        <div class="overflow-hidden text-center">
        <!-- <a class="text-white first-push-up transation font-large wow  zoomIn animated" href="#">+</a> -->
        </div>
        </div>
        </div>
        <div class="post-content p-35">
        <h6 class="d-block mb-3"><a href="<?php echo base_url();?>user/propertydetail" class="transation text-dark hover-text-primary">WE ARE THE NEXT GENERATION.</a></h6>
        <p><span>The Next generation estate contracts (NGEC) programme is replacing those arrangements with a mix of prime contracts and Organization.</span></p>
        <div class="post-meta text-uppercase">
        <a href="#"><span>By Robert Haven</span></a>
        <a href="#"><span>Dec 25, 2020</span></a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</div>
<!--============== Blog Section End ==============-->

<!--============== Register Section Start ==============-->
<!-- <div class="full-row bg-primary py-4">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-8 col-md-8">
<h3 class="text-white xs-text-center my-20">Are you looking for a House or Customer for your Property sale?</h3>
</div>
<div class="col-lg-4 col-md-4">
<a href="#" class="btn btn-white y-center position-relative d-table xs-mx-auto ml-auto">Subscribe Now</a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!--============== Register Section End ==============-->