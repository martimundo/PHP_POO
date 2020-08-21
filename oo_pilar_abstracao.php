<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $dpto = null;

        //getters e setters
        //o metodo set tem a função de definir os valores dos atributos dos objetos
        //overloading de paramentros get e set

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        /*function setNome($nome)
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
        */

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s) trabalha no dpto $this->dpto na função $this->cargo";
  
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->__set('nome' , 'Marcos');
    $y->__set('telefone','9999-8888');
    $y->__set('numFilhos', 3 );
    $y->__set('dpto', 'Adminitrativo');
    $y->__set('cargo', 'Auxiliar Adminisrtativo');
    //echo $y->resumirCadFunc();
    echo $y->__get('nome') . ' possui '. $y->__get('numFilhos') . 'filhos ' . 'o telefone dele é <br>'. $y->__get('telefone') . 
    'trabalha como ' . $y->__get('cargo') . 'no dpto' . $y->__get('dpto');  
    echo "<br>";

    $x = new Funcionario();
    $x->__set('nome','Adriana');
    $x->__set('numFilhos', 0);
    $x->__set('telefone','11 8988-9999');
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos ' . 'o telefone dela é <br>' . $x->__get('telefone'). 'trabalha como ' 
    . $y->__get('cargo') . 'no dpto' . $y->__get('dpto');

   
?>