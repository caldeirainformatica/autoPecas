
"use strict";// modo mais seguro para evitar erros de declaração
			//validar cpf
			//recebe valor
			//verifica o formato
			//valida o primeiro digito verificador
			//valida o segundo digito verificador
			function validarCpf(){
				var patt = new RegExp("\\d{3}.\\d{3}.\\d{3}-\\d{2}");
				var patt2 = new RegExp("\\d");
				var r ="";
				var total1 = 0;
				var vr1;
				var vr2;
		
			
			try{
				var cpf = document.getElementById("cpf").value;
				if(cpf == "" || !patt.test(cpf)){  document.getElementById("mensagem").innerHTML= "CPF não está no formato correto!";}
				
				else{
					
					var res = cpf.split(/[.-]/);
					for(var i in res){
						r += res[i];	
					}	
					//validar o primeiro dígito
					var j =0;
					for(var i = 10;i>=2;i--){
						total1 = (r[j] * i)+total1;	
						j++;
					}
						vr1 = (total1 %11);
					if(vr1<2 ){
						vr1 = 0;
					}else{
						vr1 = Math.abs(vr1 - 11);
					}
					//validar segundo dígito
					j =0;
					total1 = 0;
					for(var i = 11;i>=2;i--){
						total1 = (r[j] * i)+total1;	
						j++;
					}
						vr2 = (total1 %11);
					if(vr2<2 ){
						vr2 = 0;
					}else{
						vr2 = Math.abs(vr2 - 11);
					}
					//validar CPF 
					if(vr1 != parseInt(r.charAt(9)) || vr2 != parseInt(r.charAt(10))){
						document.getElementById("mensagem").innerHTML= "Informe um CPF válido!.";
					}else{
						document.getElementById("mensagem").innerHTML = "Ok.";
					}
				}
				
			}catch(err){
				alert("Erro! "+err+".");
			
			}finally{
				 //document.getElementById("cpf").value = "";
			}
			
			}
			