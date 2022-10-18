<?php
require("conexao.php");
$resultado = $pdo->query("SELECT email, nome, sobrenome FROM USUARIO");
?>
<table BORDER="1">
    <tr>
        <td>EMAIL</td>
        <td>NOME</td>
        <td>SOBRENOME</td>
        <td>EXCLUIR</td>
        <td>EDITAR</td>
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['email']}";?> </td>
        <td><?php echo "{$linha['nome']}";?> </td>
        <td><?php echo "{$linha['sobrenome']}";?> </td>
        <td><a href="excluir.php?email=<?php echo "{$linha['email']}";?>">excluir</a></td>        
    </tr>
  <?php  
}
?>
</table>
<?php

?>