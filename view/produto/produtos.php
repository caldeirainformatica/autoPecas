<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConProduto.php';
$conProduto = new ConProduto();
$listaProdutos = $conProduto->listarProdutos();
//print_r($listaProdutos);
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
$resposta = (isset($_GET['resposta'])?$resposta = $_GET['resposta']: $resposta="");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>produtos</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?> 
        <script type="text/javascript" src="produto.js"></script>
                <script>
    $("input").click(function(){
        $('#tel').mask('(99)9999-9999?9');
        $('#cpf').mask('999.999.999-99');
        $('#cnpj').mask('999.999.999/9999-99');
    });
    
                </script>      
               
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/view/menu.php'; ?>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-2">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-success">
             <div class="panel-heading"><h1>Lista de Produtos</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php print_r($resposta);
                          ?>
                      </div>
                      <div class="text-right">
                          <button type="button" id="adicionarproduto" class="btn btn-warning">Novo Produto <span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      <br>
                    <table id="tableclientes" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Gtim</td>
                            <td>Descrição</td>
                            <td>grupo</td>
                            <td>Subgrupo</td>
                            <td>NCM</td>
                            <td>Volume</td>
                            <td>Gênero</td>
                            <td>Tributação</td>
                            <td>Observação</td>
                        </tr>
                        <div id="tabelalistaprodutos">
                        <?php foreach($listaProdutos as $lista){?>
                                        <tr>
                                            <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash" id="btnexcluir"></a>
                                                <a title="editar" id="btnalterar"class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"></a></td>
                                            <td id="idproduto"><?php echo $lista['id_produto'] ?></td>
                                            <td id="gtimproduto"><?php echo $lista['gtim'] ?></td>
                                            <td id="descricaoproduto"><?php echo $lista['descricao'] ?></td> 
                                            <td id="grupoproduto"><?php echo $lista['grupo_id_grupo'] ?></td> 
                                            <td id="subgrupoproduto"><?php echo $lista['subgrupo_id_subgrupo'] ?></td> 
                                            <td id="ncmproduto"><?php echo $lista['ncm_id_ncm'] ?></td> 
                                            <td id="volumeproduto"><?php echo $lista['volume_id_volume'] ?></td>
                                            <td id="generoproduto"><?php echo $lista['genero_id_genero'] ?></td> 
                                            <td id="tributacaoproduto"><?php echo $lista['tributacao_id_tributacao'] ?></td> 
                                            <td id="observacaoproduto"><?php echo $lista['observacao'] ?></td> 
                                        </tr>
                           <?php }?>
                            </table>
                        </div>
                    
                   </div>
            </div>
            </div> 
        </div>    
        </div>  
        <div id="modal"></div>
        <br>
        <br>
        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
        ?>
    </body>
</html>



