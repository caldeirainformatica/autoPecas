<?php 
    $titulo = 'Cadastro de enquadramento';
    include_once '../model/head.php';
    include_once '../control/enquadramento/ConEnquadramento.php';
    
    $enquadramento = new Enquadramento();
    $enquadramentos = $enquadramento->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de enquadramentos</h1>
        <div class="container col-md-4">
            
            <table class="table table-striped" border='5'>
                <tr>
                    <td><h3>ID</h3></td>
                    <td><h3>Descricao</h3></td>
                </tr>
                <?php foreach ($cursos as $dado){?>
                <tr>
                    <td><a title="alterar" href="processamento.php?acao=alterar&id_curso=<?php echo $dado['id_curso']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a title="excluir" href="processamento.php?acao=excluir&id_curso=<?php echo $dado['id_curso']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                    <td><?php echo $dado['idenquadramento'];?></td>
                    <td><?php echo $dado['descricao'];?></td>

                </tr>
                <?php }?>
            </table>
        </div>
    </body>
</html>