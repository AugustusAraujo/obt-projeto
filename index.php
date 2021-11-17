<?php
session_start();
if($_SESSION["dinheiro"] <= 0){
    $_SESSION["dinheiro"] = 200;
}

if ($_GET) {
    $url = explode('/', $_GET['url']);
    require_once ('views/' . $url[0] . '.php');
}
else {
    header("location: produtos");
}