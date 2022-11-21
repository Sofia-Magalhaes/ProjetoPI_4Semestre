<?php
include('../../../login/conexao.php');

$status = $_GET['status'];

$result = mysqli_query($conexao, "UPDATE contratos SET STATUS_CONTRATO = '$status'");

header('Location: ../propostas.php');
