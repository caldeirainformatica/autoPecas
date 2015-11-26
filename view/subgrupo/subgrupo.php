<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConSubgrupo.php';
$conSubgrupo = new ConSubgrupo();
$listaSubgrupos = $conSubgrupo->listarSubgrupos();
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
$resposta = (isset($_GET['resposta'])?$resposta = $_GET['resposta']: $resposta="");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subgrupo</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?> 
        <script type="text/javascript" src="subgrupo.js"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/view/menu.php'; ?>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-warning">
             <div class="panel-heading"><h1>Lista de Subgrupos</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php echo $info;
                          ?>
                      </div>
                      <div class="text-right">
                          <button type="button" id="adicionarsubgrupos" class="btn-incluir btn btn-warning">Novo Subgrupo <span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      <br>
                    <table id="tablegrupos" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Descrição</td>
                            <td>Grupo</td>
                        </tr>
                        <?php foreach($listaSubgrupos as $lista){?>
                                        <tr>
                                            <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash" id="btnexcluir"></a>
                                                <a title="editar" id="btnalterar"class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"
                                                   href="alterar_subgrupo.php?id=<?php echo $lista['id_subgrupo']?>"></a></td>
                                            <td id="idsubgrupo"><?php echo $lista['id_subgrupo'] ?></td>
                                            <td id="descricaosubgrupo"><?php echo $lista['descricao'] ?></td>
                                            <td id="gruposubgrupo"><?php echo $lista['grupo_id_grupo'] ?></td>
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
                    <div class="modal-body">
                    <div id="dados_formulario"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
        </div>  
      <!--    Fim da Modal    -->
         <br>
        <br>
        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
        ?>
    </body>
</html>