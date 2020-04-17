<?php

include_once("config/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $response = [];
    $idProduct = $_POST["id"];

    $query = "DELETE FROM product WHERE id = '$idProduct' ";

    if(mysqli_query($con, $query)){
        $response["value"] = 1;
        $response["message"] = "product berhasil dihapus";
        echo json_encode($response);
    }else{
        $response["value"] = 0;
        $response["message"] = "product gagal dihapus";
        echo json_encode($response);
    }
}

?>