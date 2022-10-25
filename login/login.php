<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: loginIndex.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select ID_CLIENTE, EMAIL_CLIENTE,NOME_CLIENTE from cliente where EMAIL_CLIENTE = '{$email}' and SENHA_CLIENTE = md5('{$senha}')"; 

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../usuarios/contratanteCliente/indexContratante.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: loginIndex.php');
    exit();
}