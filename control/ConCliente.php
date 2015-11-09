<?php
require_once '../model/MCliente.php';

$conCliente = new ConCliente();
$acao = $_GET['acao'];
$id = $_GET['id'];

switch ($acao) {
    case 'excluir':
            $conCliente->excluirCliente($id);
            header("location:../view/clientes.php");
        break;
    case 'alterar':
        $conCliente->alterarCliente('nome', 'Daniel', '12');
         header("location:../view/clientes.php?info=ok");
        break;
    case 'novo':
        break;
    default:
        return 'erro';
}






class ConCliente{
    
    protected $cliente;
    
    function __construct(){
        $this->cliente = new MClientes();
        
    }
    
    
    function inserirCliente(){
        
    }
    function listarClientes(){
      return  $this->cliente->select('select id_clientes,nome,cnpj_cpf from clientes');
    }
    
    function excluirCliente($id){
        return $this->cliente->delete($id);
    }
    
    function alterarCliente($coluna, $valor, $id){
        return $this->cliente->update($coluna, $valor, $id);
    }
}
?>