<?php

include_once("config/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $response   = [];
    $username   = $_POST["username"];
    $password   = md5($_POST["password"]);
    $nama       = $_POST["nama"];

    $cek = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($con, $cek));

    if(isset($result)){

        $response["value"] = 2;
        $response["message"] = "user sudah ada";
        echo json_encode($response);
    }else{
        $sql = "INSERT INTO users VALUES(NULL, '$username', '$password', '1','$nama', '1',  NOW())";
    
        if(mysqli_query($con, $sql)){

            $response["value"] = 1;
            $response["message"] = "berhasil mendaftarkan";
            echo json_encode($response);
        }else{

            $response["value"]   = 0;
            $response["message"] = "gagal mendaftar";
            echo json_encode($response);
        }
    }
}

?>