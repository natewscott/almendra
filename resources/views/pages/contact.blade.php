@extends('inner')
@section('content')
<article class="hero-unit" id="contact-img">
	<h1>Contact Us</h1>
</article>
<section class="contact-form">
	<section class="contact-content">
		<article class="contact">
			<form action="" method="POST">
				<fieldset>
					<h2>Get in touch with us</h2>
					<p>If you are interested in staying with us, send us a message with any questions that you might have. We will gladly answer them.</p>
					<p>
						If you recently stayed with us, we would love to hear your experience.
					</p>
					<div class="formrow">
						<div class="formitem col1of2">
							<label for="first_name" class="label req">First Name</label>
							<input type="text" name="first_name" id="first_name" placeholder="First Name" required="required" x-autocomplete="given-name">
						</div>
						<div class="formitem col1of2">
							<label for="last_name" class="label req">Last Name</label>
							<input type="text" name="last_name" id="last_name" placeholder="Last Name" required="required" x-autocomplete="family-name">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem col1of2">
							<label for="email" class="label req">Email</label>
							<input type="email" name="email" id="email" placeholder="example@email.com" required="required" x-autocomplete="email">
						</div>
						<div class="formitem col1of2">
							<label for="phone" class="label req">Phone</label>
							<input type="tel" name="phone" id="phone" placeholder="(123) 456-7891" required="required" x-auotocomplete="tel">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label for="subject">Subject</label>
							<input type="text" class="label req" name="subject" id="subject" placeholder="Reason for contact us" required="required">
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label for="msg" class="label req">Message</label>
							<textarea name="msg" id="msg" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="buttons">
						<buttons class="priamry button">Contact Us</buttons>
					</div>
				</fieldset>
			</form>
		</article>
		<aside>
			<p id ="rules">
				<strong>house rules</strong>
			</p>
			<hr>
			<ol>
				<li>
					<em>Check-in time: 3:00 PM</em>
				</li>
				<li>
					<em>Check-out time: 11:00 A</em>M
				</li>
			</ol>
			<ul>
				<li>
					No parties/Events
				</li>
				<li>
					No Smoking
				</li>
				<li>
					No Pets
				</li>
				<li>
					Children are allowed
				</li>
				<li>
					Max numbers of guests: 8
				</li>
			</ul>
		</aside>
	</section>
</section>
<section class="map" style="line-height: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15644.073209261609!2d-86.05177559684437!3d11.406216675026245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7433d58d72aa43%3A0x4c2581b754de92fb!2sPlaya%20Colorado%2C%20Nicaragua!5e0!3m2!1sen!2sus!4v1574358254725!5m2!1sen!2sus" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
@endsection