<!-- Contact section -->
<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2><?= $contacttitre ?></h2>
					</div>
					<p><?= $contacttexte ?></p>
					<h3 class="mt60"><?= $contacttitreadresse ?></h3>
					<p class="con-item"><?= $contactadresse ?><br> <?= $contactville ?></p>
					<p class="con-item"><?= $contacttelephone ?></p>
					<p class="con-item"><?= $contactmail ?></p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form" action="<?= get_admin_url() . '?action=send-mail'; ?>" method="post">
					<?php wp_nonce_field('send-mail'); ?>
						<div class="row">
							<div class="col-sm-6">
							<input type="text" name="name" id="name"value="<?= isset($old['name']) ? $old['name'] : '' ?>"placeholder="Name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" id="message" cols="30" rows="10" placeholder="Your email"><?= isset($old['message']) ? $old['message'] : '' ?></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->