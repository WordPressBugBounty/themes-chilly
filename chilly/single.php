<?php
/**
 * The main template file
 */
get_header();
$chilly_remove_banner_blog_image = get_theme_mod('remove_banner_blog_image',false);
if($chilly_remove_banner_blog_image !=true)
{
			   get_template_part('index','slider');
		
}
spicepress_breadcrumbs(); ?>
<!-- Blog & Sidebar Section -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'8' ); ?> col-sm-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'7' ); ?> col-xs-12">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page
					$chilly_user=get_option('chilly_user_with_1_3_7');
  					if($chilly_user=='old'){
						if (get_theme_mod('spicepress_enable_single_post_category')==null && get_theme_mod('spicepress_enable_single_post_date')==null && get_theme_mod('spicepress_enable_single_post_admin')!=null && get_theme_mod('spicepress_enable_single_post_tag')==null && get_theme_mod('spicepress_enable_single_post_admin_details')==null){?>
							<article class="post" <?php post_class( 'post-content-area wow fadeInDown animated' ); ?> data-wow-delay="0.4s">				
							<?php
							$blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
							if($blog_meta_section_enable == true) {
							spicepress_blog_meta_content(); } ?>
							<header class="entry-header">
								<?php
								the_title( '<h3 class="entry-title">', '</h3>' );
								if($blog_meta_section_enable ==true) {
								spicepress_blog_category_content();
								}
								?>
							</header>				
							<?php
							if(has_post_thumbnail()){
							if ( is_single() ) {
							echo '<figure class="post-thumbnail">';
							the_post_thumbnail( '', array( 'class'=>'img-responsive') );
							echo '</figure>';
							}else{
							echo '<figure class="post-thumbnail"><a class="post-thumbnail" href="'.esc_url(get_the_permalink()).'">';
							the_post_thumbnail( '', array( 'class'=>'img-responsive') );
							echo '</a></figure>';
							} } ?>
							<div class="entry-content">
							<?php
								the_content();
							?>
							</div>						
						</article>
							<?php
						}
						else{
								get_template_part( 'content','single');								
						}

					}
					else{
					get_template_part( 'content','single');
					}
						
						// author meta
						if(get_theme_mod('spicepress_enable_single_post_admin_details',true)===true):					
							spicepress_author_meta();
						endif;
					comments_template( '', true ); // show comments
					
				endwhile;
				?>
			</div>	
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
</div>
<!-- /Blog & Sidebar Section -->
<?php get_footer(); ?>