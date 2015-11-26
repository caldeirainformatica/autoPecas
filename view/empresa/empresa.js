$(document).ready(function(){
        $(".btn-incluir").click(function(){
            $(".modal-titulo").html("Incluir Empresa");
            $("#dados_formulario").load("incluir_empresa.php",function(){
                $("#modal").modal();
            });       
        });
        $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idempresa",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                                     
        if(confirm(mensagem)){
            window.location.href = "../../control/ConEmpresa.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    });
    
    $(".btn-alterar").click(function(){     
        url = $(this).attr('href');
        $(".modal-titulo").html("Alterar Empresa");
        $("#dados_formulario").load(url,function(){
            $("#modal").modal();
        });
        return false;
    });
});