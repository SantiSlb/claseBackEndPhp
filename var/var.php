<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap');


body, html {
    background-color: lightslategray;
    color: lightyellow;
    font-family: 'fira code';
}

</style>

<!--Aqui comienza la estructura PHP-->

<?php 

echo "<h1>Variables en PHP</h1> <br >Uso y declaracion de 'Variables'";


// En PHP, se pueden declarar variables utilizando el signo "$" seguido del nombre de la variable.
// El nombre de la variable debe comenzar con una letra o con un (_), seguido de letras, numeros o guiones bajos

$nombre = "Pepe"; // string
$edad = 30; //entero
$altura = 1.75; // flotante
$tiene_hijos = "si"; // boolean (true o false)

//Uso de variable para imprimir un mensaje con variable.
echo 
    "<br><br><br>Nombre: " . $nombre,
    "<br>Edad: " . $edad,
    "<br>Altura: " . $altura,
    "<br>Tiene hijos?: " . $tiene_hijos;
?>