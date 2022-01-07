<?php
    // Criar array com 6 elementos aleatorios simulando sorteio da mega sena. (Os numeros não podem repetir)
    $array = [];
    while( count($array)<=5){
        $number = rand(1, 60);
        if(!in_array($number, $array)){
            $array[] = $number;
        }

    
    }
    echo '<pre>';
    print_r ($array);
    echo '</pre>';

?>