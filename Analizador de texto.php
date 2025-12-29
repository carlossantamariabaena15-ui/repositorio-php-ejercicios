<?php
// Texto a analizar
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// Convertir a minúsculas
$textoMinus = strtolower($texto);

// Dividir en palabras (explode por espacio, pero limpia puntuación básica)
$palabras = explode(" ", preg_replace("/[^a-z0-9 ]/", "", $textoMinus)); // Elimina puntuación

// Filtrar palabras de menos de 3 letras
$palabrasFiltradas = array_filter($palabras, function($palabra) {
    return strlen($palabra) >= 3;
});

// Contar palabras totales
$totalPalabras = count($palabrasFiltradas);
echo "Número de palabras (≥3 letras): $totalPalabras<br><br>";

// Contar apariciones
$conteo = array_count_values($palabrasFiltradas);

// Mostrar palabras que aparecen más de una vez
echo "Palabras que aparecen más de una vez:<br>";
foreach ($conteo as $palabra => $veces) {
    if ($veces > 1) {
        echo "$palabra: $veces<br>";
    }
}

// Palabra más repetida
arsort($conteo); // Ordenar descendente
$palabraMax = key($conteo);
$vecesMax = $conteo[$palabraMax];
echo "<br>Palabra más repetida: $palabraMax ($vecesMax veces)<br>";
?>