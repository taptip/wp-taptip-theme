<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
<!-- INDEX: End of Header  -->
		<!-- INDEX: Start of Content  -->
		<section class="single-content">
        	<div class="row">
        		<div class="col-sm-offset-2 col-sm-8 col-xs-12">
        <?php 
		echo $post->post_content;
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