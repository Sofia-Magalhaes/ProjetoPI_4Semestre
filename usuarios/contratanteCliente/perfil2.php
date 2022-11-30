<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/stylesIndex.css">
    <link rel="stylesheet" href="css/verServicos.css">
</head>





<body>



    <body id="page-top">
        <?php
        include('navbar.php');
        ?>


        <div class="wrapper">
            <div class="modalForm">
                <div class="actionBtns">
                    <button class="actionBtn signupBtn">Perfil</button>
                </div>
                <?php
                include('get/perfilGET.php');
                ?>


            </div>

        </div>

    </body>

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
    </section>


    </div>
    </section>