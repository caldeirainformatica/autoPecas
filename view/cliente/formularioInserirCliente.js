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
                        <label for='razao'>Informe a Razão Social:</label><br><input id ='nome' name='razao' class='form-control'><br>\n\
                        <label for='nome'>Informe o Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                        <label for='ie'>Informe o IE:</label><br><input id ='ie' name='documento2' class='form-control'><br>"
                    );
            });
        });   
    });
    
    $("#tabelalistaclientes").ready(function(){
        $(".btn-alterar").click(function(){
                //recupera dados da tr 
                linha = $(this).parent().parent();
                var id = $("#idcliente",linha).text();
                var tipo = $("#tipocliente",linha).text();
                var nome = $("#nomecliente",linha).text();
                var razao = $("#razaocliente",linha).text();
                //documento1 = cnpj_cpf
                var documento1 = $("#documento1cliente",linha).text();
                //documento2 = rg_ie
                var documento2 = $("#documento2cliente",linha).text();
                var logradouro = $("#logradourocliente",linha).text();
                var numero = $("#nomerocliente",linha).text();
                var complemento = $("#complementocliente",linha).text();
                var cep = $("#cepcliente",linha).text();
                var telfixo = $("#telfixocliente").text();
                var email= $("#emailcliente",linha).text();
                var contato = $("#contatocliente",linha).text();
                var celular = $("#celularcliente",linha).text();
                var observacao = $("#observacaocliente",linha).text();
                var uf = $("#ufcliente",linha).text();
                var cidade = $("#cidadecliente",linha).text();
                var bairro = $("#bairrocliente",linha).text();
                var situacao = $("#situacaocliente",linha).text();
                
                $("#modal").load("modalAlterarClientes.php",function(){
                    $("#modalalterarcliente").modal();
                    $("#form_editar_cliente").attr("action","../../control/ConCliente.php?acao=alterar&id="+id+"");
                    $("#divid").val(id);    
                    if(tipo == '1'){
                        $("#dadostipo").html(
                             "<label for='cpf'>CPF:</label><br><input id ='cpf' name='documento1' class='cpf form-control'><br>\n\
                              <label for='nome'>Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                              <label for='rg'>RG:</label><br><input id ='rg' name='documento2' class='rg form-control'><br>"
                        );
                        $("#cpf").val(documento1);
                        $("#nome").val(nome);
                        $("#rg").val(documento2);
                    }else{
                        $("#dadostipo").html(
                             "<label for='cnpj'>CNPJ:</label><br><input id ='cnpj' name='documento1' class='cnpj form-control'><br>\n\
                              <label for='razao'>Razão Social:</label><br><input id ='razao' name='razao' class='form-control'><br>\n\
                              <label for='nome'>Nome:</label><br><input id ='nome' name='nome' class='form-control'><br>\n\
                              <label for='ie'>IE:</label><br><input id ='ie' name='documento2' class='form-control'><br>"
                        );
                        $("#cnpj").val(documento1);
                        $("#razao").val(razao);
                        $("#nome").val(nome);
                        $("#ie").val(documento2);
                    }
                    $("#logradouro").val(logradouro);
                    $("#uf").val(uf);
                    $("#numero").val(numero);
                    $("#complemento").val(complemento);
                    $("#cep").val(cep);
                    $("#cidade").val(cidade);
                    $("#celular").val(celular);
                    $("#telfixo").val(telfixo);
                    $("#email").val(email);
                    $("#contato").val(contato);
                    $("#observacao").val(observacao);
                    
                    
            });               
                
        });
    });
    $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idcliente",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                               
            
        if(confirm(mensagem)){
            window.location.href = "../../control/ConCliente.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    });
});



