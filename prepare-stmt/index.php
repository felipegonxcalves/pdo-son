<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=pdo-son;", "root", "");

    $query = "SELECT * FROM products WHERE id= :id";

    $stmt = $conn->prepare($query);
    $stmt->bindValue(":id", $_GET['id']);
    $stmt->execute();
//    var_dump($stmt->fetchAll());

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $product){
        echo $product['id']."</br>";
        echo $product['name']."</br>";
        echo $product['desc']."</br>";
    }


}catch (\PDOException $e){
    echo "Não foi possível estabelecer conexão com esse banco de dados ".$e->getMessage();
}
