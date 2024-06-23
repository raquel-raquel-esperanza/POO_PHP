<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    // Realizar la operación seleccionada
    switch ($operacion) {
        case "sumar":
            $resultado = $num1 + $num2;
            break;
        case "restar":
            $resultado = $num1 - $num2;
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
        case "dividir":
            // Manejar la división por cero
            $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: División por cero";
            break;
        default:
            $resultado = "Operación no válida";
    }

    // Mostrar el resultado
    echo "<h2>Resultado:</h2>";
    echo "<p>{$num1} {$operacion} {$num2} = {$resultado}</p>";
}
?>
