<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleCadastrar.css">
</head>
<body>
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1>Faça seu cadastro na Social Media</h1>
            <img class="left-cadastro-image"  src="img/Dragon-rafiki.svg">
        </div>
        <div class="right-cadastro">
            <form class="card-cadastro" method="POST" action="php/cadastrar.php">
                <h1>Cadastro</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn-cadastrar">Cadastrar</button>
                <p>Já tem uma conta? <a href="index.html">Entrar em uma conta</a></p>
            </form>

        </div>

    </div>


</body>
</html>