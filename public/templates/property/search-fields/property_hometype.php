<?php
/**
 * Created by G5Theme.
 * User: trungpq
 * Date: 7/15/2017
 * Time: 11:20 PM
 * @var $css_class_field
 * @var $request_hometype
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <select name="hometype" title="<?php esc_html_e('Property Home Types', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <?php ere_get_taxonomy_slug('property-hometype', $request_hometype); ?>
        <option
            value="" <?php if (empty($request_hometype)) echo esc_attr('selected'); ?>>
            <?php esc_html_e('All Home Types', 'essential-real-estate') ?>
        </option>
    </select>
</div>