<?php
require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; //dirname é o caminho para o acesso da pasta. Este código é o nosso sistema rústico de autenticação.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Help Desk - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="m-5">
    <nav class="bg-success p-3 d-flex justify-content-between">
        <div>
            <a href="../View/add-new-call.php"
            class="text-decoration-none text-white">Novo chamado</a>
            <a href="list-calls.html"
            class="text-decoration-none text-white">Lista de chamados</a>
        </div>
        <a href="../Controller/Auth.php?operation=logout" class="text-decoration-none text-white">Sair</a>
    </nav>
    <main class="text-center">
        <!-- < ?php session_start(); ?> //Essa "session start" não precisa mais, porque já tem uma sessão iniciada na linha 2 ((aquele código está relacionado com a "session start" da linha 3 de "Auth_Verify"))-->
        <h1> Bem-vindo ao nosso sistema, <?= $_SESSION["user_data"]["name"] ?> </h1> <!-- ["user_data"] é um array, e aí, ["name"] é um dos dados dessa array -->
        <img src="https://img.freepik.com/vetores-gratis/representantes-de-suporte-ao-cliente-que-trabalham-em-call-center_74855-6340.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698192000&semt=ais" alt="Call Center" width=500>
    </main>
</body>

</html>