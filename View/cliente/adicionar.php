<?php 
include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Header.php"; 
include_once $_SERVER["DOCUMENT_ROOT"]."/MVC/DAO/Cliente.php";

$dao_cliente = new DAO_Cliente();
$cliente = $dao_cliente->selectAll();
?>
<div class="container">
    <div class="text-right">
        <a href="/MVC/View/adicionar.php" class="btn btn-sm btn-primary">Adicionar Cliente</a>
    </div>
    <table class="table tablet-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Endereço</th>
                <th>Numero</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th colspan="2" style="text-align:center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cliente AS $cliente):?>
                <tr>
                    <td><?php echo $cliente->getId_cliente();?></td>
                    <td><?php echo $cliente->getNome();?></td>
                    <td><?php echo $cliente->getEndereco();?></td>
                    <td><?php echo $cliente->getTelefone();?></td>
                    <td><?php echo $cliente->getCpf();?></td>
                    <td style="text-align:center">
                        <a href="editar.php?id=<?php echo $cliente->getNome();?>">Editar</a>
                    </td>
                    <td style="text-align:center">
                        <a href="delete.php?id=<?php echo $cliente->getNome();?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- /container -->
  
<?php include $_SERVER["DOCUMENT_ROOT"]."/MVC/Layout/Footer.php"; ?>