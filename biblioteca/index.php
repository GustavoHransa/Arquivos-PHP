<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    for ($i = 0 ;$i <= 10; $i++){
        require('template-card.php');
    }

?>
    
</body>
<script>
    var cardsDropDown = document.querySelectorAll('.card');
    cardsDropDown.forEach(elemento => { 

        var btnCard = elemento.querySelector('button');
        btnCard.addEventListener('click',function(){
            elemento.classList.toggle('ativo');
        })
    })
    console.log(cardsDropDown);

    
</script>
</html>






    