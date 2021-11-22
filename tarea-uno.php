<?php

$cadenas = ["patata", "cebolla", "sal", "pimienta", "te", "agua"];
//cuando ponto tilte a té, deja de ser la palabra más corta. POR QUÉ FRANCISCO????
$longestWord = $cadenas[0];
$shortestWord = $cadenas[0];

foreach ($cadenas as $word) {
    if (strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
    }
    if (strlen($word) < strlen($shortestWord)) {
        $shortestWord = $word;
    }
}
print_r($cadenas);
echo " <br>La palabra más larga es $longestWord<br>";
echo "La palabra más corta es $shortestWord";