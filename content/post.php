<?php 
if($post_index>0) { 
	$clearfix_index++;
	if($clearfix_index>3) {
		$clearfix_index=0;
?>
<div class="clearfix visible-md-block visible-lg-block"></div>
<?php
	}
?>
<div class="col-md-4 bottom-buffer">
<?php } else { ?>
<div class="col-md-12 bottom-buffer">
<?php } ?>
	<div class="blog-post">
		<?php
		$post_thumbnail_id = get_post_thumbnail_id($post->ID);
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		$post_excerpt = apply_filters( 'the_excerpt', get_the_excerpt() );
		if ($post_thumbnail_url) {
		?>
		<img src="<?php echo $post_thumbnail_url; ?>" class="img-responsive" alt="">
		<?php
		}
		?>
		<a href="<?php echo get_the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
		<hr>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
		<hr>
		<p><?php echo ($post_index>0) ? substr($post_excerpt,0,123) : substr($post_excerpt,0,-1);?>...<a class="hidden-xs hidden-sm" href="<?php echo get_the_permalink(); ?>">More</a></p><a class="btn btn-lg btn-block hidden-md hidden-lg" href="<?php echo get_the_permalink(); ?>">More</a>
	</div>
</div>