<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../MVC/bootstrap/img/favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="/MVC/View/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link href="../View/css/signin.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      
        <form class="form-signin" method="POST" action="../Controller/authentication.php">
          
           <h2 class="form-signin-heading" style="text-align: center;">Área Restrita</h2>
           <div class="form-group">
             <input type="email" name="email" class="form-control" placeholder="Digite o email" style="width: 100%;" required autofocus><br/>
             <input type="password" name="senha" class="form-control" style="width: 100%;" placeholder="Digite a senha" required> 
           </div>
           <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Lembrar senha
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        </form>
    </div> 
</body>
</html>