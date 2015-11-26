$(document).ready(function(){
    $(".btn-incluir").click(function(){
     $("#modal").load("incluir_grupo.php",function(){
         $("#incluir_grupo").modal();
     });  
    });
    $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idgrupo",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                               
            
        if(confirm(mensagem)){
            window.location.href = "../../control/ConGrupo.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    }); 
    $(".btn-alterar").click(function(){
         linha = $(this).parent().parent();
         var id = $("#idgrupo",linha).text();
         var descricao = $("#descricaogrupo",linha).text(); 
         $("#modal").load("alterar_grupo.php",function(){
         $("#alterar_grupo").modal(function(){
         });
         $("#form_alterar_produto").attr("action","../../control/ConGrupo.php?acao=alterar&id="+id+"");
         $("#idgrupo").val(id);
         $("#descricao").val(descricao);
     });  
    });
 
});