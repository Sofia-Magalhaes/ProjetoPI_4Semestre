<?php
  include('../../login/conexao.php');
  
if(isset($_POST['submit']))
{

    $descricaContrato = $_POST['descricaContrato'];
    $pagamentoContrato = $_POST['pagamentoContrato'];
    $data = $_POST['data'];
    $endereco = $_POST['endereco'];
    $status = 3;

    

    $result = mysqli_query($conexao, "INSERT INTO contratos (DESCRICAO_CONTRATO, PAGAMENTO_CONTRATO, DATA_CONTRATO, ENDERECO_CONTRATO, STATUS_CONTRATO) 
    VALUES ('$descricaContrato', '$pagamentoContrato', '$data','$endereco', $status)");

}
?>


