<?php
    const BTC = 2915560.38;
    const ETH = 240773.79;
    const BNB = 40947.50;
    const SOLANA = 4982.59;
    const USDT = 141.16;

    if(!empty($_POST['monto']) && !empty($_POST['cripto'])){
        $cripto = $_POST['cripto'];
        $monto = $_POST['monto'];

        function cotizacionCripto(){
            switch ($cripto) {
                case 'btc':
                    $cantidad = $monto /
                    break;
                case 'eth':
                    $cantidad = $monto /
                    break;
                case 'bnb':
                    $cantidad = $monto /
                    break;
                case 'sol':
                    $cantidad = $monto /
                    break;
                case 'usdt':
                    $cantidad = $monto /
                    break;                                                                        
            }
        }   
    }

?>