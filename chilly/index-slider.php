<?php
	$chilly_home_slider_image = get_theme_mod('home_slider_image', CHILLY_ST_TEMPLATE_DIR_URI .'/images/slider.jpg');
	$chilly_home_slider_title = get_theme_mod('home_slider_title',__('Welcome to Chilly Theme','chilly'));
	
	$chilly_home_slider_discription = get_theme_mod('home_slider_discription',__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim mei ludus efficiendi ei sea summo mazim ex.','chilly'));
	$chilly_home_slider_btn_txt = get_theme_mod('home_slider_btn_txt',__('Read More','chilly'));
	$chilly_home_slider_btn_link = get_theme_mod('home_slider_btn_link',__('#','chilly'));
	$chilly_home_slider_btn_target = get_theme_mod('home_slider_btn_target',false);
	
	$chilly_home_page_slider_enabled = get_theme_mod('home_page_slider_enabled','on');
	if(is_page_template('template-business.php')) {
	if($chilly_home_page_slider_enabled !='off') {	
?>
	<section class="slider" style="position:relative;">
		<div class="item" style="background-image:url(<?php echo esc_url($chilly_home_slider_image); ?>); width: 100%; height: 90vh; background-position: center center; background-size: cover; z-index: 0;" >
		<?php $chilly_slider_image_overlay = get_theme_mod('slider_image_overlay',true);
			$chilly_slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.30)');
			if($chilly_slider_image_overlay != false) { ?>
			<div class="overlay" style="background-color:<?php echo esc_attr($chilly_slider_overlay_section_color);?>"></div>
			<?php } ?>
			<div class="container">
					<div class="format-standard">
						<?php if( ($chilly_home_slider_title) || ($chilly_home_slider_discription)!='' ) { ?>
						<div class="slide-text-bg1">
						<?php if ( ! empty( $chilly_home_slider_title ) || is_customize_preview() ) { ?>
						<h1><?php echo esc_html($chilly_home_slider_title);  ?></h1>
						<?php } 
						if ( ! empty( $chilly_home_slider_discription ) || is_customize_preview() ) {
						?>
						<p><?php echo esc_html($chilly_home_slider_discription); ?></p>
						<?php } ?>
						</div>
						<?php } if($chilly_home_slider_btn_txt) { ?>
						<div class="slide-btn-area-sm">						
						<a <?php if($chilly_home_slider_btn_link) { ?> href="<?php echo esc_url( $chilly_home_slider_btn_link); } ?>" 
						<?php if($chilly_home_slider_btn_target) { ?> target="_blank" <?php } ?> class="slide-btn-sm">
						<?php if($chilly_home_slider_btn_txt) { echo esc_html($chilly_home_slider_btn_txt); } ?></a>
						</div>
						<?php } ?>						
					</div>	
				</div>	
			</div>
	</section>
		<?php
}
}
else
	{
		?>
	<section class="slider" style="position:relative;">
		<div class="item" style="background-image:url(<?php echo esc_url($chilly_home_slider_image); ?>); width: 100%; height: 90vh; background-position: center center; background-size: cover; z-index: 0;" >
		<?php $chilly_slider_image_overlay = get_theme_mod('slider_image_overlay',true);
			$chilly_slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.30)');
			if($chilly_slider_image_overlay != false) { ?>
			<div class="overlay" style="background-color:<?php echo esc_attr($chilly_slider_overlay_section_color);?>"></div>
			<?php } ?>
			<div class="container">
					<div class="format-standard">
						<?php if( ($chilly_home_slider_title) || ($chilly_home_slider_discription)!='' ) { ?>
						<div class="slide-text-bg1">
						<?php if ( ! empty( $chilly_home_slider_title ) || is_customize_preview() ) { ?>
						<h1><?php echo esc_html($chilly_home_slider_title);  ?></h1>
						<?php } 
						if ( ! empty( $chilly_home_slider_discription ) || is_customize_preview() ) {
						?>
						<p><?php echo esc_html($chilly_home_slider_discription); ?></p>
						<?php } ?>
						</div>
						<?php } if($chilly_home_slider_btn_txt) { ?>
						<div class="slide-btn-area-sm">						
						<a <?php if($chilly_home_slider_btn_link) { ?> href="<?php echo esc_url( $chilly_home_slider_btn_link); } ?>" 
						<?php if($chilly_home_slider_btn_target) { ?> target="_blank" <?php } ?> class="slide-btn-sm">
						<?php if($chilly_home_slider_btn_txt) { echo esc_html($chilly_home_slider_btn_txt); } ?></a>
						</div>
						<?php } ?>						
					</div>	
				</div>	
			</div>
	</section>	
		<?php
	}?>