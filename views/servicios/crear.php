<h1 class="nombre-pagina">Nuevo servicio</h1>
<p class="descripcion-pagina">Llena todos los campos</p>

<?php 
    include_once __DIR__ . '/../templates/barra.php'; 
    include_once __DIR__ . '/../templates/alertas.php'; 
?>

<form action="/servicios/crear" class="formulario" method="POST">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" class="boton" value="Guardar servicio">
</form>