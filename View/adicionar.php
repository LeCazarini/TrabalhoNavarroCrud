
<!DOCTYPE html>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Header.php"; 
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/DAO/Usuario.php";
?>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <link href="../View/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../View/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="../View/css/bootstrap.css" rel="stylesheet">
        <script href="../View/js/bootstrap.js"></script>
        <script href="../js/bootstrap.mini.js"></script>
    <link href="../View/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../View/css/signin.css" rel="stylesheet">
    <script src="../View/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
  <div class="container">
       
      <form class="form-signin" method="POST" action="../DAO/Cliente.php">
        <h2 class="form-signin-heading" style="text-align: center;">Adicionar Cliente</h2>
        <br />
        <label for="inputNome" class="sr-only">Nome </label>
        <input type="Nome" id="inputNome" class="form-control" placeholder="Digite seu nome" style="width: 100%;" required autofocus>
        <br/>
        <label for="inputEndereco" class="sr-only">Endereço </label>
        <input type="endereco" id="inputEndereco" class="form-control" placeholder="Endereço" style="width: 100%;" required autofocus>
        <br/>
        <label for="inputTelefone" class="sr-only">Telefone </label>
        <input type="telefone" id="inputTelefone" class="form-control" placeholder="XXX-XXX-XXXX" style="width: 100%;" required autofocus>
        <br/>
        <label for="inputEmail" class="sr-only">Email </label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" style="width: 100%;" required autofocus>
        <br/>
        <br/>
        <label for="inputcpf" class="sr-only">CPF</label>
        <input type="cpf" id="inputcpf" class="form-control" style="width: 100%;" placeholder="CPF" required>
        <br />
        <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Adicionar</button>
      </form>
              <center>
                    <p class="m-t">
            	            	<small>All Rights Reserved <strong>AcademiaWeb</strong>, Inc.</small>
				            </p>
              </center>
    </div> <!-- /container -->

    <script src="../View/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Footer.php"; ?>
