<?php
class Empleados {
    private $empleados = []; // Array para almacenar los empleados

    // Métodos Set y Get para guardar y consultar empleados
    public function agregarEmpleado($nombre, $apellido, $dni, $edad) {
        $empleado = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'edad' => $edad
        ];
        $this->empleados[] = $empleado;
    }

    public function obtenerEmpleados() {
        return $this->empleados;
    }
}

// Crear una instancia de la clase Empleados
$empleados = new Empleados();
$TodosLosEmpleados = "";
// Si se envió el formulario, agregar un nuevo empleado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];

    $empleados->agregarEmpleado($nombre, $apellido, $dni, $edad);
}

// Mostrar la lista de empleados
$listaEmpleados = $empleados->obtenerEmpleados();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleados</title>
</head>
<body>
    <h1>Registro de Empleados</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>
        <button type="submit">Guardar Empleado</button>
    </form>

    <h2>Lista de Empleados:</h2>
    <ul>
        <?php foreach ($listaEmpleados as $empleado): 
            $TodosLosEmpleados = $TodosLosEmpleados . "<li>" . "Nombre: " . $empleado['nombre'] . " Apellido: " . $empleado['apellido'] . " DNI: " . $empleado['dni'] . " Edad: " . $empleado['edad'] . "</li><br>";
         endforeach;
         echo $TodosLosEmpleados; 
         ?>
    </ul>
</body>
</html>
