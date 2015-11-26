<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConCliente.php';
$conCliente = new ConCliente();
$listaClientes = $conCliente->listarClientes();
//print_r($listaClientes);
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Clientes</title>
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/view/head.php'; ?>  
        <script type="text/javascript" src="formularioInserirCliente.js"></script>
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
             <div class="panel panel-primary">
             <div class="panel-heading"><h1>Lista de Clientes</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php 
                           echo $info;
                          ?>
                      </div>
                      <div class="text-right">
                          <button type="button" id="adicionarcliente" class="btn btn-warning">Novo Cliente <span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      <br>
                    <table id="tableclientes" class="table table-striped table-bordered">
                        <tr >
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Tipo</td>
                            <td>Nome</td>
                            <td>Razão</td>
                            <td>CNPJ/CPF</td>
                            <td>RG/IE</td>
                            <td>Logradouro</td>
                            <td>Número</td>
                            <td>CEP</td>
                            <td>Telefone Fixo</td>
                        </tr>
                        <div id="tabelalistaclientes">
                        <?php foreach($listaClientes as $lista){?>
                                        <tr>
                                            <td id="acoes"><a title="excluir" class="btn-excluir btn btn-danger glyphicon glyphicon-trash"  id="btnexcluir"></a>
                                                <a title="editar" id="btnalterar" class="btn-alterar btn btn-primary glyphicon glyphicon-pencil"></a></td>
                                            <td id="idcliente"><?php echo $lista['id_clientes'] ?></td>
                                            <td id="tipocliente"><?php echo $lista['tipo'] ?></td>
                                            <td id="nomecliente"><?php echo $lista['nome'] ?></td> 
                                            <td id="razaocliente"><?php echo $lista['razao'] ?></td>
                                            <td id="documento1cliente"><?php echo $lista['cnpj_cpf'] ?></td>
                                            <td id="documento2cliente"><?php echo $lista['rg_ie'] ?></td>
                                            <td id="logradourocliente"><?php echo $lista['logradouro'] ?></td>
                                            <td id="nomerocliente"><?php echo $lista['numero'] ?></td>
                                            <td id="complementocliente" hidden="true"><?php echo $lista['complemento'] ?></td>
                                            <td id="cepcliente"><?php echo $lista['cep'] ?></td>
                                            <td id="telfixocliente"><?php echo $lista['tel_fixo'] ?></td>
                                            <td id="emailcliente" hidden="true"><?php echo $lista['email'] ?></td>
                                            <td id="contatocliente" hidden="true"><?php echo $lista['contato'] ?></td>
                                            <td id="celularcliente" hidden="true"><?php echo $lista['celular'] ?></td>
                                            <td id="observacaocliente" hidden="true"><?php echo $lista['observacao'] ?></td>
                                            <td id="ufcliente" hidden="true"><?php echo $lista['uf'] ?></td>
                                            <td id="cidadecliente" hidden="true"><?php echo $lista['cidade'] ?></td>
                                            <td id="bairrocliente" hidden="true"><?php echo $lista['bairro'] ?></td>
                                            <td id="situacaocliente" hidden="true"><?php echo $lista['situacao_id_situacao'] ?></td>
                                        </tr>
                           <?php }?>
                        </div>
                    </table>
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


