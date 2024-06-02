<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path( __FILE__ ) . 'header/plugin-header.php' );
?>
	<div class="aet-section-left">
		<div class="dotstore-upgrade-dashboard">
			<div class="premium-benefits-section">
				<h2><?php esc_html_e( 'Go Premium to Increase Profitability', 'advance-ecommerce-tracking' ); ?></h2>
				<p><?php esc_html_e( 'Three Benefits for Upgrading to Premium', 'advance-ecommerce-tracking' ); ?></p>
				<div class="premium-features-boxes">
					<div class="feature-box">
						<span><?php esc_html_e('01', 'advance-ecommerce-tracking'); ?></span>
						<h3><?php esc_html_e('Detailed eCommerce Tracking', 'advance-ecommerce-tracking'); ?></h3>
						<p><?php esc_html_e('Track each step of your customer’s journey with comprehensive tracking of product impressions, clicks, add to cart, checkout, and purchases.', 'advance-ecommerce-tracking'); ?></p>
					</div>
					<div class="feature-box">
						<span><?php esc_html_e('02', 'advance-ecommerce-tracking'); ?></span>
						<h3><?php esc_html_e('Custom dimensions and metrics', 'advance-ecommerce-tracking'); ?></h3>
						<p><?php esc_html_e('Set up custom dimensions and metrics to track additional information about your products, customers, and transactions.', 'advance-ecommerce-tracking'); ?></p>
					</div>
					<div class="feature-box">
						<span><?php esc_html_e('03', 'advance-ecommerce-tracking'); ?></span>
						<h3><?php esc_html_e('Dynamic remarketing', 'advance-ecommerce-tracking'); ?></h3>
						<p><?php esc_html_e('Benefit from rich visitor insights: Demographics Reports reveal data on country, city, gender, language, interests, and age.', 'advance-ecommerce-tracking'); ?></p>
					</div>
				</div>
			</div>
			<div class="premium-benefits-section unlock-premium-features">
				<p><span><?php esc_html_e( 'Unlock Premium Features', 'advance-ecommerce-tracking' ); ?></span></p>
				<div class="premium-features-boxes">
					<div class="feature-box">
						<h3><?php esc_html_e('Advanced eCommerce Analytics Tracking', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-cogs"></i></span>
						<p><?php esc_html_e('Seamlessly integrate your Google Analytics-4 setup with the WooCommerce store.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-one-img.png'); ?>" alt="<?php echo esc_attr('WooCommerce Dynamic Extra Fees', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Allows the flexibility to connect Google Analytics 4 and enable  Enhanced eCommerce event tracking.', 'advance-ecommerce-tracking'); ?></p>
												<ul>
													<li><?php esc_html_e('Connect with an automatic wizard.', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('Add manual GA4 id to start.', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('Enable eCommerce event tracking.', 'advance-ecommerce-tracking'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Track Performance of Custom Events', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-location-arrow"></i></span>
						<p><?php esc_html_e('Add your events and track them for different Google Analytics parameters.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-two-img.png'); ?>" alt="<?php echo esc_attr('Location-Based Conditional Fees', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Activate eCommerce data collection for transaction, revenue, and product actions in your Google Analytics account.', 'advance-ecommerce-tracking'); ?></p>
												<ul>
													<li><?php esc_html_e('Track user purchase journey with predefined events', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('Analyze user interactions from cart to purchase for insights.', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('Create your custom events.', 'advance-ecommerce-tracking'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Improve Shopping Experience', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-shopping-cart"></i></span>
						<p><?php esc_html_e('Say goodbye to guessing user behavior. Track the actual behavior of your customers and visitors in detail.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-three-img.png'); ?>" alt="<?php echo esc_attr('User Role-Based Checkout Fees', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Optimize the shopping experience using a variety of reports available in GA4.', 'advance-ecommerce-tracking'); ?></p>
												<ul>
													<li><?php esc_html_e('Check user and Traffic acquisition.', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('User engagement and monetization.', 'advance-ecommerce-tracking'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Analyze All Essential Performance Metrics', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-bar-chart"></i></span>
						<p><?php esc_html_e('Map the user journey with insights about the tinies of data points. Track search queries, comments, anonymized analytics data, and more.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-four-img.png'); ?>" alt="<?php echo esc_attr('Percentage Fees Based On Product Quantity', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php echo sprintf( esc_html__('GA4 empowers you to analyze all essential performance metrics, enabling data-driven decision-making.', 'advance-ecommerce-tracking'), 2 ); ?></p>
												<ul>
													<li><?php esc_html_e('Search Tracking, Track 404 (Not found) Errors', 'advance-ecommerce-tracking'); ?></li>
													<li><?php echo sprintf( esc_html__('File Downloads, Enhanced Link Attribution, User ID Tracking, Form Tracking', 'advance-ecommerce-tracking'), 3, 2 ); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Role-Based Exclusion', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-users"></i></span>
						<p><?php esc_html_e('Control tracking, ensuring privacy compliance and data protection for specific user roles.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-five-img.png'); ?>" alt="<?php echo esc_attr('Free Shipping Based Check-Out Fees', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Find the role-based tracking exclusion in e-commerce tracking.', 'advance-ecommerce-tracking'); ?></p>
												<ul>
													<li><?php esc_html_e('A predefined list of all user roles', 'advance-ecommerce-tracking'); ?></li>
													<li><?php esc_html_e('Checkbox to exclude multiple user roles.', 'advance-ecommerce-tracking'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Advanced Features', 'advance-ecommerce-tracking'); ?></h3>
						<span><i class="fa fa-clock-o"></i></span>
						<p><?php esc_html_e('Enable GA Opt-out, Demographics and Interest Reports, Search Tracking, IP Anonymization, and more.', 'advance-ecommerce-tracking'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'advance-ecommerce-tracking'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(AET_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-six-img.png'); ?>" alt="<?php echo esc_attr('Payment Gateway-Based Extra Fees', 'advance-ecommerce-tracking'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Unlock GA4\'s Advanced Features for In-Depth Analytics and Insights.', 'advance-ecommerce-tracking'); ?></p>
												<ul>
													<li><?php echo sprintf( esc_html__('Easily enable or disable the tracking advance features.', 'advance-ecommerce-tracking'), 2 ); ?></li>
													<li><?php esc_html_e('Effortlessly Manage GA4 Tracking Features via Backend Options for Enhanced Analytics Control.', 'advance-ecommerce-tracking'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="upgrade-to-premium-btn">
				<a href="<?php echo esc_url('https://bit.ly/3RTvw4i') ?>" target="_blank" class="button button-primary"><?php esc_html_e('Upgrade to Premium', 'advance-ecommerce-tracking'); ?><svg id="Group_52548" data-name="Group 52548" xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 27.263 24.368"><path id="Path_199491" data-name="Path 199491" d="M333.833,428.628a1.091,1.091,0,0,1-1.092,1.092H316.758a1.092,1.092,0,1,1,0-2.183h15.984a1.091,1.091,0,0,1,1.091,1.092Z" transform="translate(-311.117 -405.352)" fill="#fff"></path><path id="Path_199492" data-name="Path 199492" d="M312.276,284.423h0a1.089,1.089,0,0,0-1.213-.056l-6.684,4.047-4.341-7.668a1.093,1.093,0,0,0-1.9,0l-4.341,7.668-6.684-4.047a1.091,1.091,0,0,0-1.623,1.2l3.366,13.365a1.091,1.091,0,0,0,1.058.825h18.349a1.09,1.09,0,0,0,1.058-.825l3.365-13.365A1.088,1.088,0,0,0,312.276,284.423Zm-4.864,13.151H290.764l-2.509-9.964,5.373,3.253a1.092,1.092,0,0,0,1.515-.4l3.944-6.969,3.945,6.968a1.092,1.092,0,0,0,1.515.4l5.373-3.253Z" transform="translate(-285.455 -280.192)" fill="#fff"></path></svg></a>
			</div>
		</div>
	</div>
	</div>