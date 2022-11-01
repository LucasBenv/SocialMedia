<?php 
    include("conexao.php");

    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    if(strlen($usuario) === 0){
        echo "Preencha o Usuario";
    }else if(strlen($email) === 0){
        echo "Preencha o email";
    }else if(strlen($senha) === 0){
        echo "Preencha o senha";
    }else {
    
        $sql_code_user = "select * from usuarios where usuario = '$usuario'";

        $sql_query_user = $mysqli->query($sql_code_user) or die("Falha na execução do select");

        $sql_code_email = "select * from usuarios where email = '$email'";

        $sql_query_email = $mysqli->query($sql_code_email) or die("Falha na execução do select");

        if($sql_query_user->num_rows > 0){
            echo "Usuario já cadastrado";
        }else if($sql_query_email->num_rows > 0) {
            echo "E-mail já cadastrado";
        }else{

            $sql_code = "insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha')";

            if ($mysqli->query($sql_code) === TRUE) {
                echo "success";
            } else{
                echo "Erro";
            }
        }
    }
?>