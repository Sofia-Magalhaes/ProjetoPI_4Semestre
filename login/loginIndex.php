<?php
session_start();
include('cadastro.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylesToggleLogin.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.php">Go Serv</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">

                        <li class="nav-item" onclick="darkMode()"><i>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8V16Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM12 4V8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16V20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z" fill="currentColor" />
                                </svg>
                            </i>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="wrapper">
            <div class="modalForm">
                <div class="actionBtns">
                    <button class="actionBtn signupBtn">Criar nova conta</button>
                    <button class="actionBtn loginBtn">Entrar</button>
                    <button class="moveBtn  ">Criar nova conta</button>
                </div>
                <div class="useForm">
                    <!-- Form Cadastrar-->
                    <form action="loginIndex.php" method="POST" class="form singup signupForm">
                        <div class="inputGroup">
                            <input type="text" name="name" id="name" placeholder="Nome" autocomplete="offf">
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="cpf" id="cpf" placeholder="CPF" autocomplete="offf">
                        </div>
                        <div class="inputGroup">
                            <input type="email" name="email" id="email" placeholder="Email" autocomplete="offf">
                        </div>
                        <div class="inputGroup">
                            <input type="password" name="password" id="password" placeholder="Senha" autocomplete="offf">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Sou PcD
                            </label>
                        </div>
                        <button type="submit" name="submit" id="submit" class="submitBtn">Cadastra-se</button>
                    </form>
                    <!-- Fim Form Cadastrar-->

                    <!-- Form Logar-->
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <form action="login.php" class="form login" method="POST">
                        <div class="inputGroup">
                            <input name="email" type="email" placeholder="Email" autofocus="" autocomplete="offf">
                        </div>
                        <div class="inputGroup">
                            <input name="senha" type="password" placeholder="Senha" autocomplete="offf">
                        </div>
                        <button type="submit" class="submitBtn">Entrar</button>
                    </form>
                    <!-- Fim Form Logar-->
                </div>
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
        <script src="js/scriptToggleLogin.js"></script>

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
    </body>

</html>