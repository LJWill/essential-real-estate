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
<?php  
    $property_type = get_categories(array(
        'taxonomy'  => 'property-type',
        'hide_empty' => 0,
        'orderby' => 'term_id',
        'order' => 'ASC'
    ));
    foreach ($property_type as $term) {
        if (0 == $term->parent) $parents_items[] = $term;
    };
    echo '<div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">';
    echo '<h2>' . esc_html__( 'Property type', 'essential-real-estate' ). '</h2>';
    echo '</div>';
    foreach ($parents_items as $parents_item) {
        echo '<div class="radio"><label>';
        echo '<input type="radio" name="property_type" value="' . esc_attr($parents_item->term_id) . '" />';
        echo esc_html($parents_item->name);
        echo '</label></div>';
    };
    ?>

    <br>
    
    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e('Property Details', 'essential-real-estate'); ?></h2>
    </div>
    <div class="property-fields property-detail row">
        <?php if (!in_array("property_bedrooms", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_bedrooms"><?php echo esc_html__('Bedrooms', 'essential-real-estate') . ere_required_field('property_bedrooms'); ?></label>
                    <input type="number" id="property_bedrooms" class="form-control" name="property_bedrooms" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_bathrooms", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_bathrooms"><?php echo esc_html__('Bathrooms', 'essential-real-estate') . ere_required_field('property_bathrooms'); ?></label>
                    <input type="number" id="property_bathrooms" class="form-control" name="property_bathrooms" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_kitchens", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_kitchens"><?php echo esc_html__('Kitchens', 'essential-real-estate') . ere_required_field('property_kitchens'); ?></label>
                    <input type="number" id="property_kitchens" class="form-control" name="property_kitchens" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_livingrooms", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_livingrooms"><?php echo esc_html__('Kitchens', 'essential-real-estate') . ere_required_field('property_livingrooms'); ?></label>
                    <input type="number" id="property_livingrooms" class="form-control" name="property_livingrooms" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_parkings", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_parkings"><?php echo esc_html__('Parking Spots', 'essential-real-estate') . ere_required_field('property_parkings'); ?></label>
                    <input type="number" id="property_parkings" class="form-control" name="property_parkings" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_outdoor", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_outdoor"><?php echo esc_html__('Outdoor Areas', 'essential-real-estate') . ere_required_field('property_outdoors'); ?></label>
                    <input type="number" id="property_outdoor" class="form-control" name="property_outdoor" value="">
                </div>
            </div>
        <?php } ?>

        <?php if (!in_array("property_tenants", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_tenants"><?php echo esc_html__('Tenants in Total', 'essential-real-estate') . ere_required_field('property_tenants'); ?></label>
                    <input type="number" id="property_tenants" class="form-control" name="property_tenants" value="">
                </div>
            </div>
        <?php } ?>
        </div>
        
        <br>

        <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
            <h2><?php esc_html_e('Property Location', 'essential-real-estate'); ?></h2>
        </div>
        <div class="property-fields property-location row">
        <?php if (!in_array("property_unitno", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_unitno"><?php echo esc_html__('Unit Number', 'essential-real-estate') . ere_required_field('property_unitno'); ?></label>
                    <input type="text" class="form-control" name="property_unitno" id="property_unitno"
                           value="">
                </div>
            </div>
        <?php } ?>
        <?php if (!in_array("property_staddr", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label
                        for="property_staddr"><?php echo esc_html__('Address', 'essential-real-estate') . ere_required_field('property_staddr'); ?></label>
                    <input type="text" class="form-control" name="property_staddr" id="property_staddr"
                           value="">
                </div>
            </div>
        <?php } ?>
        <?php if (!in_array("state", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group ere-loading-ajax-wrap">
                    <label for="administrative_area_level_1"><?php esc_html_e('State', 'essential-real-estate'); ?></label>
                        <select name="administrative_area_level_1" id="administrative_area_level_1" class="ere-property-state-ajax form-control">
                            <?php ere_get_taxonomy('property-state', true); ?>
                        </select>
                </div>
            </div>
        <?php } ?>
        <?php if (!in_array("city", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group ere-loading-ajax-wrap">
                    <label for="city"><?php esc_html_e('Suburb', 'essential-real-estate'); ?></label>
                        <select name="locality" id="city" class="ere-property-city-ajax form-control">
                            <?php ere_get_taxonomy_slug('property-city',$default_city); ?>
                        </select>
                </div>
            </div>
        <?php } ?>
        <?php if (!in_array("postal_code", $hide_property_fields)) { ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="postcode"><?php esc_html_e('Post Code', 'essential-real-estate'); ?></label>
                    <input type="text" class="form-control" name="postcode" id="postcode">
                </div>
            </div>
        <?php } ?>
    </div>
    
</div>