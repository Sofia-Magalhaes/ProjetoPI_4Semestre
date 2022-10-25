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
                            <textarea name="text" cols="40" rows="5" placeholder="Descrição" type="text" name="descricao" id="descricao"></textarea>                           
                        </div>



                        <button type="submit" name="submit" id="submit" class="submitBtn">Cadastrar</button>
                        <button type="submit" name="submit" id="submit" class="submitBtn">Cancelar</button>

                    </form>
                    <!-- Fim Form Criar Vaga-->







                </div>
            </div>
        </div>
        <script src="js/scriptToggleLogin.js"></script>
    </body>

</html>