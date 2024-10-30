<?php
function renderTemplate($funcionario){
    // chamando o template
    include "template.php";
} 
// setando as informações do banco de dados 
$servidor = 'localhost';
$usuario = 'root';
$senha ='';
$banco_de_dados ='bancodedados1';

// criando um objeto dessa conexão
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);




?>