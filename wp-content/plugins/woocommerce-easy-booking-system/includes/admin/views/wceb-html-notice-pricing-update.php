<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php

// Get active plugins
$active_plugins = (array) get_option( 'active_plugins', array() );

if ( is_multisite() ) {
    $active_plugins = array_merge( $active_plugins, get_site_option( 'active_sitewide_plugins', array() ) );
}

// Return true if Easy Booking is active
$pricing_is_active = ( array_key_exists( 'easy-booking-pricing/easy-booking-pricing.php', $active_plugins ) || in_array( 'easy-booking-pricing/easy-booking-pricing.php', $active_plugins ) );

if ( true === $pricing_is_active ) {

	$pricing_settings = get_option( 'ebp_settings' );
	$pricing_license_key = $pricing_settings['ebp_license_key'];

	if ( empty( $pricing_license_key ) ) {
		return;
	}

	?>

	<div class="updated easy-booking-notice">
		<p>
			<?php printf(
				__( 'If you have the Easy Booking: Pricing add-on and don\'t have version 1.0.5 update available, please download it manually %shere%s.', 'easy_booking' ), '<a href="' . esc_url( 'http://download.easy-booking.me/' . $pricing_license_key ) . '/">', '</a>' ); ?>
		</p>
		<button type="button" class="notice-dismiss easy-booking-notice-close" data-notice="pricing-update"></button>
	</div>

	<?php

}