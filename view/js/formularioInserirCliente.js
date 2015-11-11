/**
 * 
 * @author Daniel Fiuza
 *
 */

/*
 *@function carregar modals. Pode ser usado em todos os casos
 */
$(document).ready(function(){	

    //aciona a função ao clicar no botão id=adicionarcliente em: clientes.php
    $("#adicionarcliente").click(function(){
        //recupera e carrega o código HTML do arquivo modalInserirClientes.php e apresenta dentro da div modal em clientes.php
        $("#modal").load("modalInserirClientes.php", function(){
            //função js do bootstrap para criar modal. O id modalinserircliente é o id da modal que foi carregada e está no arquivo modalInserirClientes.php
            $("#modalinserircliente").modal();
            //dentro dessa modal os radiobuttons ao serem clicados adicionam tags html no formulário da modal com inputs referentes aos atributos de pessoa 
            //fisica
            $("#radiofisica").click(function(){
              $("#dadostipo").html(
                     "<label for='cpf'>Informe o CPF:</label><br><input id ='cpf' name='documento1' class='cpf form-control'><br>\n\
                      <label for='nome'>Informe o Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                      <label for='rg'>Informe o RG:</label><br><input id ='rg' name='documento2' class='rg form-control'><br>"
              );
            });
            //e
            //jurídica
            $("#radiojuridica").click(function(){

                  $("#dadostipo").html(
                        "<label for='cnpj'>Informe o CNPJ:</label><br><input id ='cpf' name='documento1' class='cnpj form-control'><br>\n\
                        <label for='razao'>Informe o Razão Social:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                        <label for='nome'>Informe o Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                        <label for='ie'>Informe o IE:</label><br><input id ='ie' name='documento2' class='form-control'><br>"
                    );
            });
        });   
    });
    
    $(".btnalterar").click(function(){
        var id = $("#idcliente").text();
        alert(id);
        $("#modal").load("modalAlterarClientes.php",function(){
            $("#modalalterarcliente").modal();
            $("#divid").val($("#idcliente").text());    
            var tipo = $("#tipocliente").text();
            if(tipo == '1'){
                $("#dadostipo").html(
                     "<label for='cpf'>CPF:</label><br><input id ='cpf' name='documento' class='cpf form-control'><br>\n\
                      <label for='nome'>Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                      <label for='rg'>RG:</label><br><input id ='rg' name='documento2' class='rg form-control'><br>"
                );
                $("#cpf").val($("#documento1cliente").text());
                $("#nome").val($("#nomecliente").text());
                $("#rg").val($("#documento2cliente").text());
            }else{
                $("#dadostipo").html(
                     "<label for='cnpj'>CNPJ:</label><br><input id ='cnpj' name='documento' class='cnpj form-control'><br>\n\
                      <label for='razao'>Razão Social:</label><br><input id ='razao' name='nome' class='form-control'><br>\n\
                      <label for='nome'>Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                      <label for='ie'>IE:</label><br><input id ='ie' name='documento2' class='form-control'><br>"
                );
                $("#cnpj").val($("#documento1cliente").text());
                $("#razao").val($("#razaocliente").text());
                $("#nome").val($("#nomecliente").text());
                $("#ie").val($("#documento2cliente").text());
            }
            $("#logradouro").val($("#logradourocliente").text());
            $("#uf").val($("#ufcliente").text());
            $("#numero").val($("#nomerocliente").text());
            $("#complemento").val($("#complementocliente").text());
            $("#cep").val($("#cepcliente").text());
            $("#cidade").val($("#cidadecliente").text());
            $("#celular").val($("#celularcliente").text());
            $("#telfixo").val($("#telfixocliente").text());
            $("#email").val($("#emailcliente").text());
            $("#contato").val($("#contatocliente").text());
            $("#observacao").val($("#observacaocliente").text());
        });
        
    });
    
});



