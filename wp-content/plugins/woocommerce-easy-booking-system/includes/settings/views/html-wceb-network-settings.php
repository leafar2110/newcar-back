<div class="wrap">
	
	<form method="post" action="<?php echo admin_url(); ?>options.php">

		<h2><?php _e( 'Network settings for WooCommerce Easy Booking', 'easy_booking' ); ?></h2>

		<?php settings_fields( 'easy_booking_network_settings' ); ?>
		<?php do_settings_sections( 'easy_booking_network_settings' ); ?>
		 
		<?php submit_button(); ?>

	</form>

</div>