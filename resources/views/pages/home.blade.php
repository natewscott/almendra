@extends('main')
<body id="home">
@section('content')
<section class="home-intro">
	<article class="intro-text">
		<h1>Amazing Views</h1>
		<h2>World Class Breaks</h2>
		<button class="book button">
		<a href="https://www.vrbo.com/1603268" target="_blank">Book your trip</a>
		</button>
	</article>
</section>
<section id="main-house">
	<section class="grid-container">
		<div class="grid-row">
			<article class="grid-col col-2-3 md">
				<div class="module">
					<img src="img/house/front_of_main_house.jpg" alt="">
				</div>
			</article>
			<aside class="col col-1-3 md">
				<div class="module">
					<h1>Casa Almendra</h1>
					<p>
						This house is complete with gorgeous luxury finishings, high end custom furniture, a large pool with shallow area for kids, spacious 2nd floor balcony and even a 3rd story star gazing/sunset deck. The house has a master bedroom upstairs with 2 twin beds (that can be united to make a king bed), private bathroom, direct access to a large balcony and unobstructed ocean views. There are 3 more bedrooms downstairs each with 2 twin beds (that can be united to make a king bed). One bedroom has it’s own private bathroom and the other 2 bedrooms share a bathroom. All rooms have a/c including the living area and there is wireless internet, Claro TV and a backup generator for the house that runs everything including a/c units in the case of a power outage.
					</p>
					<ul class="amenities">
						<li>
							<i class="fa fa-bed"></i>
							<span>Bedrooms: 4</span>
						</li>
						<li>
							<i class="fa fa-users"></i>
							<span>Sleeps: 4</span>
						</li>
						<li>
							<i class="fa fa-bath"></i>
							<span>Bathrooms: 3</span>
						</li>
					</ul>
					<ul class="amenities">
						<li>
							<i class="fa fa-wifi"></i>
							<span>Internet</span>
						</li>
						<li>
							<i class="fa fa-tv"></i>
							<span>T.V. / Satellite</span>
						</li>
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<article class="grid-img">
		<div class="grid_item" style="background-image: url(/img/house/back-_yard.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/living_room.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/first_floor_master.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/second_floor_master.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/house/guest_room.jpg);"></div>
	</article>
</section>
<section id="surfing">
	<section class="grid-container">
		<div class="grid-row">
			<article class="grid-col col-2-3 md">
				<div class="module">
					<h1>Surfing</h1>
					<p>
						Colorados is a fast, barreling beach break with many peaks and A frames. It is a challenging break and best for intermediate to expert surfers. Panga Drops is just a 10-15 minute walk up the beach and breaks on a horse-shoe shaped rock reef. This wave generally has a mellow take off and a more vertical and playful inside section. This break can be good for long boarders or short boarders. Panga Drops amplifies swells and is usually bigger but more forgiving than Colorados. At the very north end of the beach there is a point break, Los Perros Point, that needs a good swell with the right direction to break, but with the perfect combination it can provide very fun rights. We can also arrange boats to any of the 10+ surrounding breaks.
					</p>
				</div>
			</article>
			<aside class="col col-1-3 md">
				<div class="module">
					<img src="img/surfing/surfing.jpg" alt="">
				</div>
			</aside>
		</div>
	</section>
	<section class="surf-para">
		<p class="pull-quote">
			<em>
				"Staying in a house like this with the best beach I've ever surfed just footsteps out the back door was unforgettable."
			</em>
			<br>- Michael B.
		</p>
	</section>
</section>
<section id="town">
	<section class="grid-container">
		<div class="grid-row">
			<article class="grid-col col-2-3 md">
				<div class="module">
					<img src="img/town/restuarant.jpg" alt="">
				</div>
			</article>
			<aside class="col col-1-3 md">
				<div class="module">
					<h1>Restaurant and Shopping</h1>
					<p>
						Within the community of Hacienda Iguana there are currently six restaurants and a brewery. The restaurant at the beach club serves healthy and delicious plates for breakfast, lunch and dinner and has a great beach bar with happy hour specials. Don Eloy’s bar and restaurant serves sandwiches, wings, bar food and pizza, has a full bar and is open from 3-11pm. This is also a great place to watch sports games. Scoops and Spokes is an artisan ice cream, coffee, juice and panini shop. Scoops and Spokes is also the place to go for bike rentals and bike tours. The 10th hole is right behind the Iguana Surf Rentals office and has burritos, club sandwiches, hot dogs and hamburgers and is open for breakfast and lunch. Casa Maderas is a restaurant with local Nicaraguan cuisine, open for lunch and dinner, and located in the wood house just east of the golf condos. Lastly, Casa Ananas (located just east of the golf condos) is open for dinner on selected nights with special menus including: seafood, pizza, Italian, Mexican or Thai cuisine. It is best to check their Facebook page for each night's special. The brewery has just opened and is right next to NSR Surf Shop and is a great place to watch sports.
					</p>
				</div>
			</aside>
		</div>
	</section>
	<article class="grid-img">
		<div class="grid_item" style="background-image: url(/img/town/boats.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/town/hourse-riding.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/town/sunset-beach.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/town/volley-ball.jpg);"></div>
		<div class="grid_item" style="background-image: url(/img/town/cliff-view.jpg);"></div>
	</article>
</section>
<section id="book">
	<article class="stay">
		<h1>Spend your vacation with us</h1>
		<button class="book button">
		<a href="https://www.vrbo.com/1603268" target="_blank">Book your trip</a>
		</button>
	</article>
</section>
<section class="map" style="line-height: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15644.073209261609!2d-86.05177559684437!3d11.406216675026245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7433d58d72aa43%3A0x4c2581b754de92fb!2sPlaya%20Colorado%2C%20Nicaragua!5e0!3m2!1sen!2sus!4v1574358254725!5m2!1sen!2sus" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
@endsection