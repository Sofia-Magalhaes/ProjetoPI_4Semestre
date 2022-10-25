<?php
  include('../../login/conexao.php');
  
if(isset($_POST['submit']))
{

    $nomeVaga = $_POST['nomeVaga'];
    $tipoServico = $_POST['tipoServico'];
    $descricao = $_POST['descricao'];

    $result = mysqli_query($conexao, "INSERT INTO vagas (NOME_VAGAS, DESCRICAO_VAGAS, TIPOSERVICO_VAGAS) 
    VALUES ('$nomeVaga', '$tipoServico', '$descricao')");

}
?>

