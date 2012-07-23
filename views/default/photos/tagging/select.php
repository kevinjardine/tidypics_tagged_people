<?php
/**
 * Tag select view
 *
 * @uses $vars['entity']
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */
$icon = '<a href="javascript:void(0);" class="tidypics-tagging-quit tidypics-tagged-people-cancel">'.elgg_view_icon('delete').'</a>';

$body = elgg_view_form('photos/image/tag', array(), $vars);

echo elgg_view_module('popup', elgg_echo('tidypics:tagthisphoto').$icon, $body, array(
	'class' => 'tidypics-tagging-select pam hidden',
	'id' => 'tidypics-tagging-select',
));
