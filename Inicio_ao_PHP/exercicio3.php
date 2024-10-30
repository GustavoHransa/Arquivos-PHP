<h1>Exercicios 3 </h1>
<p> 
    Receba um numero qualquer e mostrar o seu sucessor e seu antecessor.
</p>
<body>
<?php
   $Valor1 = $_GET['VALOR1'];

   $antecessor = $Valor1 - 1;
   $sucessor = $Valor1 + 1;

   echo "O antecessor é: " . $antecessor . "</br>";
   echo "O sucessor é: " . $sucessor  ;
   

   ?>


   <form method="get">
        <label for="VALOR1">VALOR1</label>
        <input type="text" id="VALOR1" name="VALOR1">
        
        <input type="submit" value ="Verificar">
       
        
    </form>