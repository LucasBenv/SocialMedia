<?php
  session_start();
  if(isset($_SESSION['user'])){
    header("location: painel.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login </h1>
            <img class="left-login-image"  src="img/Dragon-rafiki.svg">
        </div>
        <div class="right-login">
            <form class="card-login" method="POST" action="#">
                <h1>Login</h1>
                <p class="error-msg"></p>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn-login">Login</button>
                <p>Ainda não tem uma conta? <a href="cadastrar.html">Criar conta</a></p>
            </form>

        </div>

    </div>

    <script src="javascript/login.js"></script>
</body>
</html>