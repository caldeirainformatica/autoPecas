<?php 
    $titulo = 'Cadastro de NCM';
    include_once '../model/head.php';
    include_once '../control/ncm/controle.php';
    
    $ncm = new Ncm();
    $ncms = $ncm->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de ncm</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Codigo</h3></td>
                        <td><h3>Descricao</h3></td>
                    </tr>
                    <?php foreach ($ncms as $dado){?>
                    <tr>
                        <td><a title="alterar" href="../control/ncm/formulario.php?id_ncm=<?php echo $dado['id_ncm']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="../control/ncm/processamento.php?action=delete&id_ncm=<?php echo $dado['id_ncm']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['id_ncm'] ?> </td>
                        <td><?php echo   $dado['codigo'] ?> </td>
                        <td><?php echo   $dado['descricao'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="../control/ncm/processamento.php?action=incluir" method="post">
                    <label for="codigo">Digite o novo ncm</label>
                    <input type="number" maxlength="8" name="codigo" id="codigo" required placeholder="Novo ncm"/><br/>
                    <label for="descricao">Digite a descrição do novo ncm</label>
                    <input type="descricao" name="descricao" id="codigo" required/><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>