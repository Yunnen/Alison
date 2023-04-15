<html lang="pt-br">

<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<?php
$Nome = $_GET['Nome'];
$Nasc = $_GET['Nasc'];
$Genero = $_GET['Genero'];
$Peso = $_GET['Peso'];
$Altura = $_GET['Altura'];
$Resultado;

$IMC = $Peso / pow($Altura, 2);

if($IMC <= 18.5){
    $Resultado="Magreza";
}else if($IMC >= 18.6 && $IMC < 24.99){
    $Resultado="Normal";
}else if($IMC >= 25.0 && $IMC < 29.99){
    $Resultado= "Sobrepeso";
}else if($IMC >= 30.0 && $IMC < 39.99){
    $Resultado= "Obesidade";
}else{
    $Resultado= "Obesidade Grave";
}

$IMC = number_format($IMC,2,'.','');
?>
<body>
<div id= "FORMULARIO" align=Center>
<fieldset align=Center>
    <legend>Resultado</legend>
 <form align="center">
    
    <label for="Nome">Nome: <?php echo $Nome ?> </label><br><br>
  
    <label for="Nasc">Nasc: <?php echo $Nasc ?></label><br><br>

    <label for="Genero">Gênero: <?php echo $Genero ?></label><br><br>

    <label for="Peso">Peso: <?php echo $Peso ?> Kg</label><br><br>

    <label for="Altura">Altura: <?php echo $Altura ?></label><br><br>

    <label for="IMC"> IMC : <?php echo $IMC ?></label><br><br>

    <label for="Resultado">Resultado: <?php echo $Resultado?></label><br><br>
   
    </fieldset>
</form>
</div>
</body>
</html>

