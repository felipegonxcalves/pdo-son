<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=pdo-son;", "root", "");

    $query = "select * from products";

    foreach ($conn->query($query) as $product){
        echo $product['name'];
        echo "</br>";
    }


}catch (\PDOException $e){
    echo "Não foi possível estabelecer conexão com esse banco de dados ".$e->getMessage();
}
