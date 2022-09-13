<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=agendamento", "root", "");
    
} catch (PDOException $e) {
    echo "Erro com o banco de dados".$e->getMessage();   
}catch(Exception $e){
    echo "Erro generico".$e->getMessage();
}



?>