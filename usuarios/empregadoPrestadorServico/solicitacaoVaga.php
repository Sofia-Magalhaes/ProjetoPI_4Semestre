<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Serviços</title>
    <link rel="stylesheet" href="css/stylesIndex.css">
    <link rel="stylesheet" href="css/solicitacaoVaga.css">
</head>

<body>

    <body id="page-top">
        <?php
        include('navbar.php');
        ?>


        <div class="wrapper">
            <div class="modalForm">
                <div class="actionBtns">
                    <button class="actionBtn signupBtn">Ver Serviço</button>
                </div>
                <div action="vagaGET.php" method="GET">

                    <!-- <Input type="search" name="buscar" placeholder="Digite o nome da vaga desejada">
                    <input type="submit" value="Enviar"> -->

           

                            <?php
                            include('get/contratoGET.php');
                            ?>





                    <!-- Fim mostrar as Vagas-->
                </div>
            </div>
        </div>
     
    </body>

</html>