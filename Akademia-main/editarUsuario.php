<?php
    include_once("./class/Usuario.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php

        $u = new Usuario();
        $u->buscarUsuario($_GET["id"]);

        echo "
            <form method='POST'>

            <label>Nome:</label>
            <input type='text' name='nome' value='" . $u->getNome() . "' required><br><br>

            <label>Email:</label>
            <input type='email' name='email' value='" . $u->getEmail() . " ' required><br><br>

            <label>Data de Nascimento:</label>
            <input type='date' name='dtNascimento' value='" . $u->getDtNascimento() . "' required><br><br>

            <label>Cidade:</label>
            <input type='text' name='cidade' value='" . $u->getCidade() . "' required><br><br>

            <button type='submit' name='atualizar'>Atualizar</button>
            <button type='button'><a href='listaUsuario.php' id='botaoVoltar'>Cancelar</a></button>
        ";

        if ( isset($_REQUEST["atualizar"]) ) //evitar que o procedimento seja executado sem apertar o botão
        {
            $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtNascimento"], $_REQUEST["cidade"]);

            echo $u->atualizarUsuario($_GET["id"]) == true ?
                    "<p class='mensagemSucesso'>Usuário editado com sucesso.</p>" . header("Location: areaRestrita.php") :
                    "<p class='mensagemErro'>Ocorreu um erro ao editar.</p>";
        }
    ?>

</form>
</body>
</html>