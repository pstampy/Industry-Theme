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
	<div class="center-wrapper">
		<?php print $content['center']; ?>
	</div>
	<div class="middle-wrapper">
		<div class="left-sidebar">
			<?php print $content['left-column']; ?>
		</div>
		<div class="right-column">
			<?php print $content['right-column']; ?>
		</div>
	</div>
	
	<div class="sidebar-wrapper">
		<div class="bottom-left">
			<?php print $content['bottom-left']; ?>
		</div>
		<div class="bottom-right">
			<?php print $content['bottom-right']; ?>
		</div>
	</div>
	<div class="bottom-wrapper">
		<?php print $content['bottom']; ?>
	</div>
</div>