

$(document).ready(function(){	

    
    $("#adicionarcliente").click(function(){
         $("#modalinserircliente").modal();
    });
    
    $("#radiofisica").click(function(){
            
        $("#dadostipo").html(
               "<label for='cpf'>Informe o CPF:</label><input id ='cpf' name='cpf' class='input-sm'><br>\n\
                <label for='nome'>Informe o Nome:</label><input id ='nome' name='nome' class'input-sm'><br>\n\
                <label for='rg'>Informe o RG:</label><input id ='rg' name='rg' class'input-sm'><br>"
        );

    });
    
    $("#radiojuridica").click(function(){

        $("#dadostipo").html(
            "<label for='cnpj'>Informe o CNPJ:</label><input id ='cpf' name='cpf' class='input-sm'><br>\n\
            <label for='razao'>Informe o Razão Social:</label><input id ='nome' name='nome' class'input-sm'><br>\n\
            <label for='nome'>Informe o Nome:</label><input id ='nome' name='nome' class'input-sm'><br>\n\
            <label for='ie'>Informe o IE:</label><input id ='ie' name='ie' class'input-sm'><br>"
        );
    });
    
});



