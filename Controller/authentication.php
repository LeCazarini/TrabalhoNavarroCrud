<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/DAO/Usuario.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/Library/Auth.php";

$dao_usuario = new DAO_Usuario();
$id_usuario  = $dao_usuario->isAuthenticated($_POST["email"], $_POST["senha"]);

if($id_usuario){
    $auth = new Auth("user");
    $auth->setData(array('id' => $id_usuario));
    header("Location:/MVC/View/cliente");
    
}else{
     header("Location:/MVC/View/");
}
?>
