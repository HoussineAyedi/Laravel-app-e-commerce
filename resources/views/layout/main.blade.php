<!-- this is the layout which means the header and the footer-->
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- CSRF Token 
    	
	-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>
	
@yield('title','Houssine PFE')

</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="{{asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />


<link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/fasthover.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="{{asset('css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{asset('js/jquery.min.js') }}"></script>
<link rel="stylesheet" href="{{asset('css/jquery.countdown.css') }}" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  

<!--Added from the other E-commerce project  -->

<!--<link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>


<link href="dist/css/foundation.css" rel="stylesheet" type="text/css" media="all" />

-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>







<!--The start of the part of the app layout -->

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	-->
<!-- // end of the part copier from laravel login app layout -->






<!--// done of the Added from the other E-commerce project  -->

<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 



<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	
	

<!-- Deleted header model from this place -->


	<!-- header modal -->
	<!-- header -->
	
	<div class="header" id="home1">
		

			<!--  This div is for the header container -->
		<div class="container">
			




			<!--The login trick of W3layouts -->

			<div class="w3l_login">
			
		
  	


@guest
		
		<center>	
             <span class="glyphicon glyphicon-user" aria-hidden="true">
              	
            <b> 	
            	<a class="nav-link" href="{{ route('login') }}" style="height: 25px;" >{{ __('Login') }}</a>
            </b>
              
            <b>
              	<a class="nav-link" href="{{ route('register') }}" style="height: 25px;">{{ __('Register') }}</a>
            </b>
			
			</span>
			
		</center>
		
	
	@else	

	

<center>	
		<span class="glyphicon glyphicon-user" aria-hidden="true" >	
  			<b style="font-family: -webkit-pictograph;">
  			 {{Auth::user()->name}}
  			</b>
 		<b> 	
 			<a  href="{{ url('/logout') }}" style="height: 25px;width:auto;font-size:1em;" >Logout</a>
            </b>

  		</span>	
</center>


	@endguest


</div>






  			
	    
	    




			
			
				
				<!-- end of the div of the login of W3layouts -->
	





			<div class="w3l_logo">
				<h1><a href="{{url('/')}}">Electrostar Store<span>Your stores. Your place.</span></a></h1>
			</div>
			

		<!--The search trick -->
			
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box">
					<span class="glyphicon glyphicon-search" aria-hidden="true">			
					</span>
				</label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search..." style="width:325px;">
						<input type="submit" value="Rechercher ">
					</form>
				</div>
				
			</div> 

				<!--   	The cart trick -->

				<div class="cart cart box_1"> 
				<a href="{{route('cart.index')}}">
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value="">
						<i class="fa fa-cart-arrow-down" aria-hidden="true">
							<h6> 
								{{Cart::count()}}
							</h6>
						</i>
					</button>
				</a>
				 
				
				</div>
			



			 
			</div>

 					<!--Added from the other website-->
			 
	

		</div>
	




<!-- Here just to make for us the user name showed 

	@guest
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
              
              <li>
              	<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              <li>
              	<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>

			</ul>
		</div>
	@else	

	<center>
		<h3>The user connecter Right now is 
			<b>
				{{Auth::user()->name}}
			<b> 
		</h3>
	</center>

	@endguest


I just commented to test 

-->



	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/')}}" class="act">Accueil</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Produits 
								<b class="caret">
									
								</b>
							</a>
							
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="{{url('/products')}}">Mobile Phones</a></li>
										<!--
											Ok this is how I was doing things
											<li><a href="http://localhost:8000/products">Mobile Phones</a></li>

										-->
											<li><a href="products.html">Mp3 Players <span>New</span></a></li> 
											<li><a href="products.html">Popular Models</a></li>
											<li><a href="products.html">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.html">Laptop</a></li>
											<li><a href="products1.html">Desktop</a></li>
											<li><a href="products1.html">Wearables <span>New</span></a></li>
											<li><a href="products1.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.html">Tv</a></li>
											<li><a href="products2.html">Camera</a></li>
											<li><a href="products2.html">AC</a></li>
											<li><a href="products2.html">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						
						<li><a href="{{url('/about')}}">A propos </a></li> 
						
						<!--
						<li class="w3pages">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Pages 
								<span class="caret">
									
								</span>
							</a>
							
							<ul class="dropdown-menu">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="codes.html">Short Codes</a></li>     
							</ul>
						
						</li> 
						-->

						<li><a href="{{url('/mail-us')}}">Contactez Nous</a></li>


					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->




<!-- in this main page we injected the code of our template 
so the header and the footer are herer 
and then this part becomes a dynamic part -->


<!-- after one month of doing things 
I Understood finally that this field is to inject the 
dynamical content of my page in here 

And I also think that only one yield is enough cause
it is like he knows what section is the one for him
so the controller cares for the product or the home page and 
don't care about this stupid page and also the 
section is written there -->
	

		@if(session()->has('newsletterok'))
		<br>
		
		<div class="breadcrumb_dress success alert-success">
		<div class="container">
		
			{{session()->get('newsletterok')}}
		<br>
			
		</div>
		</div>

		@endif



		@if(session()->has('deliversuccess'))
		<br>
		
		<div class="breadcrumb_dress success alert-success">
		<div class="container">
		
			{{session()->get('deliversuccess')}}
		<br>
			
		</div>
		</div>

		@endif






	@yield('content')
	@yield('productcontent')
	@yield('aboutcontent')
	@yield('categorycontent')

	
	<!-- the yield part is to show that this is a dynamic part in your website 
		in which you will like include the content 
		this content should be in file that extends this layout -->


<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p> 
					<b>
						Abonnez Vous à notre newsletter pour recevoir en premier nos nouvautés 
					</b>
				</p>
			
			</div>

			<div class="col-md-6 w3agile_newsletter_right">
				
				<form action="{{url('/')}}" method="post">

						{{csrf_field()}}
					<input type="email" name="email" placeholder="Votre E-mail" required="">
					<input type="submit" value="" />
			
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Nous sommes heureux de vous voir chez nous 
						<br>
						Ci-dessous nos informations pour touts contacts souhaités
					</p>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true">
							
						</i>Rue 8612 - Impasse N°3 - 
							<span>Local N°9 - Charguia 1</span>
						 	<span>2035 Tunis Carthage</span>

						</li>
						
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="{{url('/about')}}">A propos </a></li>
						<li><a href="{{url('/mail-us')}}">Contacter Nous</a></li>
						
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="/products">Produits Special</a></li>
					</ul>
				</div>
				


				<div class="col-md-3 w3_footer_grid">
					<h3>Categories</h3>
					<ul class="info"> 
						<li><a href="products.html">Mobiles</a></li>
						<li><a href="products1.html">Laptops</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products1.html">Wearables</a></li>
						<li><a href="products2.html">Kitchen</a></li>
					</ul>
				</div>




				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="/">Accueil</a></li>
						<li><a href="/products">Offre du jour</a></li>
					</ul>
					<h4>Suivez Nous</h4>

					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2018 Electrostar Store. All rights reserved | Designed by Houssine Ayedi 

					<a href="http://www.electrostar.com.tn/">
					Electrostart GBH
					</a>
				</p>
			
			</div>
		</div>
	</div>

	<!-- //footer --> 
	








</body>
</html>