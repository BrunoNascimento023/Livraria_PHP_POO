<?php

class CalculadoraEstoque{
    function __construct()
    {
       
        $soma = 0;
        $contador = 0;

        while($contador < 35){
            $valorLivro = 59.90;
            $soma = $valorLivro + $soma;
            $contador = $contador + 1;
        }

        echo 'O total de estoque é :' . $soma;
        echo '<br>';

        if($soma < 150){
            echo 'Seu estoque está muito baixo!';
        }elseif($soma >= 200){
            echo 'Seu estoque está muito alto!';
        }else{
            echo 'Seu estoque está bom!';
        }
    }
}
?>