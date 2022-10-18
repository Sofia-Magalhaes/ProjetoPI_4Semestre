<?php
session_start();
if(!$_SESSION['email']){
    header('Location: loginIndex.php');
    exit();
}