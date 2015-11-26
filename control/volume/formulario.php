<?php 
	include_once 'controle.php';
	
	$conVolume = new Volume();
	
	if(!empty($_GET['id_volume'])){
		$conVolume->carregarPorId($_GET['id_volume']);
	}
        
?>

<?php  include_once '../../model/head.php'; ?>
    <body>
	<div class="panel panel-primary">
    	<div class="panel-heading">
    		Volume
    	</div>
            
    	<div class="panel-body">
	    	<form action="processamento.php" method="get" name="formulario" class="form-horizontal">
                    <input type="hidden" name="id_volume" id="id_volume" value="<?php echo $conVolume->getIdVolume(); ?>" />
	    	
				<div class="form-group">
                	<label for="descricao" class="col-sm-2 control-label">Descricao: </label>
                    <div class="col-sm-10">
                        <input type="text" maxlength="3" class="form-control" name="descricao" id="descricao" value="<?php echo $conVolume->getDescricao(); ?>" />
                        <input type="hidden" class="form-control" name="action" id="action" value="update" />
                    </div>
				</div>	    
					
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    	<a href="../../view/volume.php" class="btn btn-danger">Voltar</a>
                	</div>
				</div>	
	    	</form>
	</div> <!-- div.container -->
    	</div>
   	
    </body>
</html>