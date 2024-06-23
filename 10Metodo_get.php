<html>
<head>
    <title>Metodo Get
    </title>
</head>
<body>
<form method="get" action="10calculos_get.php">
    <input type="text" name="numero1" placeholder="Ingrese el primer número" required><br>
    <select name="operacion" required>
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select><br>
    <input type="text" name="numero2" placeholder="Ingrese el segundo número" required><br>
    <input type="submit" value="Calcular">
</form>
</body>
</html>