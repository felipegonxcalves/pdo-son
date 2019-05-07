<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=pdo-son;", "root", "");
}catch (\PDOException $e){
    echo "Não foi possível estabelecer conexão com esse banco de dados ".$e->getMessage();
}
