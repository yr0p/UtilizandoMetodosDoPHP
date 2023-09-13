<?php
session_start();

$nome = $_COOKIE["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == $_COOKIE["email"] && $senha == $_COOKIE["senha"]){
    $_SESSION["nome"] = $nome;
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    header("Location: ../administracaoDeUsuarios.php");
} else{
    header("Location: ../login.php?erro=2");
}