<!-- Instanciación de php para que el servidor reconozca que este es código php: -->
<?php

// Verificar si el formulario ha sido enviado:
if ($_SERVER['REQUEST_METHOD'] == 'POST'){


// Retener la info ingresada en el formulario, con variables que coinciden con los nombres del los input del form:

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];


// Mostrar los datos recibidos 

echo "<html>";
echo "<head>";

// Enlace al archivo CSS
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "</head>";
echo "<body>";

echo "<div class='container'>";
echo "<h2>Datos recibidos:</h2>";

echo "<div class='data'><span class='label'>Nombre:</span> " . htmlspecialchars($nombre) . "</div>";
echo "<div class='data'><span class='label'>Email:</span> " . htmlspecialchars($email) . "</div>";
echo "<div class='data'><span class='label'>Mensaje:</span> <div class='message'>" . htmlspecialchars($mensaje) . "</div></div>";

echo "</div>";

echo "</body>";
echo "</html>";
} else {
    echo "No se enviaron datos.";
}
?>