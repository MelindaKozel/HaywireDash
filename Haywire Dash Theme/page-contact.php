<?php get_header(); ?>
<main>	
	<div class="mockup contactpage">
		<div class="bg" id="contactbg">
			<main class="container">

				<h1><span class="highlight">Contact</span></h1>

				<p class="contact"><strong>Haywire Dash</strong> <br>
					4916 Underwood Avenue Lower<br>
					Omaha, NE 68132 <br>
					<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5998.023305571669!2d-95.98840424186052!3d41.26508218300665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87938dddf11895a1%3A0x0f86838e69a66c84!2s4916+Underwood+Ave%2C+Omaha%2C+NE+68132!5e0!3m2!1sen!2sus!4v1415066964994"></iframe> <br></p>

					<p class="bold contact divider highlight">&mdash;&mdash;</p>

					<h2 class="" id="currentmenu">Reservations<br></h2>

					<p class="contact"><strong>Phone</strong><br>
						402.555.0127 <br></p>

						<p style="text-align:center; color: #FFFFFF">&mdash;</p>

						<p class="contact"><strong>Email</strong><br>
							<a href="mailto:thisisnotarealaddress@pleasedonotsend.com">
								<span id="email">reservations@haywiredash.com*</span>
							</a> </p>

							<div class="disclaimer"><p class="italics"><span class="bold highlight">*If your requested reservation is less than 24 hours away,please do not use&nbsp;email!</span></p></div>

							<p class="bold contact divider highlight">&mdash;&mdash;</p>

							<div id="contactform">
								<form method="post" action="thankyou.html">
									<input type="text" size="40" name="firstname" placeholder=" Name"> <br>
									<input type="text" size="40" name="phonenumber" placeholder =" Phone"> <br>
									<input type="text" size="40" name="phonenumber" placeholder =" Email"> <br>
									<textarea rows = "6" cols="40" placeholder=" Message" name="messagebody" ></textarea> <br>

									<input type="checkbox"> Please contact me regarding this message <br>
									<input type="checkbox"> Please subscribe me to your weekly email list. <br>

									<input type="submit" id="submitbutton" value="Submit">
								</form>

							</div>
						</main>
					</div>
				</div>





</main>

<?php get_footer(); ?>