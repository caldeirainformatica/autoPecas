$(document).ready(function(){
    $("#adicionarproduto").click(function(){
        $("#modal").load("incluir_produto.php",function(){
            $("#incluir_produto").modal();
        });
    });
     $(".btn-excluir").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idproduto",linha).text();
        var mensagem = "Deseja mesmo deletar o Registro? \n Seu registro será excluído permanentemente.";                                                               
            
        if(confirm(mensagem)){
            window.location.href = "../../control/ConProduto.php?acao=excluir&id="+id+"";
        }else{
            return false;
        }
    });
    $(".btn-alterar").click(function(){
        linha = $(this).parent().parent();
        var id = $("#idproduto",linha).text();
        var gtim = $("#gtimproduto",linha).text();
        var descricao = $("#descricaoproduto",linha).text();
        var grupo = $("#grupoproduto").text();
        var subgrupo = $("#subgrupoproduto",linha).text();
        var ncm = $("#ncmproduto",linha).text();
        var volume = $("#volumeproduto").text();
        var genero = $("#generoproduto").text();
        var tributacao = $("#tributacaoproduto").text();
        var observacao = $("#observacaoproduto").text();
        $("#modal").load("alterar_produto.php",function(){
             $("#alterar_produto").modal();
             $("#form_alterar_produto").attr("action","../../control/ConProduto.php?acao=alterar&id="+id+"");
             $("#gtim").val(gtim);
             $("#descricao").val(descricao);
             $("#grupo").val(grupo);
             $("#subgrupo").val(subgrupo);
             $("#ncm").val(ncm);
             $("#volume").val(volume);
             $("#genero").val(genero);
             $("#tributacao").val(tributacao);
             $("#observacao").val(observacao);
        });
        
    });
});

//                            <td>Id</td>
//                            <td>Gtim</td>
//                            <td>Descrição</td>
//                            <td>grupo</td>
//                            <td>Subgrupo</td>
//                            <td>NCM</td>
//                            <td>Volume</td>
//                            <td>Gênero</td>
//                            <td>Tributação</td>
//                            <td>Observação</td>