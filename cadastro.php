<?php
//INSERT
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
require("conexao.php");
$res = $pdo->prepare("INSERT INTO USUARIO(EMAIL, NOME, SOBRENOME, SENHA) VALUES (:email, :nome, :sobrenome,:senha)");
$res->bindparam(":email", $email);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":senha", $senha);
$res->execute();

?>