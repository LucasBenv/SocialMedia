<?php 
    session_start();
    if(isset($_SESSION['user'])){
        include_once "conexao.php";
        $usuario = $_SESSION['user'];
        $output = "";
        $sql = "SELECT * FROM chat ";
        $query = mysqli_query($mysqli, $sql);
        if(mysqli_num_rows($query) > 0){
			
            while($row = mysqli_fetch_assoc($query)){
                if($row['user'] <> $usuario){
                    $output .= '<div class="msg-box-in">
                                <div class="msg-texto-in">
                                    <h4>' . $row['user'] . '</h4>
                                    <p>'. $row['mensagem'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="msg-box-out">
                                <div class="msg-texto-out">
                                    <h4>' . $row['user'] . '</h4>
                                    <p>'. $row['mensagem'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../index.php");
    }

?>