<?php
    $ruta = '../css';
    require_once('../html/header.html');
?>
<main class="response">
    <section>
        <?php
            if(!empty($_POST['user']) && !empty($_POST['password'])){
                echo '<p> Usuario: ' . $_POST['user'] . '</p>';
                echo '<p> Contraseña: ' . $_POST['password'] . '</p>';
            }
        ?>
    </section>
</main>

<?php
    require_once('../html/footer.html');

?>