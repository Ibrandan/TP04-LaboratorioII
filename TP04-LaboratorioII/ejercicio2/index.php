<?php
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section>
        <form action="php/funciones.php" method="get">
            <section>
                <label for="lbl-monto">Monto disponible:</label>
                <input type="number" name="monto" id="lbl-monto" min="1" required>
            </section>
            <section>
                <label for="lbl-cripto">Cripto:</label>
                <select name="cripto" id="lbl-cripto" required>
                    <option value="btc">Bitcoin</option>
                    <option value="eth">Ethereum</option>
                    <option value="sol">Solana</option>
                    <option value="bnb">BNB</option>
                </select>
            </section>
            <input type="submit" class="btn" value="Comprar">
        </form>
    </section>
</main>

<?php
    require_once('html/footer.html');
?>