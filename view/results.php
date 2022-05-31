<?php
$progress_bar = '
<h3>lenguaje: %s</h3>
<div class="progress" style="height: 32px;">
    <div class="progress-bar %s" role="progressbar" style="width: %s%s; font-size: xx-large;" aria-valuenow="%s" aria-valuemin="0" aria-valuemax="100">%s</div>
</div>
';
if($survey->getOptionSelected() == $lang){
    printf($progress_bar,$lang,"bg-success",$porcentaje,"%",$porcentaje,$porcentaje);
}else{
    printf($progress_bar,$lang," ",$porcentaje,"%",$porcentaje,$porcentaje);

}