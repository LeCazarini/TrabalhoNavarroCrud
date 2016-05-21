<?php 
include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Header.php"; 
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/DAO/Usuario.php";

$dao_usuario = new DAO_Usuario();
$usuarios = $dao_usuario->selectAll();
?>
<div class="container">
    <div class="text-right">
        <a href="editar.php" class="btn btn-sm btn-primary">Adicionar Usuário</a>
    </div>
    <table class="table tablet-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2" style="text-align:center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios AS $usuario):?>
                <tr>
                    <td><?php echo $usuario->getID();?></td>
                    <td><?php echo $usuario->getName();?></td>
                    <td><?php echo $usuario->getEmail();?></td>
                    <td style="text-align:center">
                        <a href="editar.php?id=<?php echo $usuario->getID();?>">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a href="delete.php?id=<?php echo $usuario->getID();?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- /container -->
  
<?php include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Footer.php"; ?>