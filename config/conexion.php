<?php

class Conexion{
    protected $db;
    public  function conexion()
    {
        
    try {
        $conectar = $this->db = new PDO("mysql:local=localhost;port=3307;dbname=dbcliente","root","");
        return $conectar;
              
    } catch (PDOException $e) {
        print $e->getMessage();
        die();
    }

}

}