<h1>Exercicios 2 </h1>
<p> 
    Receba um numero qualquer e mostrar se é impar ou par.
</p>
<body>
<?php
   $Valor1 = $_GET['VALOR1'];
   if ($Valor1 % 2 == 0) {
    echo "O número $Valor1 é par.";
} else {
    echo "O número $Valor1 é ímpar.";
}

   ?>


   <form method="get">
        <label for="VALOR1">VALOR1</label>
        <input type="text" id="VALOR1" name="VALOR1">
        
        <input type="submit" value ="Par ou Impar">
       
        
    </form>