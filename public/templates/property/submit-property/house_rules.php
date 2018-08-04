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
    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e( 'Which bills are included in the rent', 'essential-real-estate' ); ?></h2>
    </div>
    <div class="checkbox">
        <label><input for="houserule_nopets" value="1" type="checkbox" name="houserule_nopets"><?php esc_html_e('No pets', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="houserule_nosmoking" value="1" type="checkbox" name="houserule_nosmoking"><?php esc_html_e('No smoking', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="houserule_femaleonly" value="1" type="checkbox" name="houserule_femaleonly"><?php esc_html_e('Female only', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="houserule_maleonly" value="1" type="checkbox" name="houserule_maleonly"><?php esc_html_e('Male only', 'essential-real-estate'); ?></label>
    </div>

    <br>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e( 'Houserule Description', 'essential-real-estate' ); ?></h2>
    </div>
    <?php
    $content = '';
    $editor_id = 'houserule_desc';
    $settings = array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_name' => $editor_id,
        'textarea_rows' => get_option('default_post_edit_rows', 10),
        'tabindex' => '',
        'editor_css' => '',
        'editor_class' => '',
        'teeny' => false,
        'dfw' => false,
        'tinymce' => true,
        'quicktags' => true
    );
    wp_editor($content, $editor_id, $settings); ?>
</div>
