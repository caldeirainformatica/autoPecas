<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConEmpresa.php';
$conEmpresa = new ConEmpresa();
$listaEmpresas = $conEmpresa->listarEmpresas();
//print_r($listaEmpresas);
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
$resposta = (isset($_GET['resposta'])?$resposta = $_GET['resposta']: $resposta="");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Empresas</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?> 
        <script type="text/javascript" src="empresa.js"></script>
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
             <div class="panel-heading"><h1>Lista de Empresas</h1></div>
                <div class="panel panel-body ">
                    <div>
                        <?php echo "<h4>$info</h4>";
                        ?>
                    </div>
                    <div class="text-right">
                        <button type="button" id="adicionarempresa"  class="btn-incluir btn btn-warning">Nova Empresa <span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                      <br>
                    <table id="tablegrupos" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>ID</td>
                            <td>Razão Social</td>
                            <td>Nome Fantasia</td>
                            <td>CNPJ</td>
                            <td>CNAE</td>
                            <td>IE</td>
                            <td hidden="true">Logradouro</td>
                            <td>NUM</td>
                            <td hidden="true">Complemento</td>
                            <td>Logo</td>
                            <td>UF</td>
                            <td>Cidade</td>
                            <td>Bairro</td>
                            <td>Enquadramento</td>
                        </tr>
                        <?php foreach($listaEmpresas as $lista){?>
                            <tr>
                                <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash" id="btnexcluir"></a>
                                    <a title="editar" id="btnalterar"class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"
                                       href="alterar_empresa.php?id=<?php echo $lista['id_empresa']?>"></a></td>
                                <td id="idempresa"><?php echo $lista['id_empresa'] ?></td>
                                <td id="razaoempresa"><?php echo $lista['razao'] ?></td>
                                <td id="fantasiaempresa"><?php echo $lista['fantasia'] ?></td>
                                <td id="cnpjempresa"><?php echo $lista['cnpj'] ?></td>
                                <td id="cnaeempresa"><?php echo $lista['cnae'] ?></td>
                                <td id="ieempresa"><?php echo $lista['inscricaoEstadual'] ?></td>
                                <td hidden="true" id="logradouroempresa"><?php echo $lista['logradouro'] ?></td>
                                <td id="numempresa"><?php echo $lista['num'] ?></td>
                                <td hidden="true" id="complementoempresa"><?php echo $lista['complemento'] ?></td>
                                <td id="logoempresa"><?php echo $lista['logo'] ?></td>
                                <td id="ufempresa"><?php echo $lista['uf'] ?></td>
                                <td id="ciadeempresa"><?php echo $lista['cidade'] ?></td>
                                <td id="bairroempresa"><?php echo $lista['bairro'] ?></td>
                                <td id="enquadramentoempresa"><?php echo $lista['enquadramento_id_enquadramento'] ?></td>
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