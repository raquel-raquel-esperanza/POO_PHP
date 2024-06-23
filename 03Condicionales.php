<html>
<head>
    <title>Condicionales</title>
</head>
<body>
<form method="post" action="03Condicionales.php">
    <input type="text" name="numero1" placeholder="Número 1">
    <input type="text" name="numero2" placeholder="Número 2">
    <button type="submit">Sumar</button>
</form>
</body>
</html>

<?php
$numero1 = $_POST["numero1"] ?? null;
$numero2 = $_POST["numero2"] ?? null;
$suma = $numero1 + $numero2;

if ($_POST) {
    echo "El resultado de la suma es: " . $suma;
}
?>