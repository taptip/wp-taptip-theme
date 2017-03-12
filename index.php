<?php get_header(); ?>
<!-- INDEX: End of Header  -->
		<!-- INDEX: Start of Content  -->
		<?php 
		// include bloginfo('template_directory').'/homepage.php';
		?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<!-- INDEX: End of Content  -->
		<!-- INDEX: Start of Sidebar  -->
		<?php 
		// get_sidebar(); 
		?>
		<!-- INDEX: End of Sidebar  -->
<!-- INDEX: Start of Content  -->
<?php get_footer(); ?>