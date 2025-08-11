<?php 
		// Template Name: Business Template
		get_header();
		$chilly_remove_banner_image = get_theme_mod('home_page_slider_enabled');
		if($chilly_remove_banner_image !="off")
	    {
			   get_template_part('index','slider');
		
        }
        //editor content
		if( get_theme_mod('gutenberg_editor_section_enable','on') == 'on'){
			the_content();
			spicepress_edit_link();
		}
        echo '<div id="content">';
		do_action( 'spiceb_spicepress_sections', false );
		get_template_part('index','news');
		echo '</div>';
		get_footer();		