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
         header("location:../view/clientes.php?info=2");
        break;
    case 'novo':
        $conCliente->inserirCliente();
         header("location:../view/clientes.php?info=3");
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
    $tipo = '1';
    $nome = $_POST['nome']; 
    $razao = $_POST['razao'];
    $cnpj_cpf = $_POST['documento']; 
    $rg_ie = $_POST['documento2'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $tel_fixo = $_POST['fixo'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];
    $celular = $_POST['celular'];
    $observacao = $_POST['observacao'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $situacao_id_situacao = '1';
    $this->cliente->setTipo($tipo);
    $this->cliente->setNome($nome);
    $this->cliente->setRazao($razao);
        //sempre modificar cpf antes de testar
    $this->cliente->setCnpj_cpf($cnpj_cpf);
    $this->cliente->setRg_ie($rg_ie);
    $this->cliente->setLogradouro($logradouro);
    $this->cliente->setNumero($numero);
    $this->cliente->setComplemento($complemento);
    $this->cliente->setCep($cep);
    $this->cliente->setTel_fixo($tel_fixo);
    $this->cliente->setEmail($email);
    $this->cliente->setContato($contato);
    $this->cliente->setCelular($celular);
    $this->cliente->setObservacao($observacao);  
     $this->cliente->setUf($uf);
     $this->cliente->setCidade($cidade);
    $this->cliente->setBairro($bairro);
     $this->cliente->setSituacao_id_situacao($situacao_id_situacao);
    $this->cliente->insert();
        
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