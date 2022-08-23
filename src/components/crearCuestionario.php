<?php
include('../settings/conexio.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>


    <?php
    include('header.php');
    ?>
    <div class="container indigo">
        <div style="padding: 30px; border-radius: 25px; margin-top: 20px;" class="row">
            <form class="col s12" action="guardarPregunta.php" method="POST">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="pregunta" name="pregunta" type="text" class="validate">
                        <label for="pregunta">pregunta</label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s10">
                        <input id="resp1" name="resp1" type="text" class="validate">
                        <label for="resp1">Respuesta 1</label>
                    </div>
                    <div class="col s2">
                        <p>
                            <label class="sel">
                                <input type="checkbox" id="respu1" name="check1" value="r1"/>
                                <span>correcto</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10">
                        <input id="resp2" name="resp2" type="text" class="validate">
                        <label for="resp2">Respuesta 2</label>
                    </div>
                    <div class="col s2">
                        <p>
                            <label class="sel">
                                <input type="checkbox" id="respu2" name="check2" value="r2" />
                                <span>correcto</span>
                            </label>
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s10">
                        <input id="resp3" name="resp3" type="text" class="validate">
                        <label for="resp3">Respuesta 3</label>
                    </div>
                    <div class="col s2">
                        <p>
                            <label class="sel">
                                <input type="checkbox" id="respu3" name="check3" value="r3"/>
                                <span>correcto</span>
                            </label>
                        </p>
                    </div>
                </div>


                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $('#respu1').click('click', function(){
                $('#respu2').prop('checked', false);
                $('#respu3').prop('checked', false);
            });

            $('#respu2').click('click', function(){
                $('#respu1').prop('checked', false);
                $('#respu3').prop('checked', false);
            });
            $('#respu3').click('click', function(){
                $('#respu2').prop('checked', false);
                $('#respu1').prop('checked', false);
            });

            
    </script>


    <?php
    include('footer.php');
    ?>