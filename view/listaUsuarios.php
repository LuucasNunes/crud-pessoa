<?php

require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
$listaUsuarios = $cadUsuario->getUsuarios();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
</head>

<body>
    <div id="Lista">
        <h2>Lista de Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Usuário</th>
                    <th>Usuário</th>
                    <th>Perfil Acesso</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsuarios as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUsuario'] ?></td>
                        <td><?php echo $user['nomeUsuario'] ?></td>
                        <td><?php echo $user['usuario'] ?></td>
                        <td><?php if($user['perfilAcesso']  == "admin")
                        {echo "Administrador";}
                        elseif ($user['perfilAcesso'] == "user"){
                            echo "Usuário";
                        }
                        ?></td>
                        <td>
                            <form action="editarUser.php" method="post">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Editar" name="editar">
                            </form>
                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Deletar" name="deletar">
                            </form>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="button" value="Voltar ao cadastro" onclick="location.href='cardUsuario.php'">
    </div>
</body>

</html>