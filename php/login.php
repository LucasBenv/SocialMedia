<?php

    include("conexao.php");
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    
        if (strlen($_POST['usuario']) == 0) {
            echo 'Usuario ou senha errados';
        } if(strlen($_POST['senha']) == 0) { 
            echo 'Usuario ou senha errados';
        } else {
            $sql_code = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do select");

            $quantidade = $sql_query->num_rows;
            if ($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['user'] = $usuario['id'];
                echo 'success';

            } else{
                echo 'Falha ao logar!';
            }
        }
    }
?>