<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../index.php?erro=3");
}
else if(strlen($senha) < 8){
    header("Location: ../index.php?erro=1");
}else{
    setcookie("nome", $nome, time()+3600);
    setcookie("email", $email, time()+3600);
    setcookie("senha", $senha, time()+3600);
    header("Location: ../login.php");
}