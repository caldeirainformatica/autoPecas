<?php 
    $titulo = 'Cadastro de SITUACAO';
    include_once '../model/head.php';
    include_once '../control/situacao/controle.php';
    
    $situacao = new Situacao();
    $situacaos = $situacao->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de situacao</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Descricao</h3></td>
                        <td><h3>Acao</h3></td>
                    </tr>
                    <?php foreach ($situacaos as $dado){?>
                    <tr>
                        <td><a title="alterar" href="../control/situacao/formulario.php?id_situacao=<?php echo $dado['id_situacao']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="../control/situacao/processamento.php?action=delete&id_situacao=<?php echo $dado['id_situacao']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['id_situacao'] ?> </td>
                        <td><?php echo   $dado['descricao'] ?> </td>
                        <td><?php echo   $dado['acao'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="../control/situacao/processamento.php?action=incluir" method="post">
                    <label for="descricao">Digite a novo descricao</label>
                    <input type="text" name="descricao" id="descricao" required placeholder="Nova Descricao"/><br/>
                    <label for="acao">Digite a acao </label>
                    <input type="text" name="acao" id="acao" required/><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>