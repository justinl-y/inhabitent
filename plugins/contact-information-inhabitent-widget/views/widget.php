<!-- This file is used to markup the public-facing widget. -->
<div class="contact-widget">
	<?php if ( strlen( trim( $telephone_number ) ) > 0 ) : ?>
		<div class="contact-row">
			<div class="contact-icon">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			<div class="contact-detail">
				<a href="tel:<?php echo $telephone_number; ?>"><?php echo $telephone_number; ?></a>
			</div>
		</div>


		<!--<p>
			<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php //echo $telephone_number; ?>"><?php //echo $telephone_number; ?></a>
		</p>-->
	<?php endif; ?>

	<?php if ( strlen( trim( $email_address ) ) > 0 ) : ?>
		<div class="contact-row">
			<div class="contact-icon">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<div class="contact-detail">
				<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
			</div>
		</div>

		<!--<p>
			<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php //echo $email_address; ?>"><?php //echo $email_address; ?></a>
		</p>-->
	<?php endif; ?>

	<?php if ( strlen( trim( $address ) ) > 0 ) : ?>
		<div class="contact-row">
			<div class="contact-icon">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			<div class="contact-detail">
				<span class="address"><?php echo $address; ?></span>
			</div>
		</div>
	<?php endif; ?>
</div>






