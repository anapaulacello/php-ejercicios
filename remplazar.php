<html>
<body>
    <h3>TRADUCTOR ESPAÑOL-MILENIAL</h3>
    <form >
    <input type="string" name="cadena">
    <button  type="submit">enviar</button>
    </form>
<?php

$cadena= $_GET['cadena'];
$palabras= array("porque", "que", "gu", "bu", "igual", "¿","¡");
$milenial= array("xq", "k", "w", "w","=", " "," ");
$salida = str_replace($palabras, $milenial, $cadena);

echo $salida;