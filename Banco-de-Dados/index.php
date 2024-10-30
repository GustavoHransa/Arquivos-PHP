<?php

if(isset($_POST['submit']))
{
    //print_r($_POST['nome']);
    // print_r('<br>');
    //print_r($_POST['idade']);
    //print_r('<br>');
    //print_r($_POST['cargo']);
    //print_r('<br>');
    //print_r($_POST['salario']);
    //print_r('<br>');
    //print_r($_POST['telefone']);

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $telefone = $_POST['telefone'];
    $result = "INSERT INTO funcionarios(nome,idade,cargo,salario,telefone) VALUES ('$nome','$idade',$cargo','$salario','$telefone') "; 
    mysqli_query($conexao,$result) or die("Erro ao tentar cadastrar registro");
    
    echo "Funcionário cadastrado com sucesso!";

}

?>

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
$conexao ->close();
?>
</section>
<form action="index.php" method="POST">
    
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
    <input type="submit" name="submit" id="submit"> 
    
</form>
</body>
</html>