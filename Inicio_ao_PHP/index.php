<h2>Exercicios 1</h2>
<p>calcular todos os valores dos vetores dentro da matriz = [[3,2,1], [1,2,3], [3,2,1]] </p>

<?php
// calcular todos os valores dos vetores dentro da matriz
// Declaração correta da matriz
$matrizArray = [[3,2,1], [1,2,3], [3,2,1]];

// Inicializa a variável para armazenar a soma
$somaTotal = 0;

// Percorre a matriz e soma todos os elementos
foreach ($matrizArray as $linha) {
    foreach ($linha as $valor) {
        $somaTotal += $valor;
    }
}

// Imprime o resultado
echo " R = A soma  é: " . $somaTotal;
?>




<h2>Exercicios 2</h2>

<?php
  
  echo '<p>Pedro esta com sono</p>';
  $teste = '<p>Abner também está com sono </p>';
  $teste1 = '<p>Gustavo também está com sono </p>';
  $soma = 2+2;

?>

  <?= 
  $teste,$teste1,$soma ?>
 

<h2>Exercicios 3</h2>

<?php
$diferente = (10 != 5);

   if($diferente)
    echo "Entrou no if ";
   else
    echo "Entrou no else";
   
?>
<h2>Exercicios 4</h2>

<?php
  $diferente2 = (10 != 10);

  $tituloPost ="Teste";

  $titulo = $tituloPost == "Teste" ? $tituloPost : "Sem Titulo";

  echo $titulo;
  $tituloPost2 ="Tester";

  $titulo2 = $tituloPost2 == "Teste" ? $tituloPost2 : " ,Sem Titulo";

  echo $titulo2;
   
?>
<h2>Exercicios 5</h2>

<?php

$infoPost =[

    "Titulo" => "Alunos passam no processo seletivo",
    "Autor " => "Caique, e o ++",  
];
$titulooPost = $infoPost['Titulo'] != "" ? $infoPost['Titulo']:"Sem titulo";
$autorPost = $infoPost['Autor'] != ""? $infoPost['Autor'] : "Desconhecido";

?>
<div class="post">
    <h2><?= $titulooPost?></h2>
    <span>Escrito por:<?=$autorPost ?></span>
</div>


