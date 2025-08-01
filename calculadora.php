<?php
$resultado = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    if ($operacion == "dividir" && $num2 == 0) {
        $error = "❌ Error: No se puede dividir entre cero.";
    } else {
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
                $resultado = $num1 / $num2;
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #f1f1f1;
            padding: 40px;
        }
        form {
            background-color: white;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .resultado {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post">
        <input type="number" name="num1" required placeholder="Número 1"><br><br>
        <input type="number" name="num2" required placeholder="Número 2"><br><br>
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php elseif ($resultado !== ""): ?>
        <div class="resultado">Resultado: <?= $resultado ?></div>
    <?php endif; ?>

<br><br>
<a href="index.php" style="text-decoration: none;">
    <button style="padding: 10px 20px; font-size: 16px; cursor: pointer;">
        ⬅️ Volver al Menú
    </button>
</a>

</body>
</html>
