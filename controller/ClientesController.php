<?php

require_once('../config/conexion.php');
require_once('../models/ClientesModels.php');

$clientes = new Clientes();

switch ($_GET['op']) {
    case 'listar':
        # code...
        $datos = $clientes->getCliente();
        
        $data = [];
        foreach ($datos as $row ) {
            $subarr = [];
            $subarr[]= $row['idcliente'];
            $subarr[]= $row['nombre'];
            $subarr[]= $row['apellidos'];
            $subarr[]= $row['direccion'];
            $subarr[]= $row['telefono'];
            $subarr[]= $row['email'];
            $subarr[]= '<button type="button" onClick="editar(' . $row["idcliente"] . ');"  id="' . $row["idcliente"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa-solid fa-pen-to-square"></i></div></button>
            <button type="button" onClick="eliminar(' . $row["idcliente"] . ');"  id="' . $row["idcliente"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            
            $data[] = $subarr;
        }
        $result = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData" => $data
        );
        echo json_encode($result);
        break;
    
    case 'eliminar':
        $clientes->deleteCliente($_POST["idcliente"]);
        break;
    
   
}