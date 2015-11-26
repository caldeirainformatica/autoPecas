$(document).ready(function(){
    //função para chamar modal alterar recuperando dados por id usando jquery
    $(".btn-alterar").click(function(){     
        url = $(this).attr('href');
        $(".modal-titulo").html("Alterar Tributação");
        $("#dados_formulario").load(url,function(){
            $("#modal").modal();
        });
        return false;
    });
    
    $(".btn-incluir").click(function(){
        $(".modal-titulo").html("Incluir Tributação");
        $("#dados_formulario").load("incluir_tributacao.php",function(){
            $("#modal").modal();
        });       
    });
    
    $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idtributacao",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                                     
        if(confirm(mensagem)){
            window.location.href = "../../control/ConTributacao.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    });
});

