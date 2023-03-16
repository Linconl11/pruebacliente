<?php

class Clientes extends Conexion{
    public $conectar;

    public function __construct(){
        $this->conectar = parent::conexion();
    }
    public function getCliente(){
        $sql = "SELECT * FROM tbclientes";
        $sql = $this->conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function getClienteid($id){
        $sql = "SELECT * FROM tbclientes WHERE idcliente = ?";
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function insertCliente($nombre, $apellidos,$direccion,$telefono,$email){
        $sql = "INSERT INTO tbclientes(nombre,apellidos,direccion,telefono,email) VALUES (?,?,?,?,?)" ;
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$apellidos);
        $sql->bindValue(3,$direccion);
        $sql->bindValue(4,$telefono);
        $sql->bindValue(5,$email);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function updateCliente($idcliente,$nombre, $apellidos,$direccion,$telefono,$email){
        $sql = "UPDATE tbclientes SET nombre =?,apellidos=?,direccion=?,telefono=?,email=? WHERE idcliente =? " ;
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$apellidos);
        $sql->bindValue(3,$direccion);
        $sql->bindValue(4,$telefono);
        $sql->bindValue(5,$email);
        $sql->bindValue(6,$idcliente);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }
    public function deleteCliente($id){
        $sql = "DELETE FROM tbclientes WHERE idcliente =?";
        $sql = $this->conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

}
 