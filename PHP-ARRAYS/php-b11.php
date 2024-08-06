<?php


$estoque[] = 
    [
    'codigo' => 3,
    'nome' => 'Camisa Regata',
    'tamanho' => 'M',
    'cor' => 'Preta',
    'quantidade' => 0
    ];
    $estoque[] = 
    [
    'codigo' => 5,
    'nome' => 'Chinelo',
    'tamanho' => 'p',
    'cor' => 'Marron',
    'quantidade' => 0
    ];
    $estoque[] = 
    [
    'codigo' => 8,
    'nome' => 'Bota',
    'tamanho' => 'g',
    'cor' => 'branca',
    'quantidade' => 95
    ];











// Implemente aqui o código
function listarEstoque($estoque){
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


function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade)
{
   // sort ()
       $estoque [] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
        ];

}


function venderProduto (&$estoque, $codigo, $quantidade){
 // print_r($estoque);
    for ($i = 0; $i < count($estoque); $i++){
        //print_r($estoque[$i]);

        if ($estoque[$i]["codigo"]==$codigo){
            $estoque[$i]["quantidade"] -= $quantidade;
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




// Função para exibir o menu e obter a escolha do usuário
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
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Vender um produto\n";
            $codigo = readline("Digite código do produto: ");
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