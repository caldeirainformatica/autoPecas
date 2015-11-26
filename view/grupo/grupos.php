<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConGrupo.php';
$conGrupo = new ConGrupo();
$listaGrupos = $conGrupo->listarGrupos();
//print_r($listaGrupos);
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
$resposta = (isset($_GET['resposta'])?$resposta = $_GET['resposta']: $resposta="");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Grupos</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?> 
        <script type="text/javascript" src="grupo.js"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/view/menu.php'; ?>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-warning">
             <div class="panel-heading"><h1>Lista de Grupos</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php echo $info;
                          ?>
                      </div>
                      <div class="text-right">
                          <button type="button" id="adicionargrupo" class="btn-incluir btn btn-warning">Novo Grupo <span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      <br>
                    <table id="tablegrupos" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Descrição</td>
                        </tr>
                        <div id="tabelalistaprodutos">
                        <?php foreach($listaGrupos as $lista){?>
                                        <tr>
                                            <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash" id="btnexcluir"></a>
                                                <a title="editar" id="btnalterar"class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"></a></td>
                                            <td id="idgrupo"><?php echo $lista['id_grupo'] ?></td>
                                            <td id="descricaogrupo"><?php echo $lista['descricao'] ?></td>
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
        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/view/footer.php';
        ?>
    </body>
</html>


<!--$cliente->setTipo("1");
$cliente->setNome("Daniel");
$cliente->setRazao("");
//sempre modificar cpf antes de testar
$cliente->setCnpj_cpf("000.000.441-90");
$cliente->setRg_ie("2.222.202");
$cliente->setLogradouro("P Sul");
$cliente->setNumero("13");
$cliente->setComplemento("Quadra 104");
$cliente->setCep("72000000");
$cliente->setTel_fixo("33774455");
$cliente->setEmail("daniel@hotmail.com");
$cliente->setContato("33774455");
$cliente->setCelular("99445522");
$cliente->setObservacao("Teste");  
$cliente->setUf("DF");
$cliente->setCidade("Ceilândia");
$cliente->setBairro("Por do Sol");
$cliente->setSituacao_id_situacao("1");-->
