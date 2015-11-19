<?php 
    $titulo = 'Cadastro de enquadramento';
    include_once '../model/head.php';
    include_once '../control/enquadramento/ConEnquadramento.php';
    
    $enquadramento = new ConEnquadramento();
    $enquadramentos = $enquadramento->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de enquadramentos</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Descricao</h3></td>
                    </tr>
                    <?php foreach ($enquadramentos as $dado){?>
                    <tr>
                        <td><a title="alterar" href="..\control\enquadramento\formulario.php?idenquadramento=<?php echo $dado['idenquadramento']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="..\control\enquadramento\processamento.php?action=delete&idenquadramento=<?php echo $dado['idenquadramento']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['idenquadramento'] ?> </td>
                        <td><?php echo $dado['descricao'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="..\control\enquadramento\processamento.php?action=incluir" method="post">
                    <label for="incluir">Incluir nova descrição</label>
                    <input type="text" name="descricao" id="descricao" placeholder="Nova Descrição" style="text-transform: uppercase" /><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>