<?php
session_start();
include('cadastroVaga.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Vagas</title>
    <link rel="stylesheet" href="../../css/styles.css">
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
                    <button class="actionBtn signupBtn">Registrar Serviço</button>
                </div>
                <div class="useForm">
                    <!-- Form Criar Vaga-->
                    <form action="criarVaga.php" method="POST" class="form singup signupForm">
                        <div class="row">
                            <div class="inputGroup">
                                <input type="text" name="nomeVaga" id="nomeVaga" placeholder="Nome da Vaga" autocomplete="offf">
                            </div>

                            <div class="inputGroup">
                                <input type="text" name="tipoServico" id="tipoServico" placeholder="Tipo de Serviço" autocomplete="offf">
                            </div>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="descricao" id="descricao" placeholder="Descrição" autocomplete="offf">
                            <!-- <textarea type="text" name="descricao" id="descricao" name="descricao" cols="40" rows="5" placeholder="Descrição"></textarea> -->
                        </div>
                        <div class="row" id=botoes>
                            <button type="submit" name="submit" id="submit" class="submitBtn">Cadastrar</button>
                        </div>

                    </form>
                    <!-- Fim Form Criar Vaga-->


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