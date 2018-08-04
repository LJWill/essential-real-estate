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
?>
<div class="property-fields-wrap">
<?php
    $property_features = get_categories(array(
        'taxonomy'  => 'property-feature',
        'hide_empty' => 0,
        'orderby' => 'term_id',
        'order' => 'ASC'
    ));
    $parents_items=$child_items=array();
    if ($property_features) {
        foreach ($property_features as $term) {
            if (0 == $term->parent) $parents_items[] = $term;
            if ($term->parent) $child_items[] = $term;
        };
        if (is_taxonomy_hierarchical('property-feature') && count($child_items)>0) {
            foreach ($parents_items as $parents_item) {
                echo '<div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">';
                echo '<h2>' . $parents_item->name . '</h2>';
                echo '</div>';
                echo '<div class="property-fields property-feature row">';
                foreach ($child_items as $child_item) {
                    if ($child_item->parent == $parents_item->term_id) {
                        echo '<div class="col-sm-3"><div class="checkbox"><label>';
                        echo '<input type="checkbox" name="property_feature[]" value="' . esc_attr($child_item->term_id) . '" />';
                        echo esc_html($child_item->name);
                        echo '</label></div></div>';
                    };
                };
                echo '</div>';
            };
        } else {
            echo '<div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">';
            echo '<h2>' . esc_html__( 'Check all that applies', 'essential-real-estate' ). '</h2>';
            echo '</div>';
            echo '<div class="property-fields property-feature row">';
            foreach ($parents_items as $parents_item) {
                echo '<div class="col-sm-3"><div class="checkbox"><label>';
                echo '<input type="checkbox" name="property_feature[]" value="' . esc_attr($parents_item->term_id) . '" />';
                echo esc_html($parents_item->name);
                echo '</label></div></div>';
            };
            echo '</div>';
        };
    };
    ?>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e( 'Do you provide any of the following services', 'essential-real-estate' ); ?></h2>
    </div>
    <div class="checkbox">
        <label><input for="service_laundry" value="1" type="checkbox" name="service_laundry"><?php esc_html_e('Laundry', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="service_meals" value="1" type="checkbox" name="service_meals"><?php esc_html_e('Meals', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="service_cleaning" value="1" type="checkbox" name="service_cleaning"><?php esc_html_e('Cleaning', 'essential-real-estate'); ?></label>
    </div>
</div>
