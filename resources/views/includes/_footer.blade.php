<footer class="site-footer">
<section class="footer">
	<article>
		<form action="">
			<fieldset>
				<h3 class="legend">Contact Us</h3>
				<hr>
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
					<div class="formitem">
						<label for="email" class="label req">Contact Email</label>
						<input type="email" name="email" id="email" placeholder="example@example.com" required="required">
					</div>
				</div>
				<div class="formrow">
					<div class="formitem">
						<label for="subject" class="label req">Subject of Inquiry</label>
						<input type="text" name="subject" id="subject" placeholder="Reason for Contact" required="required">
					</div>
				</div>
				<div class="formrow">
					<div class="formitem">
						<label for="message" class="label req">Message</label>
						<textarea name="msg" id="msg" cols="30" rows="10" required="required"></textarea>
					</div>
				</div>
				<div class="buttons">
					<button class="primary button">Send Message</button>
				</div>
			</fieldset>
		</form>
	</article>
	<article class="foot-book">
		<h1>Spend your vacation with us</h1>
		<button class="primary button">
		<a href="https://www.vrbo.com/1603268" target="_blank" class="footer-book">Book your trip</a>
		</button>
	</article>
</section>
</footer>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>