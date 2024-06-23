<html>
<head>
    <title>Metodo Post
    </title>
</head>
<body>
<form method="post" action="11calculos_Post.php">
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