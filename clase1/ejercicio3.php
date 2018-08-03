<?php

// $variable01 = true;

// $variable02 = false;

// $variable03 = 0;

// $variable04 = 1;

// $variable05 = 6;

// $variable06 = '';

// $variable07 = "3";

// $variable08 = "true";

// $variable09 = 'false';

// $variable10 = null;

// function tipoDato($varN)
// {
//     if ( $varN == true )
//     {
//         echo 'el valor' . $varN . 'es verdadero.';
//     }
//     else
//     {
//         echo 'el valor' . $varN . 'es falso.';
//     }
// }

// tipoDato($variable03);

$animales = [
    0 => "perro" ,
    1 => "gato" ,
    2 => "loro" ,
    3 => "pez" ,
    4 => "paloma" 
];
echo "<pre>";
var_dump ($animales);


$animales[] = "vaca";
$animales[] = "aguila";

var_dump ($animales);
echo "Me gustan los animales:" ." ". $animales[0] ." ". $animales[1] ." ". $animales[2] ." ". $animales[3] ." ". $animales[4] ." ". $animales[5] ." ". $animales[6] ;

$animales[0] = "mosca";
var_dump ($animales);

$animales[100] = "foca";
var_dump ($animales);

$animales[16] = "caballo";
var_dump ($animales);
echo "</pre>";


$miAuto = [
    "marca" => "ford",
    "modelo" => "focus",
    "color"=> ["negro"],
    "anio" => 2018 ,
    "patente" => "arg1235"
];
var_dump ($miAuto);

$miAuto[] = "Jorge";

echo "<hr>";

$valor1= 10;
$valor2 = 20;
$valor3 = $valor1 + $valor2;
echo "la suma de los datos". " ". $valor3;

?>