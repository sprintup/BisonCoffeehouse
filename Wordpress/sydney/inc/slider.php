<?php
/**
 * Slider template
 *
 * @package Sydney
 */

//Slider template
if ( ! function_exists( 'sydney_slider_template' ) ) :
function sydney_slider_template() {

	if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '4000');
    $text_speed = get_theme_mod('textslider_speed', '4000');
    $text_slide = get_theme_mod('textslider_slide', 0);
    if (!$text_slide) {
        $slide_toggle = true;
    } else {
        $slide_toggle = false;
    }
	?>

	<div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>">
	    <div class="slides-container">
		    <?php 
			    if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.png') ) {
					echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.jpg')) . ');"></div>';
				
				}
			    if ( get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg') ) {
					echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg')) . ');"></div>';
				}			
			    if ( get_theme_mod('slider_image_3') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_3')) . ');"></div>';
				}
			    if ( get_theme_mod('slider_image_4') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_4')) . ');"></div>';
				}
			    if ( get_theme_mod('slider_image_5') ) {
                    echo '<div class="slide-item" style="background-image:url(' . esc_url(get_theme_mod('slider_image_5')) . ');"></div>';
				}				
			?>	
	    </div>

        <div class="text-slider-section">
            <div class="text-slider" data-speed="<?php echo esc_attr($text_speed); ?>" data-slideshow="<?php echo esc_attr($slide_toggle); ?>">
                <ul class="slide-text slides">
                	<?php if ( get_theme_mod('slider_image_1', get_template_directory_uri() . '/images/1.png') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle"><?php echo esc_html(get_theme_mod('slider_title_1', 'Welcome to Sydney')); ?></h2>
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle_1','Feel free to look around')); ?></p>
                        </div>
                    </li>
               		<?php endif; ?>
               		<?php if ( get_theme_mod('slider_image_2', get_template_directory_uri() . '/images/2.jpg') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle"><?php echo esc_html(get_theme_mod('slider_title_2', 'Ready to begin your journey?')); ?></h2>
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle_2', 'Click the button below')); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_3') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle"><?php echo esc_html(get_theme_mod('slider_title_3')); ?></h2>
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle_3')); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_4') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle"><?php echo esc_html(get_theme_mod('slider_title_4')); ?></h2>
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle_4')); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('slider_image_5') ) : ?>
                    <li>
                        <div class="contain">
                            <h2 class="maintitle"><?php echo esc_html(get_theme_mod('slider_title_5')); ?></h2>
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('slider_subtitle_5')); ?></p>
                        </div>
                    </li>
                    <?php endif; ?>                                        
                </ul>
            </div>
            <?php $slider_button = get_theme_mod('slider_button_text', 'Click to begin'); ?>
            <?php if ($slider_button) : ?>
                <a href="<?php echo esc_url(get_theme_mod('slider_button_url','#primary')); ?>" class="roll-button button-slider"><?php echo esc_html($slider_button); ?></a>
            <?php endif; ?>
        </div>


	    
	</div>
	<?php
	}
}
endif;