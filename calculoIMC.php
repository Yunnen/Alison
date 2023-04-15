<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo IMC</title>
    <link rel="stylesheet" type="text/css" href="CSS\estilo.css">
</head>
<body>

<div id="FORMULARIO">
<fieldset align="Center">
    <legend>Calculo de IMC</legend>
    <form action="resultadoIMC.php" method="get" id="resultado">
    <label for="Nome">Nome:</label>
    <input type="text" name="Nome" id="Nome" placeholder="Digite seu nome"><br><br>
    
    <label for="Nasc">Nasc:</label>
    <input type="date" name="Nasc" id="Nasc"><br><br>

    <label for="Genero">Gênero:</label>
    <input list="genero" name="Genero" id="Genero"><br><br>
    <datalist id="genero">
            <option value="Masculino">
            <option value="Feminino">
    </datalist>

    <label for="Peso">Peso:</label>
    <input type="number" name="Peso" id="Peso" step=0.1><br><br>

    <label for="Altura">Altura:</label>
    <input type="number" name="Altura" id="Altura" step=0.01><br><br>

    <input type="submit" value="Calcular" name="Botao" id="Calcular"><br>
    <input type="reset" value="Limpar" name="Botao" id="Limpar">
    </fieldset>
</form>
</div>
</body>
</html>