<?php 
	include_once 'controle.php';
	
	$conSituacao = new Situacao();
	
	if(!empty($_GET['id_situacao'])){
		$conSituacao->carregarPorId($_GET['id_situacao']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Situacao
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="id_situacao" id="id_situacao" value="<?php echo $conSituacao->getId_situacao(); ?>" />
	    	
                    <div class="form-group">
                	<label for="descricao" class="col-sm-2 control-label">Descricao: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $conSituacao->getDescricao(); ?>" />
                        </div>
                	<label for="acao" class="col-sm-2 control-label">Descricao: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="acao" id="acao" value="<?php echo $conSituacao->getAcao(); ?>" />
                            <input type="hidden" class="form-control" name="action" id="action" value="update" />
                        </div>
				</div>	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="../../view/ncm.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>				
				
	    	</form>
	</div> <!-- div.container -->
    	</div>
   	
    </body>
</html>