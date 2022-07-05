<?php
    require_once "includes/db/dbConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Sua carta</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <a class="back" href="index.html"><</a>
            <h1>Diga 5...</h1>
        </div>
        
        <div id="vermelho">
            <h3>
                <?php 
                $num_aleatorio = rand(1, 4);
                $comandoSQL = "SELECT * FROM TB_CARTA WHERE CD_CARTA = $num_aleatorio;";
                $dados = $conn->query($comandoSQL);
                foreach($dados as $dado){
                    $codigo = $dado[0];
                    $vermelho = $dado[1];
                    $amarelo = $dado[2];
                    $verde = $dado[3];
                    $azul = $dado[4];
                    $roxo = $dado[5];
                }
                $dados = "";
                echo $vermelho;
                ?>
            </h3>
        </div>
        <div id="amarelo">
            <h3>
                <?php echo $amarelo?>
            </h3>
        </div>
        <div id="verde">
            <h3>
                <?php echo $verde;?>
            </h3>
        </div>
        <div id="azul">
            <h3>
                <?php echo $azul;?>
            </h3>
        </div>
        <div id="roxo">
            <h3>
                <?php echo $roxo;?>
            </h3>
        </div>
    </div>
</body>
</html>