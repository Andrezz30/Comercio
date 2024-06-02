<?php

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
$plugin_name = AET_PLUGIN_NAME;
$plugin_version = AET_VERSION;
$aet_admin_object = new Advance_Ecommerce_Tracking_Admin('', '');
$version_label = '';
$plugin_slug = '';
$version_label = __( 'Free', 'advance-ecommerce-tracking' );
$plugin_slug = 'basic_e_tracking';
$current_page = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$aet_settings_menu = ( isset( $current_page ) && ('aet-get-started' === $current_page || 'aet-information' === $current_page) || !(aet_fs()->is__premium_only() && aet_fs()->can_use_premium_code()) && 'aet-et-settings-account' === $current_page ? 'active' : '' );
$aet_get_started = ( isset( $current_page ) && 'aet-get-started' === $current_page ? 'active' : '' );
$whsm_quick_info = ( isset( $current_page ) && 'aet-information' === $current_page ? 'active' : '' );
$aet_account_page = ( isset( $current_page ) && 'aet-et-settings-account' === $current_page ? 'active' : '' );
$whsm_display_submenu = ( !empty( $aet_settings_menu ) && 'active' === $aet_settings_menu ? 'display:inline-block' : 'display:none' );
$aet_admin_object = new Advance_Ecommerce_Tracking_Admin('', '');
?>
<div id="dotsstoremain">
	<div class="all-pad">
        <?php 
$aet_admin_object->aet_get_promotional_bar( $plugin_slug );
?>
		<header class="dots-header">
			<div class="dots-plugin-details">
				<div class="dots-header-left">
					<div class="dots-logo-main">
						<img src="<?php 
echo esc_url( AET_PLUGIN_URL . 'admin/images/WSFL-1.png' );
?>">
					</div>
					<div class="plugin-name">
						<div class="title"><?php 
esc_html_e( $plugin_name, 'advance-ecommerce-tracking' );
?></div>
					</div>
					<span class="version-label"><?php 
esc_html_e( $version_label, 'advance-ecommerce-tracking' );
?></span>
                    <span class="version-number"><?php 
echo esc_html_e( $plugin_version, 'advance-ecommerce-tracking' );
?></span>
				</div>
				<div class="dots-header-right">
                    <div class="button-dots">
                        <a target="_blank" href="<?php 
echo esc_url( 'http://www.thedotstore.com/support/' );
?>"><?php 
esc_html_e( 'Support', 'advance-ecommerce-tracking' );
?></a>
                    </div>
                    <div class="button-dots">
                        <a target="_blank" href="<?php 
echo esc_url( 'https://www.thedotstore.com/feature-requests/' );
?>"><?php 
esc_html_e( 'Suggest', 'advance-ecommerce-tracking' );
?></a>
                    </div>
                    <?php 
$plugin_help_url = 'https://docs.thedotstore.com/category/545-premium-plugin-settings';
if ( strpos( current_filter(), 'fs_connect' ) !== false ) {
    $plugin_help_url = 'https://docs.thedotstore.com/category/545-premium-plugin-settings';
}
?>
                    <div class="button-dots <?php 
echo ( aet_fs()->is__premium_only() && aet_fs()->can_use_premium_code() ? '' : 'last-link-button' );
?>">
                        <a target="_blank" href="<?php 
echo esc_url( $plugin_help_url );
?>"><?php 
esc_html_e( 'Help', 'advance-ecommerce-tracking' );
?></a>
                    </div>

                    <div class="button-dots">
                        <?php 
?>
                            <a class="dots-upgrade-btn" target="_blank" href="<?php 
echo esc_url( aet_fs()->get_upgrade_url() );
?>"><?php 
esc_html_e( 'Upgrade', 'advance-ecommerce-tracking' );
?></a>
                            <?php 
?>
                    </div>		
				</div>
			</div>
			<?php 
$current_page = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$aet_admin_object->aet_menus( $current_page );
?>
		</header>
        <div class="dots-settings-inner-main">
            <div class="dots-settings-left-side">
                <div class="dotstore-submenu-items" style="<?php 
echo esc_attr( $whsm_display_submenu );
?>">
                    <ul>
                        <li><a class="<?php 
echo esc_attr( $aet_get_started );
?>" href="<?php 
echo esc_url( add_query_arg( array(
    'page' => 'aet-get-started',
), admin_url( 'admin.php' ) ) );
?>"><?php 
esc_html_e( 'About', 'advance-ecommerce-tracking' );
?></a></li>
                        <li><a class="<?php 
echo esc_attr( $whsm_quick_info );
?>" href="<?php 
echo esc_url( add_query_arg( array(
    'page' => 'aet-information',
), admin_url( 'admin.php' ) ) );
?>"><?php 
esc_html_e( 'Quick info', 'advance-ecommerce-tracking' );
?></a></li>
                        <?php 
if ( !(aet_fs()->is__premium_only() && aet_fs()->can_use_premium_code()) ) {
    $check_account_page_exist = menu_page_url( 'aet-et-settings-account', false );
    if ( isset( $check_account_page_exist ) && !empty( $check_account_page_exist ) ) {
        ?>
                                <li>
                                    <a class="<?php 
        echo esc_attr( $aet_account_page );
        ?>" href="<?php 
        echo esc_url( aet_fs()->get_account_url() );
        ?>"><?php 
        esc_html_e( 'Account', 'advance-ecommerce-tracking' );
        ?></a>
                                </li>
                                <?php 
    }
}
?>
                        <li><a href="<?php 
echo esc_url( 'https://www.thedotstore.com/plugins/' );
?>" target="_blank"><?php 
esc_html_e( 'Shop Plugins', 'advance-ecommerce-tracking' );
?></a></li>
                    </ul>
                </div>
                <hr class="wp-header-end" />