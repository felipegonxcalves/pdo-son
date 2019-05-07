<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=pdo-son;", "root", "");

    $query = "insert into products (`name`, `desc`) values ('Ebook', 'Learn PHP with PDO')";

    $result = $conn->exec($query);
    print_r($result);
}catch (\PDOException $e){
    echo "Não foi possível estabelecer conexão com esse banco de dados ".$e->getMessage();
}
