<?php

class Estoque{
    public function listarEstoque($estoque){
        if (empty($estoque)) {
            echo 'estoque vasio!\n';}
        foreach($estoque as $produto){
            echo "{$produto['codigo']}\n";
            echo "{$produto['nome']}\n";
            echo "{$produto['tamanho']}\n";
            echo "{$produto['cor']}\n";
            echo "{$produto['quantidade']}\n";
        }  
    }

    function adicionarProduto(&$estoque, $SKU, $nome, $quantidade, $unidadeMedida, $preco)
    {
   // sort ()
       $estoque [] = [
        'codigo' => $SKU,
        'nome' => $nome,
        'tamanho' => $quantidade,
        'cor' => $unidadeMedida,
        'quantidade' => $preco
        ];
    }

    function venderProduto (&$estoque, $SKU, $preco){
        // print_r($estoque);
           for ($i = 0; $i < count($estoque); $i++){
               //print_r($estoque[$i]);
       
               if ($estoque[$i]["codigo"]==$SKU){
                   $estoque[$i]["quantidade"] -= $preco;
               }               
           }
        }

        function verificar (&$estoque){
            for ($i = 0; $i < count($estoque); $i++){
                //print_r($estoque[$i]);
        
                if ($estoque[$i]["quantidade"]== 0){
                    echo "este produto esta esgotado, precia repor.";
                    var_dump($estoque[$i]);
                }
            }
        }


        
       

}