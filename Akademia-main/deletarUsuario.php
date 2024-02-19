<?php
     include_once("./class/Usuario.php");
     $p = new Usuario();
 
     $p->excluirUsuario($_GET["id"]);
     echo "Usuario excluído";
?>

<a href="./listaUsuario.php">Voltar</a>