Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.
<?php
# es un formulario html que cuando el usuario lo rellena y presiona el botón de enviar hace una llamada al archivo accion.php y le da una frase con las respuestas del formulario
?>