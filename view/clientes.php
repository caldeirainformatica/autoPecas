<?php
include_once '../control/ConCliente.php';
$conCliente = new ConCliente();
$listaClientes = $conCliente->listarClientes();
print_r($listaClientes);

$info = (isset($_GET['info'])?$info = $_GET['info']: $info="");
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
        <div class="row">
            <div class="col-md-2">    
            <div class="container" style="margin-top: 10px;">
             <div class="panel panel-primary">
             <div class="panel-heading"><h1>Lista de Clientes</h1></div>
                  <div class="panel panel-body ">
                      <div>
                          <?php switch($info){
                              case 'ok':
                                echo '<h1>Alterado com Sucesso!</h1>';
                              break;
                              default :
                                  echo '<h1>Opção inválida!</h1>';
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
                                                <a title="editar" id="btnalterar" class="glyphicon glyphicon-pencil" target="#myModal"></a></td>
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
        
    <!-- Modal -->
    <div id="modalinserircliente" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Inserir Clientes</h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" action="" method="">
                  <fieldset>
                      <legend class="">Tipo de pessoa:</legend>
                      <label class="radio-inline"><input type="radio" name="tipopessoa" id="radiofisica" value="fisica">Física</label>
                      <label class="radio-inline"><input type="radio" name="tipopessoa" id="radiojuridica" value="juridica">Jurídica</label>
                      <div id="dadostipo"></div>
                  </fieldset>
                  <br>
                  <input type="text" id="cpf">
              </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>  
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>

      </div>
    </div>
    <!--    Fim da Modal    -->
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