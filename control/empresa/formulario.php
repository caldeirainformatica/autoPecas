<?php 
	include_once './ConEnquadramento.php';
	
	$conEnquadramento = new ConEnquadramento();
	
	if(!empty($_GET['idenquadramento'])){
		$conEnquadramento->carregarPorId($_GET['idenquadramento']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Enquadramento
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="idenquadramento" id="idenquadramento" value="<?php echo $conEnquadramento->getIdEnquadramento(); ?>" />
	    	
				<div class="form-group">
                	<label for="descricao" class="col-sm-2 control-label">Descricao: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $conEnquadramento->getDescricao(); ?>" />
                        <input type="hidden" class="form-control" name="action" id="action" value="update" />
                    </div>
				</div>	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="index.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>				
				
	    	</form>
	</div> <!-- div.container -->
    	</div>
   	
    </body>
</html>