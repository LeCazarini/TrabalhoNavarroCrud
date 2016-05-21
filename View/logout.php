<?php 
    include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Library/Auth.php";
    $namespace = $_GET["namespace"];
    
    $auth = new Auth($namespace);
    $auth->destroy();
    header("Location:/MVC/View/");
?>