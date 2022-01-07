<?php

    $array = [
        [8,6,4],
        [4,5,6],
        [1,2,3],
    ];
    
    echo '<pre>';
        print_r($array);
    echo '</pre>';
    echo "<hr>";

    function menor($array){
        $a = 0;
        for ($i=0; $i<3; $i++) {
            for ($j=0; $j<3; $j++) {
                if ($a > $array[$i][$j] ) {
                    $a = $array[$i][$j]; 
                } 
            }
        } echo '<br>';
        return $a;
    }
    echo menor($array);
    
?>