<?php
if($survey->getOptionSelected() == $lang){ ?>
	<h3>lenguaje: <?php echo($lang);?></h3>
	<div class="progress" style="height: 32px;">
		<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo($porcentaje); ?>%; font-size: xx-large;" aria-valuenow="<?php echo($porcentaje); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo($porcentaje); ?>%</div>
	</div>
<?php }else{?>
<h3>lenguaje: <?php echo($lang);?></h3>
	<div class="progress" style="height: 32px;">
		<div class="progress-bar" role="progressbar" style="width: <?php echo($porcentaje); ?>%; font-size: xx-large;" aria-valuenow="<?php echo($porcentaje); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo($porcentaje); ?>%</div>
	</div>
<?php 
}