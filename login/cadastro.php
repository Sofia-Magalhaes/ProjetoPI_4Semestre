<?php
include('conexao.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $senha = $_POST['password'];
  // $escolha = $_POST['escolha'];

  $result = mysqli_query($conexao, "INSERT INTO cliente(NOME_CLIENTE, EMAIL_CLIENTE, SENHA_CLIENTE) 
    VALUES ('$nome', '$email', md5('$senha'))");
}
