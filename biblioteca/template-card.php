<?php

    $produto = [
        'nome' => "Camisa do coringa",
        'preco' => "490.00"
    ];

?>
<div class="card">
    <header>
        <h2><?= $produto['nome']; ?></h2>
        <button>Ver Valor ▼</button>
    </header>
    <article>
        <span><h2>R$ <?= $produto ['preco']; ?></span>
    </article>
</div>    
