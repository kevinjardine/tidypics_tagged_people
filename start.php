<?php
elgg_register_event_handler('init', 'system', 'tidypics_tagged_people_init');
function tidypics_tagged_people_init() {
	elgg_register_event_handler('pagesetup', 'system', 'tidypics_tagged_people_pagesetup');
	// Extend CSS
	elgg_extend_view('css/elgg', 'tidypics_tagged_people/css');
	
	$js = elgg_get_simplecache_url('js', 'tidypics_tagged_people/tagging');
	elgg_register_simplecache_view('js/tidypics_tagged_people/tagging');
	elgg_register_js('elgg.tidypics_tagged_people.tagging', $js, 'footer');
}

function tidypics_tagged_people_pagesetup() {
	if (elgg_in_context('photos')) {
		elgg_load_js('elgg.tidypics_tagged_people.tagging');
	}
}
