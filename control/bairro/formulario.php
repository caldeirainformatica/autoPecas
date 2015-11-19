<?php 
	include_once 'controle.php';
	
	$conBairro = new Bairro();
	
	if(!empty($_GET['idBairro'])){
		$conBairro->carregarPorId($_GET['idBairro']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Bairro
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="idBairro" id="idBairro" value="<?php echo $conBairro->getIdBairro(); ?>" />
	    	
				<div class="form-group">
                	<label for="bairro" class="col-sm-2 control-label">Bairro: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bairro" id="descricao" value="<?php echo $conBairro->getBairro(); ?>" />
                        <input type="hidden" class="form-control" name="action" id="action" value="update" />
                    </div>
				</div>	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="../../view/bairro.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>				
				
	    	</form>
	</div> <!-- div.container -->
    	</div>
   	
    </body>
</html>