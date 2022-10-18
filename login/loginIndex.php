<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylesToggleLogin.css">
</head>
<body> 
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.php">Go Serv</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">                    
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
                <form action="" class="form singup signupForm">
                    <div class="inputGroup">
                        <input type="text" placeholder="Nome" autocomplete="offf">
                    </div>
                    <div class="inputGroup">
                        <input type="email" placeholder="Email" autocomplete="offf">
                    </div>
                    <div class="inputGroup">
                        <input type="password" placeholder="Senha" autocomplete="offf">
                    </div>
                    <button type="submit" class="submitBtn">Cadastra-se</button>
                </form>
                    <!-- Fim Form Cadastrar-->

                    <!-- Form Logar-->
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
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
    <script src="js/scriptToggleLogin.js"></script>
</body>
</html>