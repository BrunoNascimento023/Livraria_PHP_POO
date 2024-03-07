<?php

require_once 'Autor.php';

class Livros {
    public $nome;
    public $descricao;
    public $valor;
    public $isbn;
    public $Autor; // Processo de composição (Quando uma classe tem outra classe como atributo)

    function MostrarDetalhes(){
        echo "Mostrando detalhes dos livros em estoque!" . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Descrição: " . $this->descricao . "<br>";
        echo "Valor: " . $this->valor . "<br>";
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Autor: " . $this->Autor . "<br>";
        echo "<br>";   
    }

}
?>