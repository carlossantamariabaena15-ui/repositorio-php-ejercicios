<?php
// Array del carrito
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Función para calcular total
function calcularTotal($carrito) {
    $total = 0;
    foreach ($carrito as $item) {
        $subtotal = $item['precio'] * $item['cantidad'];
        $total += $subtotal;
        echo "Producto: " . $item['producto'] . "<br>";
        echo "Precio unitario: " . $item['precio'] . "<br>";
        echo "Cantidad: " . $item['cantidad'] . "<br>";
        echo "Subtotal: $subtotal<br><br>";
    }
    return $total;
}

// Calcular total sin descuento
$totalSinDescuento = calcularTotal($carrito);

// Aplicar descuento
$descuento = 0;
if ($totalSinDescuento > 1000) {
    $descuento = 0.10; // 10%
} elseif ($totalSinDescuento > 500) {
    $descuento = 0.05; // 5%
}

$montoDescuento = $totalSinDescuento * $descuento;
$totalFinal = $totalSinDescuento - $montoDescuento;

// Mostrar resultados
echo "Total sin descuento: $totalSinDescuento<br>";
echo "Descuento aplicado: " . ($descuento * 100) . "% ($montoDescuento)<br>";
echo "Total final: $totalFinal<br>";
?>