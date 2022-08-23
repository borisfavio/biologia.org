


var contador = 0;
var prog = 100/15



function prueba(){
    if(contador >=100){
        
        
    }
    else{
    contador +=prog
    
    document.getElementById('ttt').innerHTML = contador;
    $("#tiempo").css({"width":contador+"%","background-color":"red"})
    }

}

//Ejecutamos cada segundo
setInterval(prueba,1000); 



const myTemporizador
var tiempojuego = 10

setTimeout(function() {
   
   myTemporizador = setInterval(prueba, 1000);

   }, 5000);


var contador = 0;
var prog = 80 / (tiempojuego*2)



function prueba() {
   if (contador >= 80) {
       clearInterval(myTemporizador)
       alert("tiemp")

   } else {
       contador += prog

       document.getElementById('ttt').innerHTML = contador;
       $("#tiempo").css({
           "width": contador + "%",
           "background-color": "red"
       })
   }

}