<?php

include_once("config/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $response   = [];
    $namaProduct= $_POST["namaProduct"];
    $qty        = $_POST["qty"];
    $harga      = $_POST["harga"];
    $idProduct     = $_POST["id"];
    
    $query = "UPDATE product SET namaProduct = '$namaProduct', qty = '$qty', harga = '$harga' WHERE id = '$idProduct' ";
    
        if(mysqli_query($con, $query)){
            $response["value"] = 1;
            $response["message"] = "product berhasil diedit";
            echo json_encode($response);
        }else{
            $response["value"] = 0;
            $response["message"] = "product gagal diedit";
            echo json_encode($response);
        }
    }
?>