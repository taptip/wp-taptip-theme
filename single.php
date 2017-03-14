<?php get_header(); ?>
<!-- INDEX: End of Header  -->
		<!-- INDEX: Start of Content  -->
		<section class="single-content container page-wrap">
        	<div class="row">
        		<div class="col-sm-offset-2 col-sm-8 col-xs-12">
        		<a href="<?php echo  esc_url( home_url( '/blog' ) );?>" class="btn btn-block-thin pull-right"><span class="glyphicon glyphicon-menu-left"></span>Back</a>
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						$post_image_url = wp_get_attachment_url($post->ID);
						if ($post_image_url) {
					?>
					<img src="<?php echo $post_image_url; ?>" class="img-responsive" alt="">
					<?php
						}
					?>
					<h2 class="blog-post-title"><?php the_title(); ?></h2>
					<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
					<hr>
					<?php the_content(); ?>
				<?php 
					}
				}
				?>
				</div>
			</div>
		</section>
		<!-- INDEX: End of Content  -->
		<!-- INDEX: Start of Sidebar  -->
		<?php 
		// get_sidebar(); 
		?>
		<!-- INDEX: End of Sidebar  -->
<!-- INDEX: Start of Content  -->
<?php get_footer(); ?>