<?php

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelera';
        }
        function freiar(){
            echo 'Freiar';
        }
    }

    class Carro{
        function __construct($placa, $cor) 
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        public $teto_solar = true;

        function abrirTeto(){
            echo 'abre o teto';
        }
        function alterarPosicaoVolante(){
            echo 'Altera a posição do volante';
        }
    }

    class Moto extends Veiculo{
        function __construct($placa, $cor) 
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        public $contraPesoGuidao = true;

        function empina(){
            echo 'Empina daran dan dan';
        }
    }

    $carro = new Carro('EFG456', 'Azul');
    $moto = new Moto('ABC1234', 'Amarelo');

    echo '<pre>';
    print_r($carro);
    echo '<br> <br>';
    print_r($moto);
    echo '<br>';
    echo '<hr>';

    $carro->abrirTeto();
    echo '<br>';
    $moto->empina();
?>