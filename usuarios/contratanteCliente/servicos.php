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
    <link rel="stylesheet" href="css/formsVaga.css">
</head>

<body>

    <body id="page-top">
        <?php
        include('navbar.php');
        ?>


        <div class="wrapper">
            <div class="modalForm">
                <div class="actionBtns">
                    <button class="actionBtn signupBtn">Serviços</button>
                </div>
                <div action="vagaGET.php" method="GET">

                    <!-- <Input type="search" name="buscar" placeholder="Digite o nome da vaga desejada">
                    <input type="submit" value="Enviar"> -->

                    <?php
                    include('get/vagaGET.php');
                    ?>

                    <!-- Fim mostrar as Vagas-->
                </div>
            </div>
        </div>

        <script>
            function darkMode() {
                if (document.body.style.backgroundColor == "black") {
                    document.body.style.backgroundColor = "white";
                } else {
                    document.body.style.backgroundColor = "black";
                }
                console.log(document.body.style.backgroundColor); // ctrl + j and you can see which mode you're in
            }
        </script>
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
    </body>

</html>