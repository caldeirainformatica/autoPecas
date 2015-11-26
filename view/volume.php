<?php 
    $titulo = 'Cadastro de Volume';
    include_once '../model/head.php';
    include_once '../control/volume/controle.php';
    
    $volume = new Volume();
    $volumes = $volume->recuperaTodos();
	
   
?>
<html>
    <body>
        <h1 align='center'>Cadastro de volumes</h1>
        <div class="container col-md-4">
                <table class="table table-striped" border='5'>
                    <tr>
                        <td><h3>AÇÃO</h3></td>
                        <td><h3>ID</h3></td>
                        <td><h3>Volume</h3></td>
                    </tr>
                    <?php foreach ($volumes as $dado){?>
                    <tr>
                        <td><a title="alterar" href="..\control\volume\formulario.php?id_volume=<?php echo $dado['id_volume']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="excluir" href="..\control\volume\processamento.php?action=delete&id_volume=<?php echo $dado['id_volume']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <td><?php echo $dado['id_volume'] ?> </td>
                        <td><?php echo $dado['descricao'] ?> </td>
                    </tr>
                    <?php }?>
            </table>
            <form action="..\control\volume\processamento.php?action=incluir" method="post">
                    <label for="incluir">Incluir novo volume</label>
                    <input type="text" maxlength="3" name="descricao" id="descricao" placeholder="Nova Descricao" style="text-transform: uppercase" /><br/>
                    <input type="submit" name="salvar" id="salvar" class="btn btn-default" />
            </form>
        </div>
    </body>

</html>