<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Supermercado</title>
    <link rel="stylesheet" href="./estilos/default.css">
    <link rel="stylesheet" href="./estilos/login.css">
</head>
<body>
    <form method="POST" action="validadores/validaCadastro.php">
        <label for="nome">Nome<input type="text" id="nome" name="nome"></label>
        <label for="email">Email<input type="text" id="email" name="email"></label>
        <label for="senha">Senha<input type="password" id="senha" name="senha"></label>
        <input type="submit" value="CADASTRAR" class="BtnCredenciais">
        <div class="erro">
            <?php
                if(isset($_GET["erro"]) && $_GET["erro"] == 3){
                    echo"O email é invalido!";
                }
                else if(isset($_GET["erro"]) && $_GET["erro"] == 1){
                    echo"A senha não possui pelo menos 8 caracteres ou ela não foi digitada. Digite outra senha.";
                }
            ?>
        </div>
    </form>
</body>
</html>