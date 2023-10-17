<?php

include_once("conn.php");

$method = $_SERVER['REQUEST_METHOD'];

if($method == "GET"){

    $bordasQuery = $conn->query("SELECT * FROM borda;");
    $bordas = $bordasQuery->fetchAll();

    $massaQuery = $conn->query("SELECT * FROM massa;");
    $bordas = $bordasQuery->fetchAll();

    $saboresQuery = $conn->query("SELECT * FROM sabores;");
    $bordas = $bordasQuery->fetchAll();

}else if($method === "POST"){


}
?>