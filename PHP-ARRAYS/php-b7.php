<?php

function media($notasAluno){
    $result = 0;
    for ($i = 0; $i < 5; $i++) {
    
        $result += $notasAluno[$i];

    }

    return $result / 5;
}

$totalApro = 0;
$totalRep = 0;


$notasAlunos = [
    $aluno1 = [8.5, 6.0, 7.8, 9.2, 5.5],
    $aluno2 = [7.0, 8.0, 6.5, 7.5, 8.5],
    $aluno3 = [6.5, 7.5, 4.5, 5.5, 7.0],
    $aluno4 = [5.0, 4.6, 7.8, 9.0, 6.0] 
    ];

for ($i = 0; $i < 4; $i++){
    $resultAlu = media($notasAlunos[$i]);


    if ($resultAlu >= 7){
       $totalApro = $totalApro + 1;
        echo $i . " - Sua média é: " . $resultAlu . ". você esta aprovado.\n";
     }
    else {
        $totalRep = $totalRep + 1;
        echo $i . " - Sua média é: " . $resultAlu . ". você esta reprovado.\n";
    }
}

echo "----------------------------------\n";
echo "total de alunos aprovados: " . $totalApro . "\n";
echo "Total de alunos reprovados: " . $totalRep;