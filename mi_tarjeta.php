<?php
$nombre = "Nahuel Alexander";
$apellido = "Rodriguez";
$edad = 22;
$carrera = "Desarrollo de Software";
$universidad = "ITLA";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Tarjeta</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="tarjeta-contenedor">
    <div class="tarjeta">
      <h2><?php echo $nombre . " " . $apellido; ?></h2>
      <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
      <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
      <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>
      <p class="edad-mensaje">
        <?php
          if ($edad >= 18) {
            echo "🟢 Eres mayor de edad";
          } else {
            echo "🔴 Eres menor de edad";
          }
        ?>
      </p>
    </div>
  </div>

  <br>
  <a href="index.php" style="text-decoration: none;">
    <button class="boton-volver">⬅️ Volver al Menú</button>
  </a>
</body>
</html>
