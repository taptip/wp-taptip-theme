<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>
<!-- INDEX: End of Header  -->
		<!-- INDEX: Start of Content  -->
		<?php 
		get_template_part( 'sections/what-i-do');
		get_template_part( 'sections/services');
		// get_template_part( 'sections/contact-us');
		get_template_part( 'sections/location');
		?>
		<!-- INDEX: End of Content  -->
		<!-- INDEX: Start of Sidebar  -->
		<?php 
		// get_sidebar(); 
		?>
		<!-- INDEX: End of Sidebar  -->
<!-- INDEX: Start of Content  -->
<?php get_footer(); ?>