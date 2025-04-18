<?php
    $hostname = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "durian_go"; 

    $konek=new mysqli($hostname,$username,$password, $database);
        if ($konek->connect_error)
        {
            die('Maaf koneksi gagal: '. $connect->connect_error);
        }
?>

