<?php
//about theme info
add_action( 'admin_menu', 'online_food_delivery_gettingstarted' );
function online_food_delivery_gettingstarted() {    	
	add_theme_page( esc_html__('Theme Demo Content', 'online-food-delivery'), esc_html__('Theme Demo Content', 'online-food-delivery'), 'edit_theme_options', 'online_food_delivery_guide', 'online_food_delivery_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function online_food_delivery_admin_theme_style() {
   wp_enqueue_style('online-food-delivery-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'online_food_delivery_admin_theme_style');

//guidline for about theme
function online_food_delivery_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'online-food-delivery' );
?>

<div class="wrapper-info">  
	<div id="tc-header">
		<div class="tc-container main-header">
			<a class="tc-logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</a>
			<span class="tc-header-action">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customize', 'online-food-delivery'); ?></a>
			<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'online-food-delivery' ); ?></a>
			<a href="<?php echo esc_url( 'https://www.themescaliber.com/products/food-ordering-wordpress-theme'); ?>" target="_blank"> <?php esc_html_e( 'Get Premium', 'online-food-delivery' ); ?></a>
			<a href="<?php echo esc_url( 'https://www.themescaliber.com/products/wordpress-theme-bundle' ); ?>" class="bundle_btn" target="_blank"> <?php esc_html_e( 'Bundle of 220+ Themes at $99', 'online-food-delivery' ); ?></a>
			</span>
		</div>
	</div>
	<div class="tc-container tab-sec">
		<div class="tc-tabs">
			<ul>
				<li class="tablinks home active" onclick="online_food_delivery_openCity(event, 'tc_demo')">
					<a href="#">
						<?php esc_html_e( 'Theme Demo Import', 'online-food-delivery' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="online_food_delivery_openCity(event, 'tc_index')">
					<a href="#">
						<?php esc_html_e( 'Free Theme Information', 'online-food-delivery' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="online_food_delivery_openCity(event, 'tc_pro')">
					<a href="#">
						<?php esc_html_e( 'Premium Theme Information', 'online-food-delivery' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="online_food_delivery_openCity(event, 'tc_create')">
					<a href="#">
						<?php esc_html_e( 'Theme Support', 'online-food-delivery' ); ?>
					</a>
				</li>
			</ul>
		</div><!-- END .tc-tabs -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_demo" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to Online food delivery', 'online-food-delivery' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
				<hr>
				<div class="demo">
					<h4><?php esc_html_e( 'Click the "Run Importer" button below to load demo content for Online food delivery', 'online-food-delivery' ); ?></h4>
					<?php /* Demo Import */ require get_parent_theme_file_path( '/inc/dashboard/demo-importer.php' );?>
				</div>
			</div><!-- END .tc-section -->
		</div>
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_index" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to Online food delivery Theme', 'online-food-delivery' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
				<hr>
				<div class="info-link">
					<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'online-food-delivery' ); ?></a>
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'online-food-delivery'); ?></a>
					<a class="get-pro" href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'online-food-delivery'); ?></a>
				</div>
				<div class="col-tc-6">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
				</div>
				<div class="col-tc-6">
				<P><?php esc_html_e( 'Online Food Delivery is a bold and versatile theme designed for restaurants, cafes, food services, takeout, catering, delivery, food trucks, meal plans, eateries, fast food, dine-in, gourmet, bistros, culinary businesses, online ordering, food ordering system, food delivery app, contactless delivery, grocery delivery, digital food menu, restaurant POS system, subscription meals, and local delivery service. Fully responsive and mobile-friendly, this theme allows users to manage their business effortlessly across all devices. Ideal for cloud kitchens, pizza shops, burger shops, ice cream parlours, and supermarkets, it offers complete customization for backgrounds, colors, images, fonts, and layout options. With SEO-friendly, clean-coded design, the theme ensures fast performance and a professional online presence without requiring coding skills. It includes advanced features like favicon and logo customization, title and tagline editing, 100+ font options, simple and mega menus, and section enable/disable options. Additionally, it integrates seamlessly with Contact Form 7 for customer inquiries and WooCommerce for easy product orders, making it an ideal solution for any food delivery business looking to establish a strong and interactive online presence.', 'online-food-delivery' ); ?></P>
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_pro" class="tabcontent">
				<h3><?php esc_html_e( 'Online food delivery Theme Information', 'online-food-delivery' ); ?></h3>
				<hr>
				<div class="info-link-pro">
					<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'online-food-delivery' ); ?></a>
					<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'online-food-delivery' ); ?></a>
					<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'online-food-delivery' ); ?></a>
				</div>
				<div class="pro-image">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
				</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Online food delivery Pro Theme', 'online-food-delivery' ); ?></h4>
				<P><?php esc_html_e( 'The premium food ordering WordPress theme is food intend theme. It is created for restaurant businesses, online food shops, and supermarkets. Users can use this theme as a home delivery site to provide service. Users can use this theme to make the website look amazing and eye-catching for their audiences. The mobile responsive nature of this theme gives a beautiful design appearance to any screen size. It can adjust according to the size of the screens. The theme is designed with a great color panel and amazing fonts.
               The food ordering WordPress theme has personalization options so users can adjust the theme according to their wishes and nature. This theme can be used by anyone, including organic foods stores and nutritionist health coaches. The theme is divided into sections, such as the service section, gallery section, testimonial section, and many more. Moreover, the fantastic features of this theme include Call to Action Button (CTA), social media integration, and SEO-friendly, optimized codes. So, what are you waiting for? Start your online journey now with this amazing food ordering WordPress theme.', 'online-food-delivery' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'online-food-delivery' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Seperate Newsletter Section', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slides', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Posttype', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'online-food-delivery' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode0', 'online-food-delivery' ); ?></li>
				</ul>				
			</div>	
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_create" class="tabcontent">
				<div class="tab-cont">
					<h4><?php esc_html_e( 'Need Support?', 'online-food-delivery' ); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'online-food-delivery' ); ?></P>
						<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'online-food-delivery' ); ?></a>
					</div>
				</div>
				<div class="tab-cont">	
					<h4><?php esc_html_e('Reviews', 'online-food-delivery'); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'online-food-delivery' ); ?></P>
						<a href="<?php echo esc_url( ONLINE_FOOD_DELIVERY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'online-food-delivery'); ?></a>
					</div>
				</div>

				<div class="tc-section large-section">
					<h2>Let‘s customize your website</h2>
					<p>There are many changes you can make to customize your website. Explore customization options and make it unique.</p>
					<div class="tc-buttons">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="tc-btn primary large-button"><?php esc_html_e('Start Customizing', 'online-food-delivery'); ?></a>
					</div><!-- END .tc-buttons -->
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>
</div>
<?php } ?>