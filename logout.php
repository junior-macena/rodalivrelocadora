<?php 
if(!isset($_SESSION)){
    session_start();
}

session_destroy();

echo "<script> window.location.href='http://localhost/rodalivre2023/';</script>";
?>