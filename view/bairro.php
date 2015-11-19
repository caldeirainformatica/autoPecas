<?php 
    $titulo = 'Cadastro de bairro';
    include_once '../model/head.php';
    include_once '../control/bairro/controle.php';
    
    $bairro = new Bairro();
    $bairros = $bairro->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de bairros</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Bairro</h3></td>
                    </tr>
                    <?php foreach ($bairros as $dado){?>
                    <tr>
                        <td><a title="alterar" href="..\control\bairro\formulario.php?idBairro=<?php echo $dado['idBairro']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="..\control\bairro\processamento.php?action=delete&idBairro=<?php echo $dado['idBairro']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['idBairro'] ?> </td>
                        <td><?php echo $dado['bairro'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="..\control\bairro\processamento.php?action=incluir" method="post">
                    <label for="incluir">Incluir novo bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Novo Bairro" style="text-transform: uppercase" /><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>