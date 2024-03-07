<?php

require_once 'Livros.php';
require_once 'Autor.php';

    class CadastroLivros {
        function __construct(){
           $autor  = new Autor();
           $autor->nome = "Rodrigo Zebini";
           $autor->email = "rodrigo.zerbini@gmail.com";
           $autor->cpf = "476.082.477-20";

           $Livro = new Livros();
           $Livro->nome = "Java 8 Prático";
           $Livro->descricao = "Novos Recursos da Linguagem";
           $Livro->valor = 59.90;
           $Livro->isbn = "457515765454";

           $Livro->Autor = $autor;

           $Livro->MostrarDetalhes();

        }
    }

?>