<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/MCliente.php';

$conCliente = new ConCliente();
$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");

switch ($acao) {
    case 'excluir':
          $resposta = $conCliente->excluirCliente($id);
            header("location:../view/cliente/clientes.php?info=$resposta");
        break;
    case 'alterar':
        $resposta = $conCliente->alterarCliente($id);
        header("location:../view/cliente/clientes.php?info=$resposta");
        break;
    case 'novo':
        $rsposta = $conCliente->inserirCliente();
        header("location:../view/cliente/clientes.php?info=$rsposta");
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
    $tipo = $_POST['tipopessoa'];
    $nome = $_POST['nome']; 
    $razao = (empty($_POST['razao'])?$id = "":$id = $_POST['razao']);
    $cnpj_cpf = $_POST['documento1']; 
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
      return  $this->cliente->select('select * from clientes');
    }
    
    function listarClientesPorId($id){
      return  $this->cliente->select("select * from clientes where id_clientes={$id}");
    }
    
    function excluirCliente($id){
        return $this->cliente->delete($id);
    }
    
    function alterarCliente($id){
        $nome = $_POST['nome']; 
        $razao = (empty($_POST['razao'])?$razao = "":$razao = $_POST['razao']);
        $cnpj_cpf = $_POST['documento1']; 
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
        $this->cliente->setNome($nome);
        $this->cliente->setRazao($razao);
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
        //$this->cliente->select("update clientes set nome = '{$this->cliente->getNome()}' where id_clientes=$id");
        return $this->cliente->update2($id);
         //return $id;
    }
}
?>