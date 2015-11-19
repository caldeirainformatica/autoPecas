<?php 
	include_once 'ConCidade.php';
	
	$conCidade = new ConCidade();
	
	if(!empty($_GET['idCidade'])){
		$conCidade->carregarPorId($_GET['idCidade']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Cidade
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="idCidade" id="idCidade" value="<?php echo $conCidade->getIdCidade(); ?>" />
	    	
				<div class="form-group">
                	<label for="cidade" class="col-sm-2 control-label">Cidade: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cidade" id="descricao" value="<?php echo $conCidade->getCidade(); ?>" />
                        <input type="hidden" class="form-control" name="action" id="action" value="update" />
                    </div>
				</div>	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="../../view/cidade.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>				
				
	    	</form>
	</div> <!-- div.container -->
    	</div>
   	
    </body>
</html>