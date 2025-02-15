<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php
    include_once __DIR__ ."/../templates/alertas.php";
?>
<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombre"
            value="<?php echo s($usuario->nombre) ?>"
        >
    </div>
    <div class="campo">
        <input 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Apellido"
            value="<?php echo s($usuario->apellido) ?>"
        >
    </div>
    <div class="campo">
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Teléfono"
            value="<?php echo s($usuario->telefono) ?>"
        >
    </div>
    <div class="campo">
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            value="<?php echo s($usuario->email) ?>"
        >
    </div>
    <div class="campo">
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Password"
        >
    </div>

        <input type="submit" class="boton" value="Crear cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>