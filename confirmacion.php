<?php
session_start();

if (!isset($_SESSION['agente'])) {
    header("Location: index.php");
    exit();
}
$agente = $_SESSION['agente'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Confirmación de Registro</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
<h2>¡Registro Exitoso!</h2>
<p>El agente secreto ha sido registrado correctamente:</p>
<ul>
    <li><strong>Nombre:</strong> <?php echo base64_decode($agente['nombre']); ?></li>
    <li><strong>Agente ID:</strong> <?php echo base64_decode($agente['agente_id']); ?></li>
    <li><strong>Departamento ID:</strong> <?php echo $agente['departamento_id']; ?></li>
    <li><strong>Número de misiones:</strong> <?php echo $agente['num_misiones']; ?></li>
    <li><strong>Descripción de la nueva misión:</strong> <?php echo $agente['descripcion_mision']; ?></li>
    <li><strong>Campo:</strong> <?php echo $agente['campo']; ?></li>
</ul>

<form action="index.html" method="get">
    <input type="submit" value="Volver al formulario">
</form>
</div>
</body>
</html>
