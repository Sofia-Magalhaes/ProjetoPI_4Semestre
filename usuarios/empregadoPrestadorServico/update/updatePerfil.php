<?php
include('../../../login/conexao.php');

$nomeP = $_GET['nomeP'];
$emailP = $_GET['emailP'];
$senhaP = $_GET['senhaP'];

$result = mysqli_query($conexao, "UPDATE prestador_de_servico SET NOME_PRESTSERV = '$nomeP', 
EMAIL_PRESTSERV = '$emailP',SENHA_PRESTSERV = '$senhaP'");

header('Location: ../perfil.php');