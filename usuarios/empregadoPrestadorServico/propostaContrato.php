<?php
session_start();
include('update/outraProposta.php');

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
                    <button class="actionBtn signupBtn">Contraproposta</button>
                </div>


                <!-- <Input type="search" name="buscar" placeholder="Digite o nome da vaga desejada">
                    <input type="submit" value="Enviar"> -->

                <div class="useForm">
                    <!-- Form Criar Vaga-->
                    <form action="propostaContrato.php" method="POST" class="form singup signupForm">


                        <label>Mudar Preço</label>
                        <div class="inputGroup">
                            <input type="number" name="mudaPreco" id="mudaPreco" placeholder="Novo Preço" autocomplete="offf">
                        </div>

                        <label>Mudar Data</label>
                        <div class="inputGroup">
                            <input type="date" name="mudaData" id="mudaData" placeholder="Nova Data" autocomplete="offf">
                        </div>


                        <a href="solicitacaoVaga.php" class="btn btn-primary">Voltar</a>
                        <a href="update/outraProposta.php?status=4"> <button class="btn btn-primary" type="submit" name="submit" id="submit" class="submitBtn">Enviar</button></a>

                    </form>
                    <!-- Fim Form Criar Vaga-->


                </div>



                <!-- Fim mostrar as Vagas-->

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

    </body>

</html>