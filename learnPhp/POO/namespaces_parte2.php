<?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use A\Cliente as C1;
    use B\Cliente;

    $c = new C1();
    echo '<pre>';
    print_r($c);
    echo '</pre>';

    echo $c->__get('nome');

    $c = new Cliente();
    echo '<pre>';
    print_r($c);
    echo '</pre>';

    echo $c->__get('nome');
?>