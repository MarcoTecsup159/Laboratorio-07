<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //validacion y limpiar datos
    $nombre = htmlspecialchars($_POST['nombre']);
    $agente_id = htmlspecialchars($_POST['agente_id']);
    $departamento_id = htmlspecialchars($_POST['departamento_id']);
    $num_misiones = intval($_POST['num_misiones']);
    $descripcion_mision = htmlspecialchars($_POST['descripcion_mision']);
    $campo = htmlspecialchars($_POST['campo']);

    //cifrar los datos
    $nombre_cifrado = base64_encode($nombre);
    $agente_id_cifrado = base64_encode($agente_id);

    //almacenar en la sesión
    $_SESSION['agente'] = [
        'nombre' => $nombre_cifrado,
        'agente_id' => $agente_id_cifrado,
        'departamento_id' => $departamento_id,
        'num_misiones' => $num_misiones,
        'descripcion_mision' => $descripcion_mision,
        'campo' => $campo
    ];

    header("Location: confirmacion.php");
    exit();
}
?>
