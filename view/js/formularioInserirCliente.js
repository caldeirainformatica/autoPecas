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
                     "<label for='cpf'>Informe o CPF:</label><input id ='cpf' name='cpf' class='input input-sm'><br>\n\
                      <label for='nome'>Informe o Nome:</label><input id ='nome' name='nome' class'input input-sm'><br>\n\
                      <label for='rg'>Informe o RG:</label><input id ='rg' name='rg' class'input input-sm'><br>"
              );
            });
            //e
            //jurídica
            $("#radiojuridica").click(function(){

                  $("#dadostipo").html(
                        "<label for='cnpj'>Informe o CNPJ:</label><input id ='cpf' name='cpf' class='input input-sm'><br>\n\
                        <label for='razao'>Informe o Razão Social:</label><input id ='nome' name='nome' class'input input-sm'><br>\n\
                        <label for='nome'>Informe o Nome:</label><input id ='nome' name='nome' class'input input-sm'><br>\n\
                        <label for='ie'>Informe o IE:</label><input id ='ie' name='ie' class'input input-sm'><br>"
                    );
            });
        });   
    });
    
    
    
});



