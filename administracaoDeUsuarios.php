<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admistração de Usuários - Supermercado</title>
    <link rel="stylesheet" href="./estilos/default.css">
    <link rel="stylesheet" href="./estilos/login.css">
</head>
<body>
    <?php 
        if(isset($_GET["fechar"])){
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            $_SESSION = array();
            session_destroy();
            header("Location: index.php");
        } 
    ?>
    
    <div id="container">
        <div id="conteudo">
            <?php
                session_start();
                if(isset($_SESSION["nome"])){
                    $nome = $_SESSION["nome"];
                    $email = $_SESSION["email"];
                    $senha = $_SESSION["senha"];
                    echo "<div>
                    <h1>Usuários cadastrados:</h1>
                    Nome: $nome<br>Email: $email<br>Senha: $senha
                    </div>";
                }else{
                    header("Location: index.php");
                    die();
                    
                }
                
            ?>
            <button class="Btn"><a id="sair" href="<?php echo $_SERVER["PHP_SELF"]?>?fechar=1">SAIR</a></button>
        </div>
        </div>
    </div>
</body>
</html>