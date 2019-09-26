<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="/buscaCEP/public/favicon/buscaCEP.png"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>buscaCEP</title>
  <!-- Bootstrap core CSS-->
  <link href="/buscaCEP/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/buscaCEP/public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/buscaCEP/public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><?php if (alertHasMsg()) : ?>
      <?=alertShow();?>
    <?php elseif (!alertHasMsg()) : ?>
      Login
    <?php endif; ?></div>
      <div class="card-body">
        <form method="POST" action="/buscaCEP/login/index">
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de E-mail</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Digite seu E-mail" name="login" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha" name="password" required>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/buscaCEP/usuario/add">Não possui um cadastro? Clique aqui.</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="/buscaCEP/public/vendor/jquery/jquery.min.js"></script>
  <script src="/buscaCEP/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/buscaCEP/public/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>