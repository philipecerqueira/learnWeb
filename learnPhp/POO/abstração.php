<?php

//modelo
class Funcionario{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargos = null;
    public $salarios = null;

    // getters e setters (overloading/sobrecarga)
    function __set($atributos, $valor){
        $this->$atributos = $valor;
    }

    function __get($atributos){
        return $this->$atributos;
    }



    // getters setters
    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }


    // metodos
    function resumoCadFunc(){
        return $this->getNome()/*ou __get('nome') em caso de overloadding, exemplo abaixo*/ . ' possui ' . $this->getNumFilhos() . ' filho(s)';
    }

    function modificaNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

}

$y = new Funcionario();
// Sem overlorading
$y->setNome('Mario');
$y->setNumFilhos(1);

echo $y->resumoCadFunc();
echo '<br>';
echo '<hr>';


$x = new Funcionario();
// Com overloading
$x->__set('nome', 'Ana');
$x->__set('numFilhos', '2');
$x->__set('telefone', '11 33 34');

echo 'Nome: ' . $x->__get('nome') . ', Filhos: ' . $x->__get('numFilhos') . ', Telefone: ' . $x->__get('telefone');
echo '<br>';
echo '<hr>';
?>