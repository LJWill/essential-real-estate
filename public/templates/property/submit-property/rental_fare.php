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
        <h2><?php esc_html_e( 'Property Price', 'essential-real-estate' ); ?></h2>
    </div>
    <div class="property-fields property-price row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="property_price_short"> <?php esc_html_e( 'Price', 'essential-real-estate' ); echo ere_required_field( 'property_price' );
                    print esc_html(ere_get_option('currency_sign', '')) . ' ';?>  </label>
                <input type="number" id="property_price_short" class="form-control" name="property_price_short" value="">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="property_price_period"><?php esc_html_e('Per', 'essential-real-estate');
                    echo ere_required_field('property_price_period'); ?></label>
                <select name="property_price_period" id="property_price_period" class="form-control">
                    <option value="day"><?php esc_html_e('Day', 'essential-real-estate');?></option>
                    <option value="week"><?php esc_html_e('Week', 'essential-real-estate');?></option>
                    <option value="month"><?php esc_html_e('Month', 'essential-real-estate');?></option>
                </select>
            </div>
        </div>
    </div>

    <br>

    <div class="ere-heading-style2 mg-bottom-20 text-left property-fields-title">
        <h2><?php esc_html_e( 'Which bills are included in the rent', 'essential-real-estate' ); ?></h2>
    </div>
    <div class="checkbox">
        <label><input for="bill_water" value="1" type="checkbox" name="bill_water"><?php esc_html_e('Water', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="bill_electricity" value="1" type="checkbox" name="bill_electricity"><?php esc_html_e('Electricity', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="bill_gas" value="1" type="checkbox" name="bill_gas"><?php esc_html_e('Gas', 'essential-real-estate'); ?></label>
    </div>
    <div class="checkbox">
        <label><input for="bill_internet" value="1" type="checkbox" name="bill_internet"><?php esc_html_e('Internet', 'essential-real-estate'); ?></label>
    </div>
</div>
