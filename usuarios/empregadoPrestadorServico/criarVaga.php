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
    <title>Login</title>
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
                            <button a href="indexEmpregado.php" type="submit" name="submit" id="cancelar" class="submitBtn">Cancelar</button>
                        </div>

                    </form>
                    <!-- Fim Form Criar Vaga-->
                </div>
            </div>
        </div>
    </body>

</html>