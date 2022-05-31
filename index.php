<?php
include_once('includes/survey.php');
$head_html = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/cosmo/bootstrap.min.css">
        <title>encuesta</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
';
$footer_html = '
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
';

print($head_html);
$survey = new Survey();
$showResults = false;
if(isset($_POST['lenguajes'])){
    $showResults = true;
    $survey->setOptionSelected($_POST['lenguajes']);
    print "escogiste ".$survey->getOptionSelected()." como lenguaje favorito";
    $survey->vote();
}
if($showResults){
    $lenguajes = $survey->showResults();
    echo('<h2>'. $survey->getTotalVotes() .' votos totales</h2>');
    foreach($lenguajes as $lenguaje){
        $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);
        $lang = $lenguaje['opcion'];
        $vote = $lenguaje['votos'];
        print($vote."<br>");
        include('view/results.php');
    }
}else{
    print("<h2>cual es tu lenguaje de programación favorito?</h2>");
    include_once('view/voteForm.php');
}
print($footer_html);