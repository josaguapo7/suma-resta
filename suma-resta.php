<?php
echo "Bienvenido a la calculadora PHP\n";
echo "Ingrese el primer número: ";
$num1 = readline();

echo "Ingrese el segundo número: ";
$num2 = readline();

echo "Ingrese la operación (suma/resta): ";
$operacion = readline();

if ($operacion == "suma") {
    $resultado = $num1 + $num2;
    echo "El resultado de la suma es: " . $resultado . "\n";
} elseif ($operacion == "resta") {
    $resultado = $num1 - $num2;
    echo "El resultado de la resta es: " . $resultado . "\n";
} else {
    echo "Operación no válida. Por favor ingrese 'suma' o 'resta'.\n";
}
?>
