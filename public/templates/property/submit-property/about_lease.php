<?php
/**
 * Created by G5Theme.
 * User: trungpq
 * Date: 18/11/16
 * Time: 5:46 PM
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $hide_property_fields;
$measurement_units = ere_get_measurement_units();
$measurement_units_land_area = ere_get_measurement_units_land_area();
?>
<div class="property-fields-wrap">
    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e('Do you host a homestay program?', 'essential-real-estate'); ?></h2>
    </div>
    <div class="radio">
        <label><input for="property_homestay" type="radio" name="homestay_option"><?php esc_html_e('Yes', 'essential-real-estate'); ?></label>
    </div>
    <div class="radio">
        <label><input value="property_homestay" type="radio" name="homestay_option"
                checked="checked"><?php esc_html_e('No', 'essential-real-estate'); ?></label>
    </div>

    <br>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e('How many rooms are you leasing out?', 'essential-real-estate'); ?></h2>
    </div>
    <div class="property-fields property-detail row">
        <?php if (!in_array("property_size", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_size"><?php printf(__('Size (%s) %s', 'essential-real-estate'), $measurement_units, ere_required_field('property_size')); ?></label>
                    <input type="number" id="property_size" class="form-control" name="property_size" value="">
                </div>
            </div>
        <?php } ?>
    </div>
</div>