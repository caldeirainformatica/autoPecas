<?php 
	include_once 'controle.php';
	
	$conNcm = new Ncm();
	
	if(!empty($_GET['id_ncm'])){
		$conNcm->carregarPorId($_GET['id_ncm']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		NCM
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="id_ncm" id="id_ncm" value="<?php echo $conNcm->getIdncm(); ?>" />
	    	
                    <div class="form-group">
                	<label for="codigo" class="col-sm-2 control-label">Codigo: </label>
                        <div class="col-sm-10">
                            <input type="number" maxlength="8" class="form-control" name="codigo" id="codigo" value="<?php echo $conNcm->getCodigo(); ?>" />
                        </div>
                	<label for="descricao" class="col-sm-2 control-label">Descricao: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $conNcm->getDescricao(); ?>" />
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