<?php 
	/* global $this */

/* global $this */

include_once $_SERVER['DOCUMENT_ROOT'].'/QualityControl/model/head.php';
	include_once "conexao.php";
  ?>      
            

<html>
		
	
		<head>
		<meta charset="utf-8">
			<style type="text/css">
				 	.alinha{
				 		position:relative;
		 				left: 37%; 
		 				top: 50%; 
		 				
		 			}
			</style>
		</head>
			
	<body>
            <script type="text/javascript">
 	function verificaDireciona($cnpj){
 		alert('deu certo');
                this.$cnpj = $cnpj
                document.cnpj.action = 'ricardo.php';
                <?php
 		$select = 'select cnpj from cliente where cnpj = '.$cnpj;
		    try {
                         $conecta = new Conexao(); 
 			$resultado = $conecta->recuperaSelect($select);
                   
                    }				
 		catch (EXCEPTION $e){
 			alert ($e.getmessage());
 		}
  	
                ?>
    }
	</script>
		
		<div class="conteiner" style="margin-top: 100px; margin-left: 500px; margin-right: 500px;">
			<div class="panel panel-info">
				<div class="panel-heading">
					<font style="font-size: large;">Bem vindo ao sistema de teste de qualidade da CPD SOLUÇÕES EM INFORMATICA. Faremos apenas 5 perguntas
					para melhorar a qualidade dos nossos serviços. Para iniciar, inclua seu nome e cnpj abaixo.</font>
				</div>
				<div class="panel-body">
					<div class="alinha">
						<img src=".\img\logo.jpg" height="100px" width="220px">
						<form action="" class="form-inline" name="cnpj">
							<br/><p><label for="nome">Nome</label>
							<input type="text" class="form-control" required="required" name="nome" id="cnpj"></p>
							<p><label for="cnpj">CNPJ</label>
							<input type="number" class="form-control" name="cnpj" id="cnpj" required="required" 
							maxlength="14" placeholder="Apenas Números"></p>
                                                        <input type="submit" name="enviar" id="enviar" value="Enviar" onclick="verificaDireciona();" >
						</form>
					</div>
				</div>
				<div class="panel-footer">
					A CPD SOLUÇÕES EM INFORMÁTICA o upgrade de sua empresa.<br/>
					(061) 8160-5766 / 3375-3089
				</div>
				
				
				
				
				
				</div>
			
			
			
			
			</div>
		
		
	
	</body>
</html>