<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/control/ConTributacao.php';
    $info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
    $resposta = (isset($_GET['resposta'])?$resposta = $_GET['resposta']: $resposta="");
    $conTributacao = new ConTributacao();
    $listaTributacao = $conTributacao->listarTributacao();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tributações</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?> 
        <script type="text/javascript" src="tributacao.js"></script>
        <script>
    $(function(){
        $('#tributacao').mask('999999999999');
        });
</script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/view/menu.php'; ?>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-warning">
             <div class="panel-heading"><h1>Lista de Tributações</h1></div>
                <div class="panel panel-body ">
                    <div>
                        <?php echo "<h4>$info</h4>";
                        ?>
                    </div>
                    <div class="text-right">
                        <button type="button" id="adicionartributacao"  class="btn-incluir btn btn-warning">Nova Tributação <span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                      <br>
                    <table id="tablegrupos" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Tributação</td>
                            <td>Descrição</td>
                            <td>ICMS</td>
                            <td>ISS</td>
                            <td>Cfop Dentro UF</td>
                            <td>Cfop Fora UF</td>
                        </tr>
                        <?php foreach($listaTributacao as $lista){?>
                            <tr>
                                <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash" id="btnexcluir"></a>
                                    <a title="editar" id="btnalterar"class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"
                                       href="alterar_tributacao.php?id=<?php echo $lista['id_tributacao']?>"></a></td>
                                <td id="idtributacao"><?php echo $lista['id_tributacao'] ?></td>
                                <td id="tributacao"><?php echo $lista['tributacao'] ?></td>
                                <td id="descricao"><?php echo $lista['descricao'] ?></td>
                                <td id="icmstributacao"><?php echo $lista['icms'] ?></td>
                                <td id="isstributacao"><?php echo $lista['iss'] ?></td>
                                <td id="cfopdentrotributacao"><?php echo $lista['cfop_dentro_uf'] ?></td>
                                 <td id="cfopforatributacao"><?php echo $lista['cfop_fora_uf'] ?></td>
                            </tr>
                        <?php }?>
                    </table>
                </div>   
            </div>
            </div>
            </div> 
        </div>      
        <div id="modal" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">
         <!-- Modal content-->
                <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-titulo modal-title"></h1>
                 </div>
                    <div class="modal-body ">
                    <div id="dados_formulario"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
        </div>     
      <!--    Fim da Modal    -->
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
        ?>
    </body>
</html>