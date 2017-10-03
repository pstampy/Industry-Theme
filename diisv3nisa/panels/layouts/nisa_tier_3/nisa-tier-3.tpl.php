<?php
/**
 * @file
 * Plain layout template, simply printing the content areas in divs.
 */
?>
<div class="top">
	<?php print $content['top']; ?>
</div>
<div class="content-wrapper">
	<div class="left-sidebar">
		<?php print $content['left-sidebar']; ?>
	</div>
	<div class="right-column">
		<?php print $content['right-column']; ?>
	</div>
</div>
