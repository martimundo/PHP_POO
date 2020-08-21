<?php

class Pessoa{

    public $nome = null;

    public function __construct($nome)
    {

        echo 'Objeto Iniciado';
        $this->nome = $nome;
    }

    public function __destruct()
    {
        echo  'Objeto removido';
    }
    function __get($atributo)
    {
        return $this->$atributo;
    }
    function correr()
    {
        return $this->__get('nome') . 'esta correndo';
    }

}

$pessoa = new Pessoa('Marcos ');
echo '<br /> Nome: ' . $pessoa->__get('nome');
echo '<br />' . $pessoa->correr();

echo '<br />';
unset($pessoa);