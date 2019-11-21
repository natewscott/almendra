@extends('main')
@section('content')
<section class="home-intro">
	<article class="intro-text">
		<h1>Amazing Views</h1>
		<h2>World Class Breaks</h2>
	</article>
</section>
<section class="main-house">
	<article class="two-col">
		<article class="img">
			<img src="img/house/front_of_main_house.jpg" alt="">
		</article>
		<article class="text">
			<h1>Casa Almendra</h1>
			<p>
				Gorgeous, newly renovated, luxury 4 bedroom beachfront house with large pool and arguably the best views of Colorados beach break. The house is located on the beach directly in front of the main peak of the world class beach break Colorados, just a 15 minute walk from Panga Drops surf break and is just 50 yards (1 minute walk) from the community beach club, pool, restaurant and bar. No expense has been spared in the renovation.
			</p>
		</article>
	</article>
	<article class="grid-img">
		<div class="grid_item" style="background-image: url(/img/house/back-_yard.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/living_room.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/first_floor_master.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/second_floor_master.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/guest_room.jpg);"></div>
	</article>
</section>
<section class="town">
	<article class="two-col">
		<article class="text">
			<h1>Playa Colorado</h1>
			<p>
				
			</p>
		</article>
		<article class="img">
			{{-- <img src="img/house/front_of_main_house.jpg" alt=""> --}}
		</article>
	</article>
</section>
<section class="map" style="line-height: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15644.073209261609!2d-86.05177559684437!3d11.406216675026245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7433d58d72aa43%3A0x4c2581b754de92fb!2sPlaya%20Colorado%2C%20Nicaragua!5e0!3m2!1sen!2sus!4v1574358254725!5m2!1sen!2sus" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
@endsection