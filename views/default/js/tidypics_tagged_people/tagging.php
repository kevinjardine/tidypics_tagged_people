//<script>
elgg.provide('elgg.tidypics_tagged_people.tagging');

elgg.tidypics_tagged_people.tagging.init = function() {
	elgg.tidypics.tagging.active = false;
	// allows for two cancel links
	$('.tidypics-tagging-quit').click(elgg.tidypics.tagging.stop);
	$('.elgg-gallery-users').find('li').mouseover(elgg.tidypics_tagged_people.show_user);
	$('.elgg-gallery-users').find('li').mouseout(elgg.tidypics_tagged_people.hide_users);

}

elgg.tidypics_tagged_people.show_user = function() {
	var profile = $(this).find('div:first').find("ul:first").find("li:first").find("a").attr('href');
	$('.tidypics-tag-label').find('a').each(function(e) {
		if ($(this).attr('href') == profile) {
			$(this).parent().parent().show();
		}
	});
}

elgg.tidypics_tagged_people.hide_users = function() {
	$('.tidypics-tag-wrapper').hide();
}
elgg.register_hook_handler('init', 'system', elgg.tidypics_tagged_people.tagging.init);
//</script>
