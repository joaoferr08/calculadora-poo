<?php

include("Calculadora.php");

if (isset($_POST["calcular"])) {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];

    $calculadora = new Calculadora();

    $calculadora->numero1 = $numero1;
    $calculadora->numero2 = $numero2;

    if ($operacao == "+") {
        $resultado = $calculadora->somar();
    }

    if ($operacao == "-") {
        $resultado = $calculadora->subtrair();
    }

    if ($operacao == "*") {
        $resultado = $calculadora->multiplicar();
    }

    if ($operacao == "/") {
        $resultado = $calculadora->dividir();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>

    <h1>Calculadora</h1>

    <form method="POST">

        <label>Primeiro número:</label>
        <input type="number" name="numero1" step="any" required>

        <br><br>

        <label>Segundo número:</label>
        <input type="number" name="numero2" step="any" required>

        <br><br>

        <label>Operação:</label>

        <select name="operacao">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <br><br>

        <input type="submit" name="calcular" value="Calcular">

    </form>

    <?php

    if (isset($resultado)) {
        echo "<h2>Resultado: $resultado</h2>";
    }

    ?>

</body>

</html>

