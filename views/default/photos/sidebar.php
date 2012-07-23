<?php
/**
 * Sidebar view
 */

$page = elgg_extract('page', $vars);
$image = elgg_extract('image', $vars);
if ($image && $page == 'view') {
	if (elgg_get_plugin_setting('exif', 'tidypics')) {
		echo elgg_view('photos/sidebar/exif', $vars);
	}
	
	$body = elgg_list_entities_from_relationship(array(
		'relationship' => 'phototag',
		'relationship_guid' => $image->guid,
		'inverse_relationship' => TRUE,
		'type' => 'user',
		'limit' => 15,
		'list_type' => 'gallery',
		'gallery_class' => 'elgg-gallery-users',
		'pagination' => false
	));
	if ($body) {
		$title = elgg_echo('tidypics_tagged_people:title');
		echo elgg_view_module('aside', $title, $body);
	}
}

if ($page == 'upload') {
	if (elgg_get_plugin_setting('quota', 'tidypics')) {
		echo elgg_view('photos/sidebar/quota', $vars);
	}
}