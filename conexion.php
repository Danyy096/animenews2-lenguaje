<?php

function conn(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "comentar";

    $conectar = mysqli_connect($server,$user,$pass,$db);
    return $conectar;
}

?>