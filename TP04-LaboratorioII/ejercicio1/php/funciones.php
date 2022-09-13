<?php
    $ruta = '../css';
        
    function invertirNumero($num) {
        $invertido = "";
        for ($i=strlen($num); $i > 0; $i--) { 
            $invertido = $invertido . $num[$i];

        }
        echo '<td>'. $invertido .'</td>';
    }

?>