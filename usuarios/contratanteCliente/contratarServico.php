<?php
session_start();
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratar Serviço</title>
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
                    <button class="actionBtn signupBtn">Contratar</button>
                </div>
                <div>
                    <?php
                    echo $id;
                    ?>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">'.$linha['NOME_VAGAS']. '</h2>
                                    <h5 class="card-title">'.$linha['TIPOSERVICO_VAGAS']. '</h5>
                                    <p class="card-text">'.$linha['DESCRICAO_VAGAS'].'</p>
                                    <a href="../contratanteCliente/contratarServico.php?id='.$linha['ID_VAGAS'].'" class="btn btn-primary">Ver mais detalhes</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </body>

</html>