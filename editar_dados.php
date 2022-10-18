<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR DADOS</title>
</head>
<body>
<?php
require("conexao.php");
$nome = $_GET['nome'];
$email = $_GET['email'];
?>

<form action="editar.php" method="POST">
    NOME: <input type="text" name="nome" id="nome" value="<?php echo $nome?>">
    EMAIL: <input type="text" name="email" id="email" value="<?php echo $email?>">
    <input type="submit" value="ATUALIZAR">
</form>
    
</body>
</html>
