<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    if(isset($_GET['idcars'])){
        $idcars = $_GET['idcars'];
        header("location: /rentcars?idcars=$idcars");
        exit;
    } else {
        echo "Parameter idcars tidak ditemukan dalam URL.";
        exit;
    }
} else {
    header("location: /login");
    exit;
}
?>
