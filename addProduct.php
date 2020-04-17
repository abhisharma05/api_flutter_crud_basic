<?php

include_once("config/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $response   = [];
    $namaProduct= $_POST["namaProduct"];
    $qty        = $_POST["qty"];
    $harga      = $_POST["harga"];
    $idUser     = $_POST["idUsers"];
    
    $sql = "INSERT INTO product VALUES(NULL, '$namaProduct', '$qty', '$harga',NOW(), '$idUser')";
    
        if(mysqli_query($con, $sql)){
            $response["value"] = 1;
            $response["message"] = "product berhasil ditambahkan";
            echo json_encode($response);
        }
    }
?>