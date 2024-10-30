<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style.css"> -->
    <title>Inicio ao PHP</title>
</head>
<body>
<section id='funcionarios'>
<?php


$var = 'teste';
if(isset($var)){
 echo "minha variável existe."; 
}else{
  echo "a variável não existe.";
};


// função para renderizar o template passando a linha da tabela funcionario 
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

$nome = $_get['nome'];
$idade = $_get['idade'];
$cargo = $_get['cargo'];
$salario  = $_get['salario'];
$telefone = $_get['telefone'];



$sql = "INSERT INTO funcionarios(nome,idade,cargo,salario,telefone) VALUES ('$nome','$idade',$cargo','$salario','$telefone') "; 
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");

echo "Funcionário cadastrado com sucesso!";


if(isset($nome)){
 echo "minha variável existe."; 
}else{
  echo "a variável não existe.";
};


//$selectFuncionarios = $conexao->query('select * from funcionarios');

//criando um objeto de resposta da mysql_result para todos os itens (fetch_all)
//$rowsFuncionarios = $selectFuncionarios->fetch_all(MYSQLI_ASSOC);

// fechando conexão 
$conexao ->close();

// iterando sobre todos os itens da tabela , sempre que passar em um item de $rowsFuncionarios,
// esse item é guardado em uma nova variavel $funcionario
//foreach($rowsFuncionarios as $funcionario){
    //sempre que passar em um funcionario , vai chamar a template colocando as informações da linha (funcionario)
    //renderTemplate($funcionario);

//}

?>
</section>
<form action="index.php" method="get">
    
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome">
    <label for="idade">Idade</label>
    <input type="text" id="idade" name="idade">
    <label for="cargo">Cargo</label>
    <input type="text" id="cargo" name="cargo">
    <label for="salario">Salario</label>
    <input type="text" id="salario" name="salario">
    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone">
    <input type="submit" value ="Enviar"> 
    
</form>
</body>
</html>


