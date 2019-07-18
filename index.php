<?php 
if(isset($_POST['entrar'])){ 
 require_once ('classes/Padaria.php');
 $tipo_usuario = $_POST['tipo_usuario'];
 if($tipo_usuario == 'padaria'){
 $usuario = new Padaria();
 }else if($tipo_usuario == 'cliente'){
 $usuario = new Cliente();
 }else if($tipo_usuario == 'entregador'){
 $usuario = new Entregador();
 }else{
    echo 'Selecione um tipo de usuário';
    die();
 }

 $usuario->setLogin($_POST['login']);
 $usuario->setSenha($_POST['senha']);

 if ($usuario->logar()) {
     echo 'logado';
 }else{
     echo 'não logado';
 }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-4.3.1.css">
  <link href="css/estilo.css">
</head>

<body>
  <div class="py-3" >
    <div class="container">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block mx-auto logo" src="imagens/logo.jpg"></div>
      </div>
    </div>
  </div>
  <div class="pt-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pt-2">
          <form id="c_form-h" method="post" class="form" action="index.php">
            <div class="form-group row">
              <div class="col-12">
                <select class="form-control btn btn-warning form-control-lg text-center" name="tipo_usuario" required="required">
                  <option value="">Selecione o tipo de usuário</option>
                  <option value="cliente">Cliente</option>
                  <option value="padaria">Padaria</option>
                  <option value="entregador">Entregador</option>
                </select>
              </div>
            </div>
            <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">Usuário:</label>
              <div class="col-10">
                <input type="text" name="login" class="form-control" id="inputmailh"> </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">Senha:<br></label>
              <div class="col-10">
                <input type="password" name="senha" class="form-control" id="inputpasswordh"> </div>
            </div>
            <div class="row">
              <div class="col-md-12 pt-3" style="">
                <button type="submit" class="btn btn-warning justify-content-center align-items-center btn-lg w-100 btn-block text-center border border-left border-right border-top border-bottom" name="entrar">Entrar</button>
                <a href="cadastro.php" class="btn  btn-success justify-content-center align-items-center btn-lg w-100 btn-block text-center border border-left border-right border-top border-bottom txtBranco">Cadastrar-se</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>