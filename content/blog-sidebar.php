<?php
$archive_args = array(
	'type' => 'post',
	'show_post_count' => true,
);

$archive_data = wp_get_archives($archive_args);

?>
<pre>
<?php print_r($archive_data);?>
</pre>

<?php 

wp_get_archives($archive_args);
?>