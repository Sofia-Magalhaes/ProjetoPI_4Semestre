<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: loginIndex.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select ID_CLIENTE, EMAIL_CLIENTE from cliente where EMAIL_CLIENTE = '{$email}' and SENHA_CLIENTE = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../usuarios/contratanteCliente/indexContratante.php');
    exit();

}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: loginIndex.php');
    exit();
}


    // if($conexao->$row()>0){
    //     if($DIFERENCIAR_CLIENTE == 1) {
    //         $_SESSION['email'] = $email;
    //         header('Location: ../usuarios/contratanteCliente/indexContratante.php');
    //         exit();
        
    //     } else if($DIFERENCIAR_PRESTSERV == 2){
    //         $_SESSION['email'] = $email;
    //         header('Location: ../usuarios/empregadoPrestadorServico/indexEmpregado.php');
    //         exit();

    //     }else {
    //         $_SESSION['nao_autenticado'] = true;
    //         header('Location: loginIndex.php');
    //         exit();
    //     }
        
    // }


// if($sth->rowCount() > 0){
//     if ( $lo_tipo==4){

//         $_SESSION["health"]["numail"] = $numail;
//         $_SESSION["health"]["senha"] = $senha;
//         $_SESSION["health"]["id"] = $lo_codigo;
    
//         header("Location:../paciente/home.php");
    
//     } else if ($lo_tipo == 1)  {

//         $_SESSION["health"]["numail"] = $numail;
//         $_SESSION["health"]["senha"] = $senha;
//         $_SESSION["health"]["id"] = $lo_codigo;
    
//         header("Location:../enfermeiro/home.php");
    
//     } else if  ($lo_tipo == 2)  {

//         $_SESSION["health"]["numail"] = $numail;
//         $_SESSION["health"]["senha"] = $senha;
//         $_SESSION["health"]["id"] = $lo_codigo;
    
//         header("Location:../medico/home.php");
//     }else{
    
//         $_SESSION["health"]["numail"] = $numail;
//         $_SESSION["health"]["senha"] = $senha;
//         $_SESSION["health"]["id"] = $lo_codigo;
    
//         header("Location:../secretario/home.php");
// }; 
// } else {
//     header("Location: ../index.php");
// };
   
 ?>
