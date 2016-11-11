<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id('telephone_number'); ?>">Telephone Number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone_number'); ?>" name="<?php echo $this->get_field_name('telephone_number'); ?>" type="text" value="<?php echo $telephone_number; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id('email_address'); ?>">Email Address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email_address'); ?>" name="<?php echo $this->get_field_name('email_address'); ?>" type="text" value="<?php echo $email_address; ?>">
	</p>

	<p>
		<label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
	</p>
</div>
