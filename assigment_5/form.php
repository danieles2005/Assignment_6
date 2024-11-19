<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Números</title>
</head>
<body>

<h2>Ingresa cinco números</h2>
<form action="form.php" method="get">
    <label for="a">Número a:</label>
    <input type="number" id="a" name="a" required><br>

    <label for="b">Número b:</label>
    <input type="number" id="b" name="b" required><br>

    <label for="c">Número c:</label>
    <input type="number" id="c" name="c" required><br>

    <label for="d">Número d:</label>
    <input type="number" id="d" name="d" required><br>

    <label for="e">Número e:</label>
    <input type="number" id="e" name="e" required><br>

    <button type="submit">Enviar</button>
</form>

<?php
// Verificar si se han enviado todos los valores
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) && isset($_GET['d']) && isset($_GET['e'])) {
    // Recuperar los valores de los parámetros de URL o del formulario
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];
    $e = $_GET['e'];

    // Mostrar los valores ingresados
    echo "<h3>Valores ingresados:</h3>";
    echo "a: $a<br>";
    echo "b: $b<br>";
    echo "c: $c<br>";
    echo "d: $d<br>";
    echo "e: $e<br>";
}
?>

</body>
</html>
