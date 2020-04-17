<?php

include_once("config/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $response = [];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $cek = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_fetch_array(mysqli_query($con , $cek));

    if(isset($result)){
        $response["value"]      = 1;
        $response["id"]         = $result["id"];
        $response["nama"]       = $result["nama"];
        $response["username"]   = $result["username"];
        $response["message"]    = "login berhasil";
        echo json_encode($response);
    }else{
        $response["value"] = 0;
        $response["message"] = "login gagal";
        echo json_encode($response);
    }
}


?>