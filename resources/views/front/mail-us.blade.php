<!--This is the mail page 
or what we are going to call contact us -->


@extends('layout.main')


@section('content')

<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Mail us </h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil
				</a> 
				<i>/</i>
			</li>
				<li>Contactez Nous </li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->

@if(session()->has('success'))
<br>
	<div class="breadcrumb_dress success alert-success">
		<div class="container">
			{{session()->get('success')}}
		</div>
	</div>

@endif

	<div class="mail">


	<!--
		@if(session()->has('success'))
			<div class="alert alert-success">
				{{session()->get('success')}}
			</div>		
		@endif
	-->
	

		<div class="container">
			<h3> Contactez Nous </h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Adresse</h4>
					<p>Rue 8612 - Impasse N°3 - Local N°9 - Charguia 1  
						<br>
						<span>2035 Tunis Carthage</span>
					</p>
					
					<ul>
						
						<li> Tél :+216 71 115 100 </li>
						<li> Fax :+216 71 805 360 </li>
						<li><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Merci de remplire le formulaire ci-dessous</h4>
					
						
			
						<form action="{{ url('mail-us') }}" method="post">
							{{csrf_field()}}
						<input type="text" name="nom" placeholder="Votre nom" required="">
						<input type="email" name="email" placeholder="Votre Email" required="">
						<input type="text" name="phone" placeholder="Votre téléphone " required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Soumettre" >
						</form>
				
				</div>

				<div class="clearfix"> </div>
			
			</div>

			<div class="contact-bottom">
	
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen>				
				</iframe>
	
			</div>
		</div>
	
</div>



@endsection