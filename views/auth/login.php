<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php
    include_once __DIR__ ."/../templates/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <input 
            type="email"
            id="email"
            placeholder="Email"
            name="email"
        >
    </div>
    <div class="campo">
        <input 
            type="password"
            id="password"
            placeholder="Password"
            name="password"
        >
    </div>
    
    <input type="submit" class="boton" value="Iniciar sesión">

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>