<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Eternos Alison</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS\estiloalison.css">
    </head>
    <body>
    <script src="https://kit.fontawesome.com/1c8b0a3809.js" crossorigin="anonymous"></script>
    <?php
$conexao = mysqli_connect('localhost','root','','RPG');
$sql  = 'SELECT * from eternos';
$consultar = mysqli_query($conexao,$sql);

while($resgistro = mysqli_fetch_array($consultar))
    { 
        $Duro = $resgistro['DCPedra'];
        $SemEscap = $resgistro['SEscap'];
        $DuroR = $resgistro['DCPedraR'];
        $SemEscapR = $resgistro['SEscpR'];
        $Criti = $resgistro['Criti'];
        $CritiR = $resgistro['CritiR'];
    }
if (isset($_POST['inserir']))
{
    $DuroN = filter_input(INPUT_POST, "imortal");
    $SemEscapN = filter_input(INPUT_POST, "semescap");
    $CritiN = filter_input(INPUT_POST, "criti");

    $SQL = "UPDATE eternos SET DCPedra = DCPedra + '$DuroN', SEscap = SEscap + '$SemEscapN', Criti = Criti + '$CritiN'";
    mysqli_query($conexao,$SQL);

    if($SemEscapN > $SemEscapR){
        $conexao = mysqli_connect('localhost','root','','RPG');
        $SQL= "UPDATE `eternos` SET `SEscpR`='$SemEscapN'";
        mysqli_query($conexao,$SQL);
    }
    
    if($DuroN > $DuroR){
    $conexao = mysqli_connect('localhost','root','','RPG');
    $SQL= "UPDATE `eternos` SET `DCPedraR`='$DuroN'";
    mysqli_query($conexao,$SQL);
    }
    if($CritiN > $CritiR){
        $conexao = mysqli_connect('localhost','root','','RPG');
        $SQL= "UPDATE `eternos` SET `CritiR`='$CritiN'";
        mysqli_query($conexao,$SQL);
        }

}

$sql  = 'SELECT * from eternos';
$consultar = mysqli_query($conexao,$sql);

while($resgistro = mysqli_fetch_array($consultar))
    { 
        $Duro = $resgistro['DCPedra'];
        $SemEscap = $resgistro['SEscap'];
        $DuroR = $resgistro['DCPedraR'];
        $SemEscapR = $resgistro['SEscpR'];
        $Criti = $resgistro['Criti'];
        $CritiR = $resgistro['CritiR'];
    }
?>
   <form action="AlisonEternos.php" method="post">
   <div class="flip">
        <div class="flip-card-inner">
            <div class="eternos">
                <img class="Eterno" src="img/eternossem.png"></img>
                <h1 class="titulo"><?php echo $SemEscap ?>m</h1>
                <text class="nome">SEM ESCAPATORIA</text>
                <h5 class="descri">Quantidade de Movimento reduzido de inimigos</h5>
        </div>
    <div class="backflip">
    <img class="Eterno" src="img/eternossem.png"><text class="icon"><i class="fa-solid fa-award"></i></text></img>
    <h1 class="titulo"><?php echo $SemEscap ?>m</h1>
    <input class="text" type="number" name="semescap" max="999"></input>
    <h5 class="descri">RECORDE PESSOAL: <?php echo $SemEscapR ?>m </h5>
    

        </div>
    </div>
</div>

<div class="flip">
    <div class="flip-card-inner">
        <div class="eternos">
            <img class="Eterno" src="img/eternostank.png">
            <h1 class="titulo"><?php echo $Duro ?></h1>
            <text class="nome">IMORTAL</text>
            <h5 class="descri">Total de dano evitado com Duro como Pedra,<br>
            Maestria em Armadura Pesada e Warden’s Resolve</h5>
        </div>
    <div class="backflip">
    <img class="Eterno" src="img/eternostank.png"><text class="icon"><i class="fa-solid fa-award"></i></text></img>
    <h1 class="titulo"><?php echo $Duro ?></h1>
    <input class="text" type="number" name="imortal" max="999" ></input>
    <h5 class="descri">RECORDE PESSOAL: <?php echo  $DuroR ?> </h5>

        </div>
    </div>
</div>

<div class="flip">
    <div class="flip-card-inner">
        <div class="eternos">
            <img class="Eterno" src="img/eternosimperatriz.png">
            <h1 class="titulo"><?php echo $Criti ?></h1>
            <text class="nome">BATA MAIS FORTE</text>
            <h5 class="descri">Criticos Anulados com Duro Feito Pedra</h5>
        </div>
    <div class="backflip">
    <img class="Eterno" src="img/eternosimperatriz.png"><text class="icon"><i class="fa-solid fa-award"></i></text></img>
    <h1 class="titulo"><?php echo $Criti ?></h1>
    <input class="text" type="number" name="criti" max="999" ></input>
    <h5 class="descri">RECORDE PESSOAL: <?php echo  $CritiR ?> </h5>

        </div>
    </div>
</div>


    <table>    
        <br>
        <input type="submit" value="inserir" name="inserir" style="display: none;"></intput>    
    </table>
    
        </form>
       
</div>
</table>
</body>
