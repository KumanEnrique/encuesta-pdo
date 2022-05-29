<?php
include_once('survey.php');
?>
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
        
        <?php
        if (isset($_POST['lenguajes'])){
            $survey = new Survey();
            $survey->update($_POST['lenguajes']); 
            $totalVotes = $survey->totalVotes();
            $data = $survey->select();?>
        <div class="row mt-4">
            <div class="col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">total de votos: <?php echo($totalVotes);?></h2>
                        <?php
                        foreach ($data as $row => $value) { ?>
                            <label>javascript es el ganador</label>
                        <div class="progress" style="height: 46px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;font-size: xxx-large;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo($value['votos']);?></div>
                        </div>
                        <?php }
                        ?>
                        

                    </div>
                </div>
            </div>
        </div>
            <?php
        }else{?>
        <div class="row mt-4">
            <div class="col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>cual es tu lenguaje de programación favorito?</h2>
                        <form action="" method="post">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lenguajes" value="javascript">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    javascript
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lenguajes" value="python">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    python
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lenguajes" value="php">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    php
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lenguajes" value="rust">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    rust
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lenguajes" value="go">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    go
                                </label>
                            </div>
                            <button class="btn btn-primary" type="submit">enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
</body>
</html>