<?php 
    $titulo = 'Cadastro de cidade';
    include_once '../model/head.php';
    include_once '../control/cidade/ConCidade.php';
    
    $cidade = new ConCidade();
    $cidades = $cidade->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de cidades</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Cidade</h3></td>
                    </tr>
                    <?php foreach ($cidades as $dado){?>
                    <tr>
                        <td><a title="alterar" href="..\control\cidade\formulario.php?idCidade=<?php echo $dado['idCidade']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="..\control\cidade\processamento.php?action=delete&idCidade=<?php echo $dado['idCidade']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['idCidade'] ?> </td>
                        <td><?php echo $dado['cidade'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="..\control\cidade\processamento.php?action=incluir" method="post">
                    <label for="incluir">Incluir nova descrição</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Nova Cidade" style="text-transform: uppercase" /><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>