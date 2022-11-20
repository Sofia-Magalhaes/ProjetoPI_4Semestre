<?php
session_start();
include('cadastroContrato.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratar Serviço</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="css/contrato.css">

</head>



<body id="page-top">


    <?php
    include('navbar.php');
    ?>


    <div class="wrapper">
        <div class="modalForm">
            <div class="actionBtns">
                <button class="actionBtn signupBtn">Contratar</button>
            </div>
            <div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="useForm">
                            <!-- Form Criar Vaga-->
                            <form action="contratarServico.php" method="POST" class="form singup signupForm">

                                <label for="name">Descreva seu problema</label>
                                <div class="inputGroup">
                                    <input type="text" name="descricaContrato" id="descricaContrato" placeholder="Descrição do problema" autocomplete="offf">
                                </div>

                                <label for="name">Pagamento</label>
                                <div class="inputGroup">
                                    <input type="number" name="pagamentoContrato" id="pagamentoContrato" placeholder="Preço" autocomplete="offf">
                                </div>

                                <label for="name">Data</label>
                                <div class="inputGroup">
                                    <input type="date" name="data" id="data" autocomplete="offf">
                                </div>

                                <label for="name">Endereço</label>
                                <div class="inputGroup">
                                    <input type="text" name="endereco" id="endereco" placeholder="Seu endereço" autocomplete="offf">
                                </div>                            
                            </p>
                            <a href="servicos.php" class="btn btn-primary">Sair</a>
                            <button class="btn btn-primary" type="submit" name="submit" id="submit" class="submitBtn">Contratar</button>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
</body>

</html>