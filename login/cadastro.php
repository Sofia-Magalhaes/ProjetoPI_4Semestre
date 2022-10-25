<?php
  include('conexao.php');
if(isset($_POST['submit']))
{
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $result = mysqli_query($conexao, "INSERT INTO cliente(NOME_CLIENTE, EMAIL_CLIENTE, SENHA_CLIENTE) 
    VALUES ('$nome', '$email', md5('$senha'))");

}
?>