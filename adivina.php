<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_usuario = $_POST["numero"];
    $numero_secreto = rand(1, 5);

    if ($numero_usuario == $numero_secreto) {
        $mensaje = "🎉 ¡Wow, adivinaste! El número era $numero_secreto.";
    } else {
        $mensaje = "😢 ¡Sigue intentando! El número correcto era $numero_secreto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina mi número</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #fce4ec;
            padding: 40px;
        }
        form {
            background-color: white;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>
<body>
    <h2>Adivina un número del 1 al 5</h2>
    <form method="post">
        <input type="number" name="numero" min="1" max="5" required>
        <button type="submit">Adivinar</button>
    </form>
    <p><strong><?= $mensaje ?></strong></p>

<br><br>
<a href="index.php" style="text-decoration: none;">
    <button style="padding: 10px 20px; font-size: 16px; cursor: pointer;">
        ⬅️ Volver al Menú
    </button>
</a>

</body>
</html>
