<?php
/**
 * Instructions on how to peform photo tagging
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */

// Modified by Kevin Jardine, Radagast Solutions

$button = elgg_view('output/url', array(
	'text' => elgg_echo('tidypics_tagged_people:cancel'),
	'href' => '#',
	'class' => 'tidypics-tagging-quit elgg-button-delete',
));

$instructions = elgg_echo('tidypics:taginstruct', array($button));
?>
<div id="tidypics-tagging-help" class="elgg-module elgg-module-popup tidypics-tagging-help pam hidden">
	<?php echo $instructions; ?>
</div>
