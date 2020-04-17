<?php

include_once("config/connect.php");


$response = [];

$query = "SELECT a.*, b.nama FROM product a left join users b ON a.idUsers = b.id";

$sql = mysqli_query($con, $query);

while($a = mysqli_fetch_array($sql)){

    $b["id"]            = $a["id"];
    $b["namaProduct"]   = $a["namaProduct"];
    $b["qty"]           = $a["qty"];
    $b["harga"]         = $a["harga"];
    $b["createDate"]    = $a["createDate"];
    $b["nama"]          = $a["nama"];

    array_push($response, $b);

}

echo json_encode($response);

?>