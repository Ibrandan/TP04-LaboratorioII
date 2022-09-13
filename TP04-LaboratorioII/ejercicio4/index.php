<?php 
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section class="form__contenedor">
        <form action="" method="post">
            <legend>Inicie Sesion</legend>
            <section>
                <label for="lbl-user">Nombre de usuario</label>
                <input type="text" name="" id="lbl-user">        
            </section>
            <section>
                <label for="lbl-password">Contraseña</label>
                <input type="password" name="" id="lbl-password">        
            </section>
            <input type="button" value="Iniciar sesion">
        </form>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>