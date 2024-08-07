<?php
/**
 * Settings Page
 *
 * @link       https://webappick.com/
 * @since      1.0.0
 * @version    1.0.1
 *
 * @package    Woo_Feed
 * @subpackage Woo_Feed/admin/partial
 * @author     Ohidul Islam <wahid@webappick.com>
 */
$settings = woo_feed_get_options( 'all' );
?>
<div class="wrap wapk-admin">
	<div class="wapk-section">
		<h1 class="wp-heading-inline"><?php esc_html_e( 'Settings', 'woo-feed' ); ?></h1>
		<hr class="wp-header-end">
		<?php WPFFWMessage()->displayMessages(); ?>
		<form action="" method="post" autocomplete="off">
			<?php wp_nonce_field( 'woo-feed-config' ); ?>
			<table class="widefat fixed" role="presentation">
				<thead>
				<tr>
					<th colspan="2">
                        <b><?php esc_html_e( 'Common Settings', 'woo-feed' ); ?></b>
                        <span style="float: right;">
                            <?php
                            esc_html_e( 'Version ', 'woo-feed' );
                            $version = defined('WOO_FEED_PRO_VERSION') ? WOO_FEED_PRO_VERSION : WOO_FEED_FREE_VERSION;
                            echo esc_html( $version );
                            ?>
                        </span>
                    </th>
				</tr>
				</thead>
				<tbody>
				<?php do_action( 'woo_feed_before_settings_page_fields' ); ?>
				<tr>
					<th scope="row"><label for="batch_limit"><?php esc_html_e( 'Product per batch', 'woo-feed' ); ?></label></th>
					<td>
						<input class="regular-text" type="number" min="1" name="batch_limit" id="batch_limit" value="<?php echo esc_attr( $settings['per_batch'] ); ?>">
						<p class="description"><?php esc_html_e( 'Don\'t change the value if you are not sure about this. Plugin may fail to make feed.', 'woo-feed' ); ?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="product_query_type"><?php esc_html_e( 'Product Query Type', 'woo-feed' ); ?></label></th>
					<td>
						<select name="product_query_type" id="product_query_type">
							<?php foreach ( woo_feed_get_query_type_options() as $k => $v ) { ?>
							<option value="<?php echo esc_attr( $k ); ?>" <?php selected( $settings['product_query_type'], $k ); ?> ><?php echo esc_html( $v ); ?></option>
							<?php } ?>
						</select>
						<p class="description"><?php esc_html_e( 'Don\'t change the value if you are not sure about this. Plugin may fail to make feed.', 'woo-feed' ); ?></p>
					</td>
				</tr>
                <tr>
                    <th scope="row"><label for="variation_query_type"><?php esc_html_e( 'Variation Query Type', 'woo-feed' ); ?></label></th>
                    <td>
                        <select name="variation_query_type" id="variation_query_type">
                            <?php foreach ( woo_feed_get_query_type_options('variation') as $k => $v ) { ?>
                                <option value="<?php echo esc_attr( $k ); ?>" <?php selected( $settings['variation_query_type'], $k ); ?> ><?php echo esc_html( $v ); ?></option>
                            <?php } ?>
                        </select>
                        <p class="description"><?php esc_html_e( 'Don\'t change the value if you are not sure about this. Plugin may fail to make feed.', 'woo-feed' ); ?></p>
                    </td>
                </tr>
				<tr>
					<th scope="row"><label for="enable_error_debugging"><?php esc_html_e( 'Debug Mode', 'woo-feed' ); ?></label>
					</th>
					<td>
						<select name="enable_error_debugging" id="enable_error_debugging">
							<option value="off"<?php selected( $settings['enable_error_debugging'], 'off' ); ?>><?php esc_html_e( 'Off', 'woo-feed' ); ?></option>
							<option value="on"<?php selected( $settings['enable_error_debugging'], 'on' ); ?>><?php esc_html_e( 'On', 'woo-feed' ); ?></option>
						</select>
						<label for="clear_all_logs">
							<input type="checkbox" name="clear_all_logs" id="clear_all_logs" value="on"><?php esc_html_e( 'Clear All Log Data', 'woo-feed' ); ?>
						</label>
						<p class="description" style="font-size: smaller;color: #ea3d3d;font-weight: bold;"><?php esc_html_e( 'Enabling Logging will decrease performance of feed generation.', 'woo-feed' ); ?></p>
					</td>
				</tr>
				<tr>
					<td><label for="opt_in"><?php esc_html_e( 'Send Debug Info', 'woo-feed' ); ?></label></td>
					<td>
						<label for="opt_in">
							<input type="checkbox" id="opt_in" name="opt_in" value="on" <?php checked( WooFeedWebAppickAPI::getInstance()->is_tracking_allowed(), true ); ?>> <?php esc_html_e( 'Allow CTXFeed To Collect Debug Info.', 'woo-feed' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'To opt out, leave this box unchecked. Your Feed Data remains un-tracked, and no data will be collected. No sensitive data is tracked.', 'woo-feed' ); ?><br><a href="#" data-toggle_slide=".tracker_collection_list"><?php esc_html_e( 'See What We Collect.', 'woo-feed' ); ?></a></p>
						<ul class="tracker_collection_list" style="display: none;">
							<li>
                            <?php
								// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								echo implode( '</li><li>', WooFeedWebAppickAPI::getInstance()->get_data_collection_description() );
							?>
                            </li>
						</ul>
					</td>
				</tr>
				<tr>
					<td><label for="cache_ttl"><?php esc_html_e( 'CTXFeed Cache TTL', 'woo-feed' ); ?></label></td>
					<td>
						<select name="cache_ttl" id="cache_ttl">
							<?php foreach ( woo_feed_get_cache_ttl_options() as $k => $v ) { ?>
								<option value="<?php echo esc_attr( $k ); ?>"<?php selected( $settings['cache_ttl'], $k ); ?>><?php echo esc_html( $v ); ?></option>
							<?php } ?>
						</select>
						<label for="purge_feed_cache">
							<input type="checkbox" name="purge_feed_cache" id="purge_feed_cache" value="1"> <?php esc_html_e( 'Purge Cache Now', 'woo-feed' ); ?>
						</label>
						<p class="description"><?php esc_html_e( 'When to expire the Cache.', 'woo-feed' ); ?></p>
					</td>
				</tr>
                <tr>
                    <td><label for="overridden_structured_data"><?php esc_html_e( 'WooCommerce Default Schema Override ', 'woo-feed' ); ?></label></td>
                    <td>
                        <label for="overridden_structured_data">
                            <select name="overridden_structured_data" id="overridden_structured_data">
                                <option value="off"<?php selected( $settings['overridden_structured_data'], 'off' ); ?>><?php esc_html_e( 'Off', 'woo-feed' ); ?></option>
                                <option value="on"<?php selected( $settings['overridden_structured_data'], 'on' ); ?>><?php esc_html_e( 'On', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Turn off when you don\'t want to override default WooCommerce Product Schema', 'woo-feed' ); ?></p>
                    </td>
                </tr>

                <!-- Facebook Pixel settings-->
                <tr>
                    <td><label for="disable_pixel"><?php esc_html_e( 'Disable/Enable Facebook Pixel', 'woo-feed' ); ?></label></td>
                    <td>
                        <label for="disable_pixel">
                            <select name="disable_pixel" id="disable_pixel">
                                <option value="disable"<?php selected( $settings['disable_pixel'], 'disable' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="enable"<?php selected( $settings['disable_pixel'], 'enable' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disables or Enables Facebook Pixel ID’s for Variation', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="pixel_id"><?php esc_html_e( 'Facebook Pixel ID', 'woo-feed' ); ?></label></th>
                    <td>
                        <input class="regular-text" type="number" name="pixel_id" id="pixel_id" value="<?php echo esc_attr( $settings['pixel_id'] ); ?>">
                        <p class="description"><?php esc_html_e( 'Insert your Facebook Pixel ID', 'woo-feed' ); ?></p>
                    </td>
                </tr>

                <!-- Google Remarketing settings-->
                <tr>
                    <td><label for="disable_remarketing"><?php esc_html_e( 'Disable/Enable Google Remarketing', 'woo-feed' ); ?></label></td>
                    <td>
                        <label for="disable_pixel">
                            <select name="disable_remarketing" id="disable_remarketing">
                                <option value="disable"<?php selected( $settings['disable_remarketing'], 'disable' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="enable"<?php selected( $settings['disable_remarketing'], 'enable' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disables or Enables Google Remarketing', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="remarketing_id"><?php esc_html_e( 'Google Remarketing ID', 'woo-feed' ); ?></label></th>
                    <td>
                        <input class="regular-text" type="text" name="remarketing_id" id="remarketing_id" value="<?php echo esc_attr( $settings['remarketing_id'] ); ?>">
                        <p class="description"><?php esc_html_e( 'Insert your Google Remarketing ID', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="remarketing_label"><?php esc_html_e( 'Google Remarketing Label', 'woo-feed' ); ?></label></th>
                    <td>
                        <input class="regular-text" type="text" name="remarketing_label" id="remarketing_label" value="<?php echo esc_attr( $settings['remarketing_label'] ); ?>">
                        <p class="description"><?php esc_html_e( 'Insert your Google Remarketing Label', 'woo-feed' ); ?></p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="allow_all_shipping"><?php esc_html_e( 'Add Shipping/Tax info for all countries to feed (Google Shopping)', 'woo-feed' ); ?></label></th>
                    <td>
                        <label for="allow_all_shipping">
                            <select name="allow_all_shipping" id="allow_all_shipping">
                                <option value="no" <?php selected( $settings['allow_all_shipping'], 'no' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="yes" <?php selected( $settings['allow_all_shipping'], 'yes' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disable or Enable all shipping to feed', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr style="display: none;">
                    <th scope="row"><label for="only_free_shipping"><?php esc_html_e( 'Remove all other shipping classes when free shipping criteria are met (Google Shopping / Facebook only)', 'woo-feed' ); ?></label></th>
                    <td>
                        <label for="only_free_shipping">
                            <select name="only_free_shipping" id="only_free_shipping">
                                <option value="no" <?php selected( $settings['only_free_shipping'], 'no' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="yes" <?php selected( $settings['only_free_shipping'], 'yes' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disable or Enable all shipping when free shipping is exists', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="only_local_pickup_shipping"><?php esc_html_e( 'Remove the local pickup shipping zone from feed (Google Shopping)', 'woo-feed' ); ?></label></th>
                    <td>
                        <label for="only_local_pickup_shipping">
                            <select name="only_local_pickup_shipping" id="only_local_pickup_shipping">
                                <option value="no" <?php selected( $settings['only_local_pickup_shipping'], 'no' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="yes" <?php selected( $settings['only_local_pickup_shipping'], 'yes' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disable or Enable all shipping when local pickup shipping is exists', 'woo-feed' ); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="enable_ftp_upload"><?php esc_html_e( 'Enable FTP Upload', 'woo-feed' ); ?></label></th>
                    <td>
                        <label for="enable_ftp_upload">
                            <select name="enable_ftp_upload" id="enable_ftp_upload">
                                <option value="no" <?php selected( $settings['enable_ftp_upload'], 'no' ); ?>><?php esc_html_e( 'Disabled', 'woo-feed' ); ?></option>
                                <option value="yes" <?php selected( $settings['enable_ftp_upload'], 'yes' ); ?>><?php esc_html_e( 'Enabled', 'woo-feed' ); ?></option>
                            </select>
                        </label>
                        <p class="description"><?php esc_html_e( 'Disable or Enable FTP upload setting', 'woo-feed' ); ?></p>
                    </td>
                </tr>

				<?php do_action( 'woo_feed_after_settings_page_fields' ); ?>
				<tr>
					<td colspan="2">
						<p class="submit" style="text-align: left; padding: 8px 10px; width:50%; float:right;">
							<input type="submit" class="button button-primary woo-feed-btn-bg-gradient-blue" name="wa_woo_feed_config" value="<?php esc_attr_e( 'Save Changes', 'woo-feed' ); ?>">
						</p>
					</td>
				</tr>
				</tbody>
			</table>
            <br><br>
            <table class="widefat fixed woofeed-custom-fields" role="presentation">
                <thread>
                    <tr style="box-shadow: 0 1px #c3c4c7;">
                        <th><b><?php esc_html_e( 'Custom Fields', 'woo-feed' ); ?></b></th>
                        <th style="float:right"><b><?php esc_html_e( 'Action', 'woo-feed') ?></b></th>
                    </tr>
                </thread>
                <tbody>

                <?php
                $custom_fields = woo_feed_product_custom_fields();
                if ( is_array( $custom_fields ) && ! empty( $custom_fields ) ) {
                    $get_settings = woo_feed_get_options('all');
                    if ( isset( $get_settings['woo_feed_taxonomy'], $get_settings['woo_feed_identifier'] ) ) {
                        $custom_attributes = array_merge( $get_settings['woo_feed_taxonomy'], $get_settings['woo_feed_identifier'] );
                    }

                    foreach ( $custom_fields as $key => $value ) {
                        $custom_field_id = sprintf( '%s-switcher', strtolower( $key ) );
                        $custom_field_name = isset( $value[0] ) ? sanitize_text_field( $value[0] ) : '';
                        $is_enable = isset( $custom_attributes[ $key ] ) ? 'enable' === $custom_attributes[ $key ] : ( isset( $value[1] ) ? $value[1] : false );
                        $is_taxonomy = isset( $value[2] ) ? $value[2] : false;
                        ?>
                        <tr style="box-shadow: 0 1px #c3c4c7;">
                            <td><label style="font-weight: bold;" for="<?php echo esc_attr( $custom_field_id ); ?>"><?php echo esc_html( $custom_field_name ); ?></label></td>
                            <td style="float:right; display: flex; align-items: center;">
                                <span style="display: none;" class="switch-loader"><i class="dashicons dashicons-sos wpf_spin"></i></span>
                                <label class="switch">
                                    <input type="checkbox" id="<?php echo esc_attr( $custom_field_id ); ?>" <?php
                                    echo esc_attr( sprintf( 'data-taxonomy=%s ', $is_taxonomy ? 'true' : 'false' ) ); echo $is_enable ? 'checked' : ''; ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
		</form>
	</div>
</div>
