<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>
<!-- INDEX: End of Header  -->
	<!-- INDEX: Start of Content  -->
	<div class="container single-content page-wrap">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
				<!-- main list start -->
				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 7,
					'paged' => $paged,
					"orderby" => "date",
					"order" => 'DESC'
				);
				$post_query = new WP_Query($args);
				$post_index = 0;
				$clearfix_index = 0;
				if ( $post_query->have_posts() ) { 
					while ( $post_query->have_posts() ) {
						$post_query->the_post();
						// get_template_part( 'content/post', get_post_format() );
						include( locate_template( 'content/post.php', false, false ) ); 
						$post_index++;
					}
				} else {
				?>
				<h1>
				empty
				</h1>
				<?php
				}
				?>
				</div>
				<!-- main list end -->
				<div class="row">
					<nav>
						<ul class="pager">
							<li><?php next_posts_link( 'Previous', $post_query->max_num_pages ); ?></li>
							<li><?php previous_posts_link( 'Next', $post_query->max_num_pages ); ?></li>
						</ul>
					</nav>	
				</div>
				<!-- pagination end -->
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="col-md-3">
				<div class="row">
					<!-- sidebar start -->
					<!-- sidebar end -->
				</div>
			</div>
		</div>
		
	</div>
	<!-- INDEX: End of Content  -->
	<!-- INDEX: Start of Sidebar  -->
	
	<!-- INDEX: End of Sidebar  -->
<!-- INDEX: Start of Content  -->
<?php get_footer(); ?>