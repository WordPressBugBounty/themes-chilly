<?php
/**
 * The default template for displaying content
 */
?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-wow-delay="0.4s">					
					<?php 
					$chilly_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
					if($chilly_blog_meta_section_enable == true) {
					spicepress_blog_meta_content(); } ?>
					<header class="entry-header">
						<?php if ( is_single() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
						else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
						endif; 
						if($chilly_blog_meta_section_enable ==true) {
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
					$chilly_user=get_option('chilly_user_with_1_3_7');
  					if($chilly_user=='old'){
					if (get_theme_mod('spicepress_blog_content')!=null) {
						spicepress_posted_content(); wp_link_pages( ); 
						$chilly_read_btn=get_theme_mod('spicepress_blog_content','excerpt');
							if($chilly_read_btn=="excerpt"){?>
								<p><a href="<?php the_permalink();?>" class="more-link"><?php _e('Read More','chilly'); ?></a></p>
							<?php 
							}
					}else{
						$chilly_more = strpos( $post->post_content, '<!--more' );
						if ( $chilly_more ) :
							echo the_content();
						else :
							echo the_excerpt();
						endif;
						wp_link_pages( );
					} 
				}else{
					spicepress_posted_content(); wp_link_pages( ); 
					$chilly_read_btn=get_theme_mod('spicepress_blog_content','excerpt');
						if($chilly_read_btn=="excerpt"){?>
							<p><a href="<?php the_permalink();?>" class="more-link"><?php _e('Read More','chilly'); ?></a></p>
						<?php 
						}
				}?>
			</div>						
		</article>