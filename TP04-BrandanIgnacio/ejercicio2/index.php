<?php
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section>
        <form action="php/funciones.php" method="POST">
            <section>
                <label for="lbl-monto">Monto disponible:</label>
                <input type="number" name="monto" step="0.01" id="lbl-monto" min="1" required>
            </section>
            <section>
                <label for="lbl-cripto">Cripto:</label>
                <select name="cripto" id="lbl-cripto" required>
                    <option value="btc">Bitcoin</option>
                    <option value="eth">Ethereum</option>
                    <option value="bnb">Binance Coin</option>
                    <option value="sol">Solana</option>
                    <option value="usdt">Tether</option>
                </select>
            </section>
            <input type="submit" class="btn" value="Comprar">
        </form>
    </section>
</main>

<?php
    require_once('html/footer.html');
?>