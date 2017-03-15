<?php
$archive_args = array(
	'type' => 'post',
	'before' => '',
	'after' => '',
	'show_post_count' => true,
);

$archive_data = wp_get_archives($archive_args);

?>
<pre>
<?php print_r($archive_data);?>
</pre>