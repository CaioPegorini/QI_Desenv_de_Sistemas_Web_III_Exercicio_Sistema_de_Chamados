<?php

session_start();

switch($_GET["operation"]) {
    case "login":
        login();
        break;
    case "logout":
        logout();
        break;
    //se eu quiser criar um "redefinir senha", aqui teria um:
    //'case "redefinir senha": ...'
    $_SESSION["msg_warning"] = "Operação inválida!";
    header("../View/message.php");
    exit;
}

function login() {
    $users = array(
        array(
            "name" => "Gabriel",
            "email" => "gabriel@gmail.com",
            "password" => password_hash("123456", PASSWORD_DEFAULT) //texto ilegível para seres humanos
        ),
        array(
            "name" => "Joana",
            "email" => "joana@gmail.com",
            "password" => password_hash("123456", PASSWORD_DEFAULT)
        )
    );
    
    if(empty($_POST)) {
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado!"; //esta mensagem aparecerá se o usuário tentar digitar diretamente o endereço "localhost/auth.php" para tentar acessar esta página, porém sem se autentificar antes
        header("location:../View/message.php");
        exit;
    }
    
    $email = $_POST["user_email"];
    $pass = $_POST["user_password"];
    
    foreach($users as $user) {
        //echo $user["email"], " ", $user["password"], "<br>";
        if($email == $user["email"] && password_verify($pass, $user["password"])) {
            //echo "OK";
            $_SESSION["user_data"] = $user;
            header("location:../View/dashboard.php");
            exit;
        }
    }
    
    $_SESSION["msg_warning"] = "Lamento, usuário não localizado.";
    header("location:../View/message.php");    
}

function logout() {
    unset($_SESSION["user_data"]);
    header("location:../../index.html");
    exit;
}

?>