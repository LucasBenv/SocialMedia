<?php 
    session_start();
    if (isset($_SESSION['user'])) {

        include("conexao.php");

        $usuario = $_SESSION['user'];
        $msg = $mysqli->real_escape_string($_POST['mensagem']);

        $sql_code = "insert into chat(user, mensagem) values ('$usuario','$msg')";
        
        if ($mysqli->query($sql_code) === TRUE) {
            echo $sql_code;
        } else{
            echo 'error';
        }
    }
?>