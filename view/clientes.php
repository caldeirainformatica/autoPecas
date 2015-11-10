<?php

include_once '../control/ConCliente.php';
$conCliente = new ConCliente();
$listaClientes = $conCliente->listarClientes();
print_r($listaClientes);
$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");
?>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Clientes</title>
        <script  type="text/javascript" src ="../js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src ="../js/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src ="../js/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/utilitario.js"></script>
        <link type="text/css" rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="../js/jquery/teste.js"></script>
        <script type="text/javascript" src="js/formularioInserirCliente.js"></script>
                <script>
    $("input").click(function(){
        $('#tel').mask('(99)9999-9999?9');
        $('#cpf').mask('999.999.999-99');
        $('#cnpj').mask('999.999.999/9999-99');
    });
    
                </script>      
               
    </head>
    <body>
        <?php
            include'menu.php';
        ?>
        <div class="row">
            <div class="col-md-2">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-primary">
             <div class="panel-heading"><h1>Lista de Clientes</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php switch($info){
                             case '2':
                                echo '<h1>Registro excluído com Sucesso!</h1>';
                              break;
                              case '2':
                                echo '<h1>Alterado com Sucesso!</h1>';
                                break;
                              case '3':
                               echo '<h1>Novo registro incluído com sucesso!</h1>';
                              break;
                              default :
                              break;
                           }
                          ?>
                      </div>
                      <div class="text-right">
                          <button type="button" id="adicionarcliente" class="btn btn-warning">Novo Cliente <span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      <br>
                    <table id="table" class="table table-hover table-bordered">
                        <tr>
                            <td>Ações</td>
                            <td>Id</td>
                            <td>Nome</td>
                            <td>Documento</td>
                        </tr>
                        <?php foreach($listaClientes as $lista){?>
                                        <tr>
                                            <td><a title="excluir" class="glyphicon glyphicon-trash" id="btnexcluir"></a>
                                                <a title="editar" id="btnalterar" class="glyphicon glyphicon-pencil"></a></td>
                                            <td><?php echo $lista['id_clientes'] ?></td>
                                            <td><?php echo $lista['nome'] ?></td>
                                            <td><?php echo $lista['cnpj_cpf'] ?></td>
                                        </tr>
                           <?php }?>
                    </table>
                   </div>
            </div>
            </div> 
        </div>    
        </div>  
        <div id="modal"></div>
    </body>
</hmtl>


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