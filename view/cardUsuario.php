<?php

    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="<?php $cadUsuario->inserir(); ?>" method="POST" >
        <input type="text" name="nome" placeholder="Nome aqui...">
        </br></br>
        <input type="text" name="usuario" placeholder="Usuário aqui...">
        </br></br>
        <input type="password" name="senha" minlength="8" placeholder="Senha aqui...">
        <input type="submit" name="salvar" value="salvar">
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">
        <input type="button" value="Lista Usuários" onclick="location.href='listaUsuarios.php'">
        

    </form>
</body>
</html>