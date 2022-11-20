<?php
session_start();
include('../../login/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light">
    <title>Propostas</title>
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
                    <button class="actionBtn signupBtn">Propostas</button>
                </div>
                <!-- <div class="useForm"> -->
                <!-- Mostrar as Vagas-->
                <p>Sete dark e light </p>
                </p>
                <p><button>CLICA</button></p>
                <div>
                    <select id="theme" onChange="mudarTema()">
                        <option value="light">Claro</option>
                        <option value="dark">Escuro</option>
                    </select>
                </div>
                <!-- Fim mostrar as Vagas-->
                <!-- </div> -->
            </div>
        </div>
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

        <script src="js/mudarTema.js"></script>
    </body>

</html>