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
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center text-uppercase">ApPão</h4>
        </div>
      </div>
    </div>
  </div>  
  <div class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pt-2">
          <form id="c_form-h" method="post" class="form" action="index.php">
          <div class="form-group row">
              <div class="col-12">                
              <select class="form-control btn btn-primary form-control-lg text-center" name="tipo_usuario" required="required">
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
        <div class="col-md-12 pt-5" style="">
        <button type="submit"  class="btn btn-primary justify-content-center align-items-center btn-lg w-100 btn-block text-center border border-left border-right border-top border-bottom" name="entrar">Entrar</button>
        <button type="submit" class="btn btn-primary justify-content-center align-items-center btn-lg w-100 btn-block text-center border border-left border-right border-top border-bottom">Cadastrar-se</button></div>
      </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>