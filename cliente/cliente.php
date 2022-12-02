<?php

include_once('../config/config.php');
include('../config/Database.php');

class cliente{

    function __construct(){
        $db= new Database(); 
        $this->conexion = $db->connectToDatabase();
    }
function save($params ){
    $nombres = $params['nombres'];
    $edad = $params['edad'];
    $telefono = $params['telefono'];
    $email = $params['email'];
    $productoqueteinteresa = $params['productoqueteinteresa'];

    $insert = "INSERT INTO clientes VALUES (NULL, '$nombres','$edad','$telefono','$email','$productoqueteinteresa')";

  

    return mysqli_query($this->conexion, $insert);

}

function getAll(){
    $sql = "SELECT * FROM clientes";
    return mysqli_query($this->conexion, $sql);
}

function getOne($id)
{
    $sql = "SELECT * FROM clientes WHERE id = $id";
    return mysqli_query ($this->conexion, $sql);
}

function update($params){
    $nombres = $params['nombres'];
    $edad = $params['edad'];
    $telefono = $params['telefono'];
    $email = $params['email'];
    $productoqueteinteresa = $params['productoqueteinteresa'];
    $id = $params['id'];

    $update = "UPDATE clientes SET nombres='$nombres', edad='$edad', telefono='$telefono',email='$email', productoqueteinteresa='$productoqueteinteresa' WHERE id = $id ";

    return mysqli_query($this->conexion, $update);
}

function delete ($id){
    $delete = "DELETE FROM clientes WHERE id = $id";
    return mysqli_query ($this->conexion,$delete);
}

}
?>