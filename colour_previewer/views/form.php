<?php
$color_type = array('' => '','color' => 'color', 'background-color' => 'background-color', );
?>

<ul>
	<li class="odd">
		<label>Hide Title</label>
		<?php echo form_checkbox('hide_title', 'Yes', TRUE); ?>
	</li>

	<li class="odd">
		<label>Name:</label>
		<?php echo form_input('name1', $options['name1']); ?>
	</li>
	<li class="odd">
		<label>Element:</label>
		<?php echo form_input('element1', $options['element1']); ?>
	</li>
	<li class="odd">
		<label>Colour Type</label>
		<?php echo form_dropdown('colour_type1', $color_type, $options['colour_type1']); ?>
	</li>

	<li class="odd">
		<label>Name:</label>
		<?php echo form_input('name2', $options['name2']); ?>
	</li>
	<li class="odd">
		<label>Element:</label>
		<?php echo form_input('element2', $options['element2']); ?>
	</li>
	<li class="odd">
		<label>Colour Type</label>
		<?php echo form_dropdown('colour_type2', $color_type, $options['colour_type2']); ?>
	</li>

	<li class="odd">
		<label>Name:</label>
		<?php echo form_input('name3', $options['name3']); ?>
	</li>
	<li class="odd">
		<label>Element:</label>
		<?php echo form_input('element3', $options['element3']); ?>
	</li>
	<li class="odd">
		<label>Colour Type</label>
		<?php echo form_dropdown('colour_type3', $color_type, $options['colour_type3']); ?>
	</li>

	<li class="odd">
		<label>Name:</label>
		<?php echo form_input('name4', $options['name4']); ?>
	</li>
	<li class="odd">
		<label>Element:</label>
		<?php echo form_input('element4', $options['element4']); ?>
	</li>
	<li class="odd">
		<label>Colour Type</label>
		<?php echo form_dropdown('colour_type4', $color_type, $options['colour_type4']); ?>
	</li>

	<li class="odd">
		<label>Name:</label>
		<?php echo form_input('name5', $options['name5']); ?>
	</li>
	<li class="odd">
		<label>Element:</label>
		<?php echo form_input('element5', $options['element5']); ?>
	</li>
	<li class="odd">
		<label>Colour Type</label>
		<?php echo form_dropdown('colour_type5', $color_type, $options['colour_type5']); ?>
	</li>
</ul>
