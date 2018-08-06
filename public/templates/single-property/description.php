<?php
/**
 * Created by G5Theme.
 * User: trungpq
 * Date: 15/08/2017
 * Time: 08:14 AM
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$content = get_the_content();
if (isset($content) && !empty($content)): ?>
<!-- <div class="ere-heading-style2 mg-bottom-35 text-left">
    <h2><?php esc_html_e( 'Description', 'essential-real-estate' ); ?></h2>
</div>
<div class="property-description mg-bottom-45 sm-mg-bottom-25">
    <?php the_content(); ?>
</div> -->

<style>
    .my-border {
        border-radius: 10px;
    }
</style>
<div class="card my-border pl-5 pr-5 shadow p-3 mb-5 bg-white">
        <div class="card-body mt-3 ">
            <h5 class="card-title"><h2><?php esc_html_e( 'Place Details', 'essential-real-estate' ); ?></h2></h5>
            <p class="card-text">
                <div class="property-description mg-bottom-45 sm-mg-bottom-25">
                    <?php the_content(); ?>
                </div>
            </p>

            <!-- add a verified logic here -->
            <h6>
                <img class="vc_single_image-img style-svg" src="http://univoyage.com.au/wp-content/uploads/2018/06/check.svg" alt="check" title="check" width="20" height="24">
                This is a fully verified and trusted property. We've verified the host's identification and the property.
                </img>
            </h6>

        </div>
</div>


<?php endif; ?>