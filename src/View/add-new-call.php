<?php
require_once dirname(__DIR__) . "/Controller/Auth_Verify.php"; //Este código é o nosso sistema rústico de autenticação.
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>

<body class="d-flex justify-content-center align-items-center m-5">
  <main class="card bg-success d-flex justify-content-center align-items-center w-100">
    <form method="post" class="w-50 p-4">

      <label class=text-black for="fname">Usuário:</label><br>
      <input type="user" id="user_usuario" name="user_usuario" class="form-control" placeholder="Digite seu usuário"
        required />

      <label class=text-black for="fname">Email:</label><br>
      <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Digite seu email"
        required />

      <label class=text-black for="fname">Número da PC:</label><br>
      <input type="number" id="user_number" name="user_number" class="form-control" placeholder="Digite o número da PC"
        required />

      <label class=text-black for="fname">Andar:</label><br>
      <input type="number" id="user_number" name="user_number" class="form-control" min="1" max="5"
        placeholder="Digite o número do andar" required />

      <label class=text-black for="fname">Sala:</label><br>
      <input type="number" id="user_number" name="user_number" class="form-control"
        placeholder="Digite o número da sala" required />
      <label class=text-black for="class">Escolha a classe:</label>
      <select id="class" name="class" class="form-select">
        <option value="Baixo">Baixo</option>
        <option value="Médio">Médio</option>
        <option value="Alto">Alto</option>
      </select>

      <textarea name="message" rows="5" cols="20" required class="form-control my-3"> Descreva o problema...
           </textarea>

      <textarea name="message" rows="5" cols="20" required  class="form-control my-3"> Notas e observações relevantes...
           </textarea>

      <button type="submit" class="btn btn-light">Submeter</button>
    </form>
    <a href="../Controller/Auth.php?operation=logout" class="text-decoration-none text-white">Sair</a>
  </main>
</body>
</html>