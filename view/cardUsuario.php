<?php
//posteriormente iremos trabalhar com session
require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <!-- CSS Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form class="form-control" action="<?php $cadUsuario->inserir(); ?>" method="POST">
            <input class="form-control" type="text" name="nome" placeholder="Nome aqui...">
            <br /><br />
            <select class="form-select"name="perfilAcesso">
                <option value="">Selecione...</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <br /><br />
            <input class="form-control" type="text" name="usuario" placeholder="User aqui...">
            <br /><br />
            <input class="form-control" type="password" name="senha" minlength="8" placeholder="Senha aqui...">
            <br /><br />
            <input class="btn btn-primary" type="submit" name="Salvar" value="Salvar">
            <input class="btn btn-secondary" type="reset" value="Limpar">
            <input class="btn btn-success" type="button" value="Voltar" onclick="location.href='../index.php'">
            <input  class="btn btn-outline-primary"type="button" value="Lista Usuários" onclick="location.href='listaUsuarios.php'">
        </form>
    </div>
    <!-- JS Bootstrap -->
    <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>