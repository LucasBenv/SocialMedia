<?php 
  session_start();
  include_once "php/conexao.php";
  if(!isset($_SESSION['user'])){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="stylePainel.css">
</head>
<body>
    <div class="main-frame">
        <div class="left">
            <div class="perfil">
                <img src="img/perfil.jfif" alt="Foto de perfil" class="imagem-perfil">
            </div>
            <div class="filtros">

            </div>
        </div>  

        <div class="right">
                <div class="box-chat">
                    <div class="titulo">Titulo do Chat</div>
                    <div class="chat">
                        <div class="msg-box-in">
                            <div class="msg-texto-in">
                                <h4>Lucas</h4>
                                <p>teste</p>
                            </div>
                        </div>
                        <div class="msg-box-out">
                            <div class="msg-texto-out">
                                <h4>Pedro</h4>
                                <p>teste</p>
                            </div>
                        </div>
                    </div>

                    <form class="form-envio" method="POST" action="#">
                        <textarea type="text" name="mensagem"> 
                        </textarea>
                        <button class="btn-enviar">
                            <img src="img/enviar.png">
                        </button>
                    </form>
                </div>

        </div>

    </div>
    <script src="javascript/chat2.js"></script>
</body>
</html>