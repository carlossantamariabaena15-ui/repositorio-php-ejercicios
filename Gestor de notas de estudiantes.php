<?php
// Array de estudiantes
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

// Función para calcular promedio
function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

// Variables para contadores y máximo
$aprobados = 0;
$suspendidos = 0;
$maxPromedio = 0;
$estudianteMax = "";

// Recorrer estudiantes
foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);
    echo "Nombre: $nombre<br>";
    echo "Promedio: " . number_format($promedio, 2) . "<br>";
    if ($promedio >= 6) {
        echo "Aprobado<br><br>";
        $aprobados++;
    } else {
        echo "Suspenso<br><br>";
        $suspendidos++;
    }

    // Verificar promedio más alto
    if ($promedio > $maxPromedio) {
        $maxPromedio = $promedio;
        $estudianteMax = $nombre;
    }
}

// Resultados finales
echo "Aprobados: $aprobados<br>";
echo "Suspendidos: $suspendidos<br>";
echo "Estudiante con promedio más alto: $estudianteMax (" . number_format($maxPromedio, 2) . ")<br>";
?>