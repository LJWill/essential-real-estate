<?php
/**
 * @var $property_id
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$title = get_the_title($property_id);
$location = get_post_meta($property_id, ERE_METABOX_PREFIX . 'property_location', true);
$lat = $lng = '';
// if (!empty($location)) {
// 	list($lat, $lng) = explode(',', $location['location']);
// } else {
// 	return;
// }

?>     
            

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.3299491685375!2d144.9606009!3d-37.8057399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cce1316e83%3A0x331340e7ec98bf9f!2s555+Swanston+St%2C+Carlton+VIC+3053!5e0!3m2!1szh-CN!2sau!4v1530166214539" 
    width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>