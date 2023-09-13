<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Supermercado</title>
    <link rel="stylesheet" href="./estilos/default.css">
    <link rel="stylesheet" href="./estilos/login.css">
</head>
<body>
    <form method="POST" action="validadores/validaLogin.php">
        <label for="email">Email<input type="email" id="email" name="email"></label>
        <label for="senha">Senha<input type="password" id="senha" name="senha"></label>
        <input type="submit" value="ENTRAR" class="BtnCredenciais">

        <div class="erro">
            <?php
                if( isset($_GET["erro"]) && $_GET["erro"] == 2 ){
                    echo "As informações fornecidas não foram encontradas! Email ou senha inválidos.";
                }
            ?>
        </div>
    </form>
</body>
</html>