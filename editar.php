<?php
require("conexao.php");

$email = $_POST['email'];
$nome = $_POST['nome'];
$res = $pdo->prepare("UPDATE USUARIO SET NOME = :nome WHERE EMAIL = :email");
$res->bindValue(":nome", $nome);
$res->bindValue(":email", $email);
$res->execute();


?>