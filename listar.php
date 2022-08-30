<?php
require("conexao.php");
$resultado = $pdo->query("SELECT * FROM USUARIO");


while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
    echo "EMAIL : {$linha['email']}";
}

?>