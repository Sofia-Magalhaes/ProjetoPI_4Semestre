<?php
include('../../login/conexao.php');


if (isset($_POST['submit'])) {

    $mudaPreco = $_POST['mudaPreco'];
    $mudaData = $_POST['mudaData'];
    $status = 4;
    


    $result = mysqli_query($conexao, "UPDATE contratos SET PAGAMENTO_CONTRATO = '$mudaPreco',
     DATA_CONTRATO = '$mudaData', STATUS_CONTRATO = '$status'");
}



