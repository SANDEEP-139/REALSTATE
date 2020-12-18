	
	
	<!--============== Page title Start ==============-->
	<div class="full-row" id="proplist">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav aria-label="breadcrumb" class="mt-2">
					  <ol class="breadcrumb mb-0 bg-transparent p-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Listing</a></li>
						<li class="breadcrumb-item active text-primary" aria-current="page">Property</li>
					  </ol>
					</nav>
					<h2 class="text-secondary">Property Listing</h2>
				</div>
			</div>
		</div>
	</div>
	<!--============== Page title End ==============-->
	
	<!--============== Property Search Form Start ==============-->
	<div class="full-row p-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form class="quick-search form-icon-right position-relative" action="#" method="post">
						<div class="form-row row-cols-md-4 row-cols-lg-6 row-cols-1">
							<div class="col mb-3">
								<div class="form-group">
									<input type="text" class="form-control" id="search" name="keyword" placeholder="Enter Keyword...">
								</div>
							</div>
							<div class="col mb-3">
							<div class="form-group">
									<select name="txtadtitle" id="txtadtitle" class="selectpicker show-tick">
									<option selected="selected" value="" >Property types</option>
										<?php
										foreach($record as $key=>$user){ 
										?>
										<option value='<?php echo $user['id'] ?>'><?php echo $user['txtadtitle'] ?></option>
										<?php
										} 
									?>
									</select>
									
								</div>
							</div>
							<div class="col mb-3">
								<div class="form-group">
									<select name="datepick" class="selectpicker show-tick">
										<option>Property Status</option>
										<option>For Rent</option>
										<option>For Sale</option>
									</select>
								</div>
							</div>
							<div class="col mb-3">
							<div class="form-group ">
											
											<select name="pricephone" id="pricephone" class="selectpicker show-tick">
									<option selected="selected" value="" >Price types</option>
											<?php
												foreach($record as $key=>$value){ 
												?>
												
												
												<option  value='<?php echo $value['id']; ?>'><?php  echo $value['pricephone'];?></option>
												<?php }?>
											</select>
								</div>
							</div>
							<div class="col mb-3">
							<div class="form-group">
									
									<select name="rooms"  id="rooms"  class="selectpicker show-tick"   placeholder="Enter your rooms"  type="text" autocomplete="off" style="border-style:Groove;" >
									<option selected="selected" value="" >Select Bedrooms</option>

										<?php
										 foreach($record as $key=>$value){
										?>
									<option  value='<?php echo $value['id']; ?>'><?php  echo $value['rooms'];?></option>

                                  <?php }?>  
									</select>
								</div>
							</div>
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
							<!-- <div class="col mb-3">
								<div class="form-group">
									<button  id="search"  class="btn btn-primary w-100">Search</button>
								</div>
							</div> -->
						</div>
						
					</form>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<!--============== Property Search Form End ==============-->
	
	<!--============== Property Grid View Start ==============-->
	<div  class="full-row pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="woo-filter-bar p-3 d-table w-100">
						<div class="float-left">
							<form class="woocommerce-ordering" method="get">
								<select name="orderby" class="orderby selectpicker" aria-label="Shop order">
									<option value="menu_order" selected="selected">Any Status</option>
									<option value="popularity">For Rent</option>
									<option value="rating">For Sale</option>
								</select>
								<input type="hidden" name="paged" value="1">
							</form>
						</div>
						<div class="float-left">
							<form class="woocommerce-ordering" method="get">
								<select name="orderby" class="orderby selectpicker" aria-label="Shop order">
									<option value="menu_order" selected="selected">Default</option>
									<option value="popularity">Most Popular</option>
									<option value="rating">Top Rated</option>
									<option value="date">Newest Items</option>
									<option value="price">Price low to high</option>
									<option value="price-desc">Price hight to low</option>
								</select>
								<input type="hidden" name="paged" value="1">
							</form>
						</div>
						<div class="float-right xs-mx-none">
							<form class="view-category" method="get">
								<button title="List" class="list-view " value="list" name="display" type="submit"><i class="flaticon-grid-1 flat-mini"></i></button>
								<button title="Grid" class="grid-view active" value="grid" name="display" type="submit"><i class="flaticon-grid flat-mini"></i></button>
							</form>
						</div>
						<div class="float-right">
							<span class="woocommerce-ordering-pages mr-4">Showing at 15 result</span>
						</div>
					</div>
				<div id="search" class="row row-cols-1">
					<?php
					  $result= $this->db->get_where('postpro')->result_array();
					  if(!empty($result)){
						  foreach($result as $user):
					  ?>
						<?php
						$myArray= $user["uploadfile"];
						$myString= explode(',',$myArray);
						?>
						
						<div class="col">
							<!-- Property Grid -->
							<div id="search_data" class="property-list-1 bg-white property-block border transation-this hover-shadow mb-30">
								<div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
									<div class="cata position-absolute">
										<span class="sale bg-secondary text-white">For Rent</span>
									</div>
									  <a href="<?php echo base_url();?>user/propertydetail/<?php echo $user['id'];?>"><img src="<?php  echo base_url();?>uploads/<?php  echo $myString[0]?>" alt="Image Not Found!"></a>  -->
									 
									<ul class="position-absolute quick-meta">
										<li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
										<li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
										<li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
									</ul>
								</div>
								<div class="property_text p-3" id="txtadtitle">
									<span  class="d-inline-block text-primary"><?php echo $user['txtadtitle'] ?></span>
									<h6 class="mt-2"><a class="font-600 text-secondary" href="<?php  echo base_url();?>user/propertydetail"><?php echo $user['txtdescription'] ?></a></h6>
									<span class="mt-3 d-block"><i class="fas fa-map-marker-alt text-primary"></i><?php  echo $user['txtcity']?></span>
									<span class="text-primary font-medium py-2 d-table font-700">INR1,0450/<small>mo</small></span>
									<div class="quantity">
										<ul id="myUL" class="d-flex">
											<li><span><?php echo $user['rooms'] ?>:</span></li>
											
											<li><span><?php  echo $user['areasquareef']?>:</span>Sqft<sup>2</sup></li>
										</ul>
									</div>
									<div class="d-flex align-items-center post-meta mt-4">
										<div class="agent">
											<a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle mr-2" src="<?php  echo base_url();?>assetsss/images/team/1.jpg" alt="avata"><span><?php  echo $user['txtname']?></span></a>
										</div>
										<div class="post-date ml-auto"><span>2 Month Ago</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<?php
					   endforeach; 
				         }
				        ?>
						<div class="col-lg-12 mt-5">
							<nav aria-label="Page navigation example">
								<ul class="pagination pagination-dotted-active justify-content-center">
									<li class="page-item disabled">
									  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous Page</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
									  <a class="page-link" href="#">Next Page</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>				
			</div>
		</div>
		</div><br><br>
	

<script>

$('#search').keyup(function(){
	//  $('#search_data').hide();
var search = $('#search').val();
// var title = $('#txtadtitle').val();
//debugger;
	// alert(search);

	$.ajax({
		url: "<?=base_url();?>properties/search",
        type: "POST",
        data: {search:search},
		cache: false,
		success: function(data){
			// alert($('#txtadtitle').val());
			$('#search_data').html(data); 
			console.log(data);
		}
});
});
</script>
<!-- <script>
function myFunction() {
	//alert("hello");
  // Declare variables
  var input, filter,div, ul, li, a,span, i, txtValue;
  alert(div);
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  //div = document.getElementById("search")
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script> -->

	
	
	