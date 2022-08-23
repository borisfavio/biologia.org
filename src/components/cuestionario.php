<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

    <?php
    session_start();
    
    include('header.php');
    ?>
    <script>
        var puntos = 0
        var idnew = 1
        $(document).ready(function() {
            
            mostrarPregunta(1)
        });

            function mostrarPregunta(id) {
                if (id == "") {
                    document.getElementById("body").innerHTML = "FINDE LAS PREGUNTAS";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("body").innerHTML = this.responseText;
                            idnew ++
                        }
                    };
                    xmlhttp.open("GET", "servicioPreguntas.php?q=" + id+"&pts="+puntos, true);
                    xmlhttp.send();
                }
            }
            
       
//correcto
        function verificar() {
            puntos+=10
            $(".container-modal").css("display", "flex");
            setTimeout(function() {
                document.getElementById("body").innerHTML = "";
                mostrarPregunta(idnew)
            }, 2000);
                
            
        }
//incorrecto
        function verificar1() {
            $(".container-modal1").css("display", "flex");

            setTimeout(function() {
                document.getElementById("body").innerHTML = "";
                mostrarPregunta(idnew)
            }, 2000);
            
        }
    </script>
    <div id="body"></div>


    <?php
    include("footer.php");
    ?>