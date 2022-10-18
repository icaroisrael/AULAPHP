<?php
require("conexao.php");
$email = $_GET['email'];

$res = $pdo->prepare("DELETE FROM USUARIO WHERE EMAIL = :EMAIL");
$res->bindparam(":EMAIL", $email);
$res->execute();
header("location: listar.php");

?>