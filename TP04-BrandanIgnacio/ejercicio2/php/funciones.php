<?php
    const BTC = 2915560.38;
    const ETH = 240773.79;
    const BNB = 40947.50;
    const SOLANA = 4982.59;
    const USDT = 141.16;

    $ruta = '../css';

    require_once('../html/header.html');
    
    if(!empty($_POST['monto']) && !empty($_POST['cripto'])){
        function cotizacionCripto($cripto, $monto){
            switch ($cripto) {
                case 'btc':
                    $cantidad = $monto / BTC;
                    echo '<p> Bitcoin (BTC): ' . $cantidad . '</p>';
                    break;
                case 'eth':
                    $cantidad = $monto / ETH;
                    echo '<p> Ethereum (ETH): ' . $cantidad . '</p>';
                    break;
                case 'bnb':
                    $cantidad = $monto / BNB;
                    echo '<p> Binance Coin (BNB): ' . $cantidad . '</p>';
                    break;
                case 'sol':
                    $cantidad = $monto / 4982;
                    echo '<p> Solana (SOL): ' . $cantidad . '</p>';
                    break;
                case 'usdt':
                    $cantidad = $monto / USDT;
                    echo '<p> Tether (USDT): ' . $cantidad . '</p>';
                    break;                                                                        
            }
        }   
    }
?>
<main>
    <section class="cantidad">
        <h2>Compra:</h2>
        <?php
            echo '<p> Monto Disponible: $' . $_POST['monto'] . '</p>';
            echo cotizacionCripto($_POST['cripto'], $_POST['monto']);
        ?>
    </section>
</main>

<?php
    require_once('../html/footer.html');

?>