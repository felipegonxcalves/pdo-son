<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=pdo-son;", "root", "");

    $query = "select * from products";

    $stmt = $conn->query($query);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($products);
    echo '</pre>';
}catch (\PDOException $e){
    echo "Não foi possível estabelecer conexão com esse banco de dados ".$e->getMessage();
}
