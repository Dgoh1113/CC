<div class="theme-import">
	<?php 
        // Check if the demo import has been completed
        $online_food_delivery_demo_import_completed = get_option('online_food_delivery_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($online_food_delivery_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'online-food-delivery') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '"  class= "run-import view-site" target="_blank">' . esc_html__('VIEW SITE', 'online-food-delivery') . '</a></span>';
        }

		// POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

            // Check if woocommerce is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
                // Install the plugin if it doesn't exist
                $online_food_delivery_plugin_slug = 'woocommerce';
                $online_food_delivery_plugin_file = 'woocommerce/woocommerce.php';

                // Check if plugin is installed
                $online_food_delivery_installed_plugins = get_plugins();
                if (!isset($online_food_delivery_installed_plugins[$online_food_delivery_plugin_file])) {
                    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                    include_once(ABSPATH . 'wp-admin/includes/file.php');
                    include_once(ABSPATH . 'wp-admin/includes/misc.php');
                    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                    // Install the plugin
                    $online_food_delivery_upgrader = new Plugin_Upgrader();
                    $online_food_delivery_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
                }
                // Activate the plugin
                activate_plugin($online_food_delivery_plugin_file);
            }

            // ------- Create Nav Menu --------
            $online_food_delivery_menuname = 'Main Menus';
            $online_food_delivery_bpmenulocation = 'primary';
            $online_food_delivery_menu_exists = wp_get_nav_menu_object($online_food_delivery_menuname);

            if (!$online_food_delivery_menu_exists) {
                $online_food_delivery_menu_id = wp_create_nav_menu($online_food_delivery_menuname);

                // Create Home Page
                $online_food_delivery_home_title = 'Home';
                $online_food_delivery_home = array(
                    'post_type' => 'page',
                    'post_title' => $online_food_delivery_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $online_food_delivery_home_id = wp_insert_post($online_food_delivery_home);
                // Assign Home Page Template
                add_post_meta($online_food_delivery_home_id, '_wp_page_template', 'page-template/custom-frontpage.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $online_food_delivery_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($online_food_delivery_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'online-food-delivery'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $online_food_delivery_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $online_food_delivery_pages_title = 'Pages';
                $online_food_delivery_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $online_food_delivery_pages = array(
                    'post_type' => 'page',
                    'post_title' => $online_food_delivery_pages_title,
                    'post_content' => $online_food_delivery_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $online_food_delivery_pages_id = wp_insert_post($online_food_delivery_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($online_food_delivery_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'online-food-delivery'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $online_food_delivery_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $online_food_delivery_about_title = 'About Us';
                $online_food_delivery_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $online_food_delivery_about = array(
                    'post_type' => 'page',
                    'post_title' => $online_food_delivery_about_title,
                    'post_content' => $online_food_delivery_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $online_food_delivery_about_id = wp_insert_post($online_food_delivery_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($online_food_delivery_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'online-food-delivery'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $online_food_delivery_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($online_food_delivery_bpmenulocation)) {
                    $online_food_delivery_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($online_food_delivery_locations)) {
                        $online_food_delivery_locations = array();
                    }
                    $online_food_delivery_locations[$online_food_delivery_bpmenulocation] = $online_food_delivery_menu_id;
                    set_theme_mod('nav_menu_locations', $online_food_delivery_locations);
                }
                
        }     

            //Header
            set_theme_mod( 'online_food_delivery_topbar_phoneno', '+1 123 456 7890' ); 

            //Social Icon
            set_theme_mod( 'online_food_delivery_facebook_url', '#' );
            set_theme_mod( 'online_food_delivery_twitter_url', '#' );
            set_theme_mod( 'online_food_delivery_linkedin_url', '#' );
            set_theme_mod( 'online_food_delivery_instagram_url', '#' );
            set_theme_mod( 'online_food_delivery_whatsapp_url', '#' );
            set_theme_mod( 'online_food_delivery_pinterest_url', '#' );

            //Slider
            set_theme_mod( 'online_food_delivery_slider_hide_show', true ); 
            $online_food_delivery_slider_titles = [
                'We Deliver The Taste Of Life', 
                'Fresh Ingredients, Fast Delivery', 
                'Delicious Meals At Your Doorstep', 
                'Your Favorite Food, Anytime, Anywhere'
            ];
            
            for($online_food_delivery_i=1;$online_food_delivery_i<=4;$online_food_delivery_i++){
                $online_food_delivery_slider_title = $online_food_delivery_slider_titles[$online_food_delivery_i - 1];
                $online_food_delivery_slider_content = 'Get It Delivered Right To Your Door!';
                // Create post object
                $online_food_delivery_my_post = array(
                'post_title'    => wp_strip_all_tags( $online_food_delivery_slider_title ),
                'post_content'  => $online_food_delivery_slider_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                );
 
                // Insert the post into the database
                $online_food_delivery_post_id = wp_insert_post( $online_food_delivery_my_post );
 
                if ($online_food_delivery_post_id) {
                  // Set the theme mod for the slider page
                  set_theme_mod('online_food_delivery_slider_page' . $online_food_delivery_i, $online_food_delivery_post_id);
 
                   $online_food_delivery_image_url = get_template_directory_uri().'/images/banner-image'.$online_food_delivery_i.'.png';
 
                 $online_food_delivery_image_id = media_sideload_image($online_food_delivery_image_url, $online_food_delivery_post_id, null, 'id');
 
                     if (!is_wp_error($online_food_delivery_image_id)) {
                         // Set the downloaded image as the post's featured image
                         set_post_thumbnail($online_food_delivery_post_id, $online_food_delivery_image_id);
                     }
                 }
            } 

            //Food Category
            set_theme_mod( 'online_food_delivery_category_hide_show', true );
            set_theme_mod( 'online_food_delivery_section_title', 'Browse Food Category' ); 
            set_theme_mod( 'online_food_delivery_section_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' ); 

            set_theme_mod('online_food_delivery_product_category', 'productcategory1');

            // Define product category names, product titles, and tags
            $online_food_delivery_category_names = array('productcategory1', 'productcategory2', 'productcategory3', 'productcategory4');
            $online_food_delivery_title_array = array(
                array("Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name"),
                array("Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name"),
                array("Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name"),
                array("Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name", "Restaurent Dish Name")
            );

            foreach ($online_food_delivery_category_names as $online_food_delivery_index => $online_food_delivery_category_name) {
                // Create or retrieve the product category term ID
                $online_food_delivery_term = term_exists($online_food_delivery_category_name, 'product_cat');
                if ($online_food_delivery_term === 0 || $online_food_delivery_term === null) {
                    // If the term does not exist, create it
                    $online_food_delivery_term = wp_insert_term($online_food_delivery_category_name, 'product_cat');
                }

                if (is_wp_error($online_food_delivery_term)) {
                    error_log('Error creating category: ' . $online_food_delivery_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }

                // Loop to create 4 products for each category
                for ($online_food_delivery_i = 0; $online_food_delivery_i < 4; $online_food_delivery_i++) {
                    // Create product content
                    $online_food_delivery_title = $online_food_delivery_title_array[$online_food_delivery_index][$online_food_delivery_i];
                    $online_food_delivery_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                    // Create product post object
                    $online_food_delivery_my_post = array(
                        'post_title'    => wp_strip_all_tags($online_food_delivery_title),
                        'post_content'  => $online_food_delivery_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product', // Post type set to 'product'
                    );

                    // Insert the product into the database
                    $online_food_delivery_post_id = wp_insert_post($online_food_delivery_my_post);

                    if (is_wp_error($online_food_delivery_post_id)) {
                        error_log('Error creating product: ' . $online_food_delivery_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }

                    // Assign the category to the product
                    wp_set_object_terms($online_food_delivery_post_id, (int)$online_food_delivery_term['term_id'], 'product_cat');

                    // Set product as simple product and assign a price
                    update_post_meta($online_food_delivery_post_id, '_price', '34.89'); // Set a price for the product
            
                    // Handle the featured image using media_sideload_image
                    $online_food_delivery_image_url = get_template_directory_uri() . '/images/Product' . ($online_food_delivery_i + 1) . '.png';
                    $online_food_delivery_image_id = media_sideload_image($online_food_delivery_image_url, $online_food_delivery_post_id, null, 'id');

                    if (is_wp_error($online_food_delivery_image_id)) {
                        error_log('Error downloading image: ' . $online_food_delivery_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }

                    // Assign featured image to product
                    set_post_thumbnail($online_food_delivery_post_id, $online_food_delivery_image_id);
                }
            }

            //Copyright Text
            set_theme_mod( 'online_food_delivery_footer_copy', 'By ThemesCaliber' ); 

            // Set the demo import completion flag
    		update_option('online_food_delivery_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'online-food-delivery') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="run-import site-btn" target="_blank">' . esc_html__('VIEW SITE', 'online-food-delivery') . '</a></span>';

        }
    ?>
  
    <p class="note"><?php esc_html_e( 'Please Note: If your website is live and already contains data, we recommend creating a backup first. Running this importer will replace your current settings with the custom values from the demo.', 'online-food-delivery' ); ?></p>
        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=online_food_delivery_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('online_food_delivery_demo_import_completed')) : ?>
            <button type="submit" name="submit" class="run-import">
                    <?php esc_html_e('Run Importer','online-food-delivery'); ?>
                    <span id="spinner" style="display: none;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/spinner.gif" alt="Loading..." style="width:34px; height:34px; vertical-align: middle;" />
                    </span>
            </button>
        <?php endif; ?>
        </form>
        <script type="text/javascript">
            function validate(valid) {
                if(confirm("Do you really want to import the theme demo content?")){
                    document.getElementById('spinner').style.display = 'inline-block';
                }
                else {
                    return false;
                }
            }
        </script>
    </div>