<?php
/**
 * Created by G5Theme.
 * User: trungpq
 * Date: 7/15/2017
 * Time: 11:20 PM
 * @var $css_class_field
 * @var $request_leaseterm
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <select name="leaseterm" title="<?php esc_html_e('Property Lease Term', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <?php ere_get_taxonomy_slug('property-leaseterm', $request_leaseterm); ?>
        <option
            value="" <?php if (empty($request_leaseterm)) echo esc_attr('selected'); ?>>
            <?php esc_html_e('All Lease Terms', 'essential-real-estate') ?>
        </option>
    </select>
</div>