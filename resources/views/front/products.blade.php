<!-- this is just a page with no header or footer 


<?php 
session_start() ;

if (isset($_SESSION['username']))
            {

               $a =  $_SESSION['username'];  
               // min 44 in the video with no noise
               // to not be able to go to home page without being connected 
               echo('the name of this session is <br>'.$a);
               echo('we succeeded') ;
            }
else{
       // return view('login');  
 
  // return view('register');

echo"{{url('/register')}}";

//echo "<script> window.location.href='http://localhost:8000/register' </script>" ;

}

?>

-->

@extends('layout.main')


@section('title','Products')

@section('productcontent') 

	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Great Offers on <span>Mobiles</span> Flat <i>35% Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
									  Disponible 
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									
									<ul>

										@forelse($categories as $category)

										<li>
										
											<a href="{{route('category.filter',$category->id)}}">
												{{$category->name}}
											</a>
										
										</li>

										@empty
										
										  No category here sorry
										
										@endforelse

									</ul>


								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Accessories
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="products2.html">Grinder</a></li>
										<li><a href="products2.html">Heater</a></li>
										<li><a href="products2.html">Kid's Toys</a></li>
										<li><a href="products2.html">Filters</a></li>
										<li><a href="products2.html">AC</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.html">Summer Store</a></li>
								<li><a href="products.html">Featured Brands</a></li>
								<li><a href="products.html">Today's Deals</a></li>
								<li><a href="products.html">Latest Watches</a></li>
							</ul>
						</div>
					</div>
					
				
					
					
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Prix</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="#">Moins de 100 Dinars</a></li>
									<li><a href="#"> 100-500 Dinars</a></li>
									<li><a href="#"> 1k-10k Dinars</a></li>
									<li><a href="#"> 10k-20k Dinars</a></li>
									<li><a href="#"> Above 20k Dinars</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/46.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Smart Phones<span>Up To</span> 15% Discount</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/47.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Top 10 Latest<span>Mobile </span>& Accessories</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
				<!-- Here the start of the showed products-->

					<!-- So this is a whole grid which means a frame
						ligne feha trois colonnes
					-->
					
					<!--This grid is from the dev website
						so three products per ligne or so -->
					<div class="w3ls_mobiles_grid_right_grid3">

				
						
					@forelse($produits->chunk(7) as $chunk)
					<!-- Here in case we wanted to get
						only four products and as My current situation
						I want only 3 products -->
						@foreach($chunk as $produit)


						

						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">

							<div class="agile_ecommerce_tab_left mobiles_grid" style="margin-bottom: 20px;">
								
								<div class="hs-wrapper hs-wrapper2">

								<!-- The original One 
								<div class="hs-wrapper hs-wrapper2">
								-->
								
									


									<img src="{{url('images',$produit->image)}}" alt=" " class="img-responsive" style="width: 223px !important;height: 295px !important;" />

									<!--HERe the url the first argument is for the folder
										and the second is to define the name of 
										the image to put -->

									
								</div>
								<h5><a href="single.html">
						    
						      {{$produit->name}}

								</a></h5>
								<div class="simpleCart_shelfItem">
									<p>
										<!--<span>
											{{$produit->price}}
											Dinars
										</span> -->
										
										<i class="item_price">
											{{$produit->price}}
											Dinars
											
										</i>
									
									</p>
									<!-- This is the adding to cart form -->
									
									
										
								<button type="submit" class="w3ls-cart">

										<a href="{{route('cart.addItem',$produit->id)}}">
											Ajouter au panier
										</a>
											

										</button>
									
									


<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">

						<span aria-hidden="true">&times;</span></button>						
				</div>
				
					

			
			<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{url('images',$produit->image)}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4> {{$produit->name}} </h4>
							<p>
								{{$produit->description}}
							</p>
							<!--This is for the Rating system -->
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p>
									<span>
									{{$produit->price}}
											Dinars
								</span> <i class="item_price">
								{{$produit->price}}
											Dinars
										</i>
									</p>
								

								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="MP3 Player" /> 
									<input type="hidden" name="amount" value="58.00"/>   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
						
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>



			</div>
		</div>
	</div>



	<!-- The end of the model History -->



								</div> 
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>

					@endforeach

	
					
	
						<div class="clearfix"> </div>
					


					</div>

				<!-- Here the end of the list of products we see in our page -->

				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>  
					<!-- Here End Things from the list -->

		
	@empty 
						<h3>  No product found </h3>
				
						

					@endforelse	


	

	<!-- Related Products -->


	<!--
	    From here As I am analysing right now 
		this should be when we push the button of the 
		products 
	-->


<!-- Related Products -->
	
	<!-- //Related Products -->
	
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems:1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:568,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

@endsection