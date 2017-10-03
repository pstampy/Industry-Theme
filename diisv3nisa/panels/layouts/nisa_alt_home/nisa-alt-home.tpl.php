<?php
/**
 * @file
 * Plain layout template, simply printing the content areas in divs.
 */
?>
<div class="content-wrapper">
	<div class="top-wrapper">
		<div class="top">
			<?php print $content['top']; ?>
		</div>
	</div>
	<div class="middle">
		<?php print $content['middle']; ?>
	</div>
	<div class="top-row-wrapper">
		<div class="left-top">
			<?php print $content['left_top']; ?>
		</div>
		<div class="right-top">
		<?php print $content['right_top']; ?>
		</div>
	</div>
	<div class="center-wrapper">
		<?php print $content['center']; ?>
	</div>
	
	<div class="bottom-wrapper">
		<?php print $content['bottom']; ?>
	</div>
</div>


