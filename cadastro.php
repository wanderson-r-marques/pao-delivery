<?php
if (isset($_POST['entrar'])) {
    require_once('classes/Padaria.php');
    $tipo_usuario = $_POST['tipo_usuario'];
    if ($tipo_usuario == 'padaria') {
        $usuario = new Padaria();
    } else if ($tipo_usuario == 'cliente') {
        $usuario = new Cliente();
    } else if ($tipo_usuario == 'entregador') {
        $usuario = new Entregador();
    } else {
        echo 'Selecione um tipo de usuário';
        die();
    }

    $usuario->setLogin($_POST['login']);
    $usuario->setSenha($_POST['senha']);

    if ($usuario->logar()) {
        echo 'logado';
    } else {
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
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="img-fluid d-block mx-auto logo" src="imagens/logo.jpg"></div>
            </div>
        </div>
    </div>
    <div class="pt-2 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-6 col-10">
                    <h1>Cadastro de Clientes</h1>

                    <form class="text-left">
                        <div class="form-row">
                            <div class="form-group col-md-8" style=""> <label for="form19">Nome</label> <input required type="text" class="form-control" id="form19" placeholder="Digite seu nome completo"> </div>
                            <div class="form-group col-md-4" style=""> <label for="form20">CPF</label> <input required type="text" class="form-control" id="form20" placeholder="Digite sua inscrção federal"> </div>
                        </div>                        
                        <div class="form-row">
                            <div class="form-group col-md-6"> <label for="form19">Endereço</label> <input required type="text" class="form-control" id="form19" placeholder="Digite seu endereço"> </div>
                            <div class="form-group col-md-2"> <label for="form20">Número</label> <input required type="text" class="form-control" id="form20" placeholder="Digite apenas números"> </div>
                            <div class="form-group col-md-4"> <label for="form20">Complemento</label> <input type="text" class="form-control" id="form20" placeholder=""> </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5"> <label for="form20">Bairro</label> <input required type="text" class="form-control" id="form20" placeholder="Digite seu bairro"> </div>

                            <div class="form-group col-md-5"> <label for="form19">Cidade</label> <input required type="text" class="form-control" id="form19" placeholder="Digite sua cidade"> </div>
                            <div class="form-group col-md-2"> <label for="form20">Estado</label>
                                <select name="estado" required class="form-control" id="">
                                    <option value="">--</option>
                                    <option value="PE">PE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7"> <label for="form19">E-mail</label> <input required type="email" class="form-control" id="form19" placeholder="Digite seu melhor e-mail"> </div>
                            <div class="form-group col-md-5"> <label for="form20">Senha</label> <input required type="password" class="form-control" id="form20" placeholder="Digite uma senha forte"> </div>
                        </div>


                        <div class="form-group">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> Eu aceito os
                                    <a href="#">Termos e Condições</a> do serviço </label> </div>
                        </div> <button type="submit" class="btn btn-primary">Cadastrar agora</button>
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