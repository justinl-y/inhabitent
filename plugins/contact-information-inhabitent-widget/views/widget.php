<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $telephone_number ) ) > 0 ) : ?>
	<p>
		<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $telephone_number; ?>"><?php echo $telephone_number; ?></a>
	</p>
<?php endif; ?>

<?php if ( strlen( trim( $email_address ) ) > 0 ) : ?>
	<p>
		<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
	</p>
<?php endif; ?>

<?php if ( strlen( trim( $address ) ) > 0 ) : ?>
	<p>
		<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $address; ?>
	</p>
<?php endif; ?>