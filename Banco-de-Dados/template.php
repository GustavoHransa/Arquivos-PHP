<div class ='card-funcionario'>
<header>
 <h2>Nome: <?= $funcionario['nome']; ?></h2>
 <p>Idade: <?= $funcionario['idade'];?></p>
 <p>Cargo: <?= $funcionario['cargo'];?></p>
 <p>Sálario: R$ <?= $funcionario['salario'];?></p>

</header>
<footer>
    <a href ="tel:<?=$funcionario["telefone"]; ?> ">Telefone:<?= $funcionario['telefone'];?></a>
    <span>ID: <?= $funcionario['id'];?></span>
</footer>
</div>
