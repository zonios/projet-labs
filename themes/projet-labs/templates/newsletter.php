	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			
			<?php  
			// if(isset($_SESSION['newsletter_mail_error'])): 
			// unset($_SESSION['newsletter_mail_error']);
			?>
			<!-- <div style="padding:0.5rem; background-color:lightgrey; border-left-style: 0.4rem solid red;">The field should be completed with a valid e-mail address</div> -->
			<?php 
			// endif; 
			?>
			
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form action="<?= admin_url("admin-post.php"); ?>" method="post" class="nl-form">
            <input type="hidden" name="action" value="labs_newsletter_save_mail">
						<input type="text" id="newsletter_mail" name="newsletter_mail" placeholder="Your e-mail here">
						<button type="submit" class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->