<?php

require_once 'autoload.php';

function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}


while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $SKU = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $quantidade = readline("Digite a quantidade: ");
            $unidadeMedida = readline("Digite a unidade de medida: ");
            $preco = readline("Digite o preço: ");

            $produto = new Produto($SKU, $nome, $quantidade, $unidadeMedida, $preco);

            
            break;
        case 2:
            echo "Vender um produto\n";
            $SKU = readline("Digite código do produto: ");
            $quantidade = readline("Digite a Quantidade: ");
            venderProduto($estoque,$codigo,$quantidade);
            // Implemente aqui o código para a opção 2


            break;
        case 3:
            echo "Verificar Estoque\n";
             verificar ($estoque);
            // Implemente aqui o código para a opção 3


            break;
        case 4:
            echo "Listar o Estoque\n";
             listarEstoque($estoque);
            
            // Implemente aqui o código para a opção 4
            break;
        case 5:
            echo "Saindo...\n";
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}
