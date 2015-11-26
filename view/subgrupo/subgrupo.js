$(document).ready(function(){
    $(".btn-incluir").click(function(){
        $(".modal-titulo").html("Incluir Subgrupo");
        $("#dados_formulario").load("incluir_subgrupo.php",function(){
            $("#modal").modal();
        });
        return false;
    });
    
    $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idsubgrupo",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                                     
        if(confirm(mensagem)){
            window.location.href = "../../control/ConSubgrupo.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    });
    
    $(".btn-alterar").click(function(){     
        url = $(this).attr('href');
        $(".modal-titulo").html("Alterar Subgrupo");
        $("#dados_formulario").load(url,function(){
            $("#modal").modal();
        });
        return false;
    });
});