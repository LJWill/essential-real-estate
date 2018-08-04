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
        <label><input for="property_homestay" value="1" type="radio" name="property_homestay"><?php esc_html_e('Yes', 'essential-real-estate'); ?></label>
    </div>
    <div class="radio">
        <label><input for="property_homestay" value="0" type="radio" name="property_homestay"><?php esc_html_e('No', 'essential-real-estate'); ?></label>
    </div>

    <br>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e('How many rooms are you leasing out?', 'essential-real-estate'); ?></h2>
    </div>
    <div class="property-fields property-detail row">
        <div class="col-sm-4">
            <div class="form-group">
                <label
                    for="property_leasing_std"><?php echo esc_html__('Standard Bedroom', 'essential-real-estate') . ere_required_field('property_leasing_std'); ?></label>
                <input type="number" id="property_leasing_std" class="form-control" name="property_leasing_std" value="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label
                    for="property_leasing_master"><?php echo esc_html__('Master Room with Ensuite', 'essential-real-estate') . ere_required_field('property_leasing_master'); ?></label>
                <input type="number" id="property_leasing_master" class="form-control" name="property_leasing_master" value="">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label
                    for="property_leasing_entire"><?php echo esc_html__('Entire House/Apartment', 'essential-real-estate') . ere_required_field('property_leasing_entire'); ?></label>
                <input type="number" id="property_leasing_entire" class="form-control" name="property_leasing_entire" value="">
            </div>
        </div>
    </div>

    <br>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e('For your master room with ensuite, do you accept couples?', 'essential-real-estate'); ?></h2>
    </div>
    <div class="radio">
        <label><input for="property_leasing_master_couple" value="1" type="radio" name="property_leasing_master_couple"><?php esc_html_e('Yes', 'essential-real-estate'); ?></label>
    </div>
    <div class="radio">
        <label><input for="property_leasing_master_couple" value="0" type="radio" name="property_leasing_master_couple"><?php esc_html_e('No', 'essential-real-estate'); ?></label>
    </div>

    <br>

    <?php  
    $property_leaseterm = get_categories(array(
        'taxonomy'  => 'property-leaseterm',
        'hide_empty' => 0,
        'orderby' => 'term_id',
        'order' => 'ASC'
    ));
    foreach ($property_leaseterm as $term) {
        if (0 == $term->parent) $parents_items[] = $term;
    };
    echo '<div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">';
    echo '<h2>' . esc_html__( 'Lease Term', 'essential-real-estate' ). '</h2>';
    echo '</div>';
    foreach ($parents_items as $parents_item) {
        echo '<div class="radio"><label>';
        echo '<input type="radio" name="property_leaseterm" value="' . esc_attr($parents_item->term_id) . '" />';
        echo esc_html($parents_item->name);
        echo '</label></div>';
    };
    ?>
    <div class="property-fields property-detail row">
        <div class="col-sm-4">
            <div class="form-group">
                <label
                    for="property_leaseterm_other"><?php echo esc_html__('If you choose other, please specify', 'essential-real-estate') . ere_required_field('property_leaseterm_other'); ?></label>
                <input type="text" id="property_leaseterm_other" class="form-control" name="property_leaseterm_other" value="">
            </div>
        </div>
    </div>
</div>