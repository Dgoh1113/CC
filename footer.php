<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Online Food Delivery
 */
?>
    <footer role="contentinfo">
        <?php //Set widget areas classes based on user choice
            $online_food_delivery_widget_areas = get_theme_mod('online_food_delivery_footer_widget_layout', '4');
            if ($online_food_delivery_widget_areas == '3') {
                $online_food_delivery_cols = 'col-lg-4 col-md-6';
            } elseif ($online_food_delivery_widget_areas == '4') {
                $online_food_delivery_cols = 'col-lg-3 col-md-6';
            } elseif ($online_food_delivery_widget_areas == '2') {
                $online_food_delivery_cols = 'col-lg-6 col-md-6';
            } else {
                $online_food_delivery_cols = 'col-lg-12 col-md-12';
            }
        ?>
        <?php if (get_theme_mod('online_food_delivery_footer_hide_show', true)){ ?>
            <div class="footertown">
                <div class="container wow bounceInUp">
                     <div class="row">
                        <!-- Footer 1 -->
                        <div class="<?php echo esc_attr($online_food_delivery_cols); ?> footer-block">
                            <?php if (is_active_sidebar('footer-1')) : ?>
                                <?php dynamic_sidebar('footer-1'); ?>
                            <?php else : ?>
                                <aside id="text-about" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('About Us', 'online-food-delivery'); ?>">
                                    <h3 class="widget-title"><?php esc_html_e('About Us', 'online-food-delivery'); ?></h3>
                                    <p><?php esc_html_e('Add a brief description about your business here.', 'online-food-delivery'); ?></p>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <!-- Footer 2 -->
                        <div class="<?php echo esc_attr($online_food_delivery_cols); ?> footer-block">
                            <?php if (is_active_sidebar('footer-2')) : ?>
                                <?php dynamic_sidebar('footer-2'); ?>
                            <?php else : ?>
                                <aside id="archives" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('Archives', 'online-food-delivery'); ?>">
                                    <h3 class="widget-title"><?php esc_html_e('Archives', 'online-food-delivery'); ?></h3>
                                    <ul>
                                        <?php wp_get_archives(array('type' => 'monthly')); ?>
                                    </ul>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <!-- Footer 3 -->
                        <div class="<?php echo esc_attr($online_food_delivery_cols); ?> footer-block">
                            <?php if (is_active_sidebar('footer-3')) : ?>
                                <?php dynamic_sidebar('footer-3'); ?>
                            <?php else : ?>
                                <aside id="business-info" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('Business Info', 'online-food-delivery'); ?>">
                                    <h3 class="widget-title"><?php esc_html_e('Business Info', 'online-food-delivery'); ?></h3>
                                    <p><?php esc_html_e('Provide your business address, contact details, and other important information here.', 'online-food-delivery'); ?></p>
                                </aside>
                            <?php endif; ?>
                        </div>

                        <!-- Footer 4 -->
                        <div class="<?php echo esc_attr($online_food_delivery_cols); ?> footer-block">
                            <?php if (is_active_sidebar('footer-4')) : ?>
                                <?php dynamic_sidebar('footer-4'); ?>
                            <?php else : ?>
                                <aside id="search-widget" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('Search', 'online-food-delivery'); ?>">
                                    <h3 class="widget-title"><?php esc_html_e('Search', 'online-food-delivery'); ?></h3>
                                    <?php the_widget('WP_Widget_Search'); ?>
                                </aside>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>   
    <div class="footer <?php if( get_theme_mod( 'online_food_delivery_copyright_sticky', false) == 1) { ?> copyright-sticky"<?php } else { ?>close-sticky <?php } ?>">  
        <?php if (get_theme_mod('online_food_delivery_copyright_hide_show', true)) {?>
            <div id="footer">
            	<div class="container wow bounceInUp">
                    <p class="mb-0"><?php online_food_delivery_credit_link(); ?> <?php echo esc_html(get_theme_mod('online_food_delivery_footer_copy',__('By ThemesCaliber','online-food-delivery'))); ?></p>
                
                    <?php if (get_theme_mod('online_food_delivery_show_footer_social_icon', true)){ ?>     
                    <div class="socialicons col-lg-12 col-md-12 col-12 align-self-center">                      
                        <?php if( get_theme_mod( 'online_food_delivery_footer_facebook_url' ) != '' && get_theme_mod('online_food_delivery_footer_facebook_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_facebook_icon', 'fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_twitter_url' ) != '' && get_theme_mod('online_food_delivery_footer_twitter_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_twitter_icon', 'fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_linkedin_url' ) != '' && get_theme_mod('online_food_delivery_footer_linkedin_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_linkedin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_instagram_url' ) != '' && get_theme_mod('online_food_delivery_footer_instagram_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_whatsapp_url' ) != '' && get_theme_mod('online_food_delivery_footer_whatsapp_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_whatsapp_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_whatsapp_icon','fab fa-whatsapp')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Whatsapp','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_pintrest_url' ) != '' && get_theme_mod('online_food_delivery_footer_pintrest_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_pintrest_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pintrest','online-food-delivery' );?></span></a>
                        <?php } ?>                          
                    </div>
                    <?php } ?>    
                
                </div>
            </div>
        <?php } ?>    
    </div>
        <?php if( get_theme_mod( 'online_food_delivery_show_back_to_top',true) != '' || get_theme_mod('online_food_delivery_responsive_show_back_to_top',true) != '') { ?>
            <?php $online_food_delivery_scroll_lay = get_theme_mod( 'online_food_delivery_back_to_top_alignment','Right');
            if($online_food_delivery_scroll_lay == 'Left'){ ?>
                <a href="#" class="scrollup left"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }else if($online_food_delivery_scroll_lay == 'Center'){ ?>
                <a href="#" class="scrollup center"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }else{ ?>
                <a href="#" class="scrollup right"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }?>
        <?php }?>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>