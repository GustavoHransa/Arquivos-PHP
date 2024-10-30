<h1>Exercicios 4 </h1>
<p> 
    Crie um formulario para calcular IMC e mostrar o resultado.
</p>
<body>
<?php
   $Altura = $_GET['Altura'];
   $Peso = $_GET['Peso'];

   $Imc = $Peso/($Altura * $Altura);

   echo "O Imc é " . number_format($Imc, 2). "</br>";
   
   
   ?>

   <form method="get">
        <label for="Altura">Altura</label>
        <input type="text" id="Altura" name="Altura">
        <label for="Peso">Peso</label>
        <input type="text" id="Peso" name="Peso">
        
        <input type="submit" value ="Verificar Imc">
       
        
    </form>
</body>
</html>