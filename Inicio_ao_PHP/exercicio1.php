<h1>Exercicios 1 - metodo 1</h1>
<p> 
    Leia Valores A, B e C, em seguida,Imprima a soma entre A e B e mostre se a soma é
    menor que C
</p>

<?php

$A = 10;
$B = 20;
$C = 30;

echo " Valor do A é = ". $A,",";
echo " Valor do B é = ". $B,",";
echo " Valor do C é = ". $C ,". ";

$soma = $A+$B;

echo " A soma de A e B é = ". $soma,". ";

$diferente = ($soma != $C);

   if($diferente)
    echo " É diferente ";
   else
    echo " O valor da soma A + B é Igual a C. ";

?>
<h1>Exercicios 1 - metodo 2 </h1>
<p> 
    Leia Valores A, B e C, em seguida,Imprima a soma entre A e B e mostre se a soma é
    menor que C
</p>

<body>
    <?php

      $valorA = $_GET['valorA'];
      $valorB = $_GET['valorB'];
      $valorC = $_GET['valorC'];
      $somaa= $valorA+$valorB;
      echo $somaa;
      if($somaa < $valorC){
        echo "soma de A e B ( ". $somaa . ") é menor que C (". $valorC .")" ;
    
       }
    ?>
    <form method="get">
        <label for="valorA">Valor A</label>
        <input type="text" id="valorA" name="valorA">
        <label for="valorB">Valor B</label>
        <input type="text" id="valorB" name="valorB">
        <label for="valorC">Valor C</label>
        <input type="text" id="valorC" name="valorC">
        <input type="submit" value ="Calcular">
       
        
    </form>
   
<body>
</html>        

