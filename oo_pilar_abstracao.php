<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters e setters
        //o metodo set tem a função de definir os valores dos atributos dos objetos

        function setNome($nome)
        {
            $this->nome = $nome;
        }
        function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos)
        {
            $this->numFilhos = $numFilhos;
        }

        function getNome()
        {
            return $this->nome;
        }
        function getTelefone()
        {
            return $this->telefone;
        }
        function getNumFilhos()
        {
            return $this->numFilhos;
        }

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s)";
  
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->setNome('Marcos ');
    $y->setTelefone('11 9999-8888');
    $y->setNumFilhos(3 );
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui '. $y->getNumFilhos() . 'filhos ' . 'o telefone dele é ' . $y->getTelefone();  
    echo "<br>";

    $x = new Funcionario();
    $x->setNome("Adriana");
    $x->setNumFilhos(0);
    $x->setTelefone('11 8988-9999');
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos ' . 'o telefone dela é ' . $x->getTelefone();

   
?>