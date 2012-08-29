<style>
	#color-menu {
		margin-top: 0px;
		width: 100%;
		height: 13px;
		background-color: #000;
		color: #FFF;
		z-index: 1000;
	}

	#options {
		width: 100%;
		height: 59px;
		padding: 10px 0px 0px 0px;
		margin-top: -69px;
		background-color: #c4c4c4;
		color: #FFF;
		text-align: center;
		z-index: 1000;
	}
</style>

<!--Enter your site's path here-->
<script type="text/javascript" src="/addons/shared_addons/widgets/colour_previewer/js/jscolor/jscolor.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		//hover function to light up the black bar for the menu
		$('#color-menu').hover(function() {($('#color-menu').css('background-color', '#FFEA99'));
		})
		$('#color-menu').mouseleave(function() {($('#color-menu').css('background-color', '#000'));
		})
		
		//function for the menu slide down

			$('#color-menu').click(function() {

				var margin = $('#color-menu').css('margin-top');
				if (margin == '0px') {($('#color-menu').css('margin-top', '55px')); ($('#options').css('margin-top', '0px')); ($('#color-menu').css('position', 'fixed')); ($('#options').css('position', 'fixed')); ($('#outer').css('padding-top', '68px'));
				} else {($('#color-menu').css('margin-top', '0px')); ($('#options').css('margin-top', '-69px')); ($('#color-menu').css('position', '')); ($('#options').css('position', '')); ($('#outer').css('padding-top', '0px'));
				}

			})
		<?php 

		 for ($n =1, $e =1, $c =1, $y = 1; $y < 6; $n++, $e++, $c++, $y++){
		 	$name = "name" . $n; 
			if ($options[$name] != ''){	
		?>
		$('#<?php echo $options[$name]; ?>').change(function() { 
			$('<?php $element = "element" . $e; echo $options[$element]; ?>').css('<?php $colour_type = "colour_type" . $c; echo $options[$colour_type]; ?>', ('#' + $('#<?php echo $options[$name]; ?>').val()));
		});
		<?php 
		 	}
		 }
		?>
	}); 
</script>

<div id="options">
	<?php 
	for ($i =1; $i < 6; $i++){
		$name = "name" . $i;
		if ($options[$name] != ''){
			echo $options[$name]; ?>:
			<input type="text" name="background" id="<?php echo $options[$name]; ?>" class="color" value=""/>
<?php }
		 } ?>
</div>
<div id='color-menu' class=""></div>






