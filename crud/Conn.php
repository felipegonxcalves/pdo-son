<?php

class Conn implements IConn
{

    private $host;
    private $db;
    private $username;
    private $password;

    public function __construct($host, $db, $username, $password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
    }


    public function connect()
    {
        try{
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->username,
                $this->password
            );

        }catch (PDOException $e){
            echo "Houve um error na conexão com o banco de dados , message".$e->getMessage();
            exit;
        }
    }
}
