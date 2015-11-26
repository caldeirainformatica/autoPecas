<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/model/MEmpresa.php';

$conEmpresa = new ConEmpresa();
$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");

switch ($acao) {
    case 'excluir':
          $resposta = $conEmpresa->excluirEmpresa($id);
            header("location:../view/empresa/empresa.php?info=$resposta");
        break;
    case 'alterar':
        $resposta = $conEmpresa->alterarEmpresa($id);
        header("location:../view/empresa/empresa.php?info=$resposta");
        break;
    case 'novo':
        $resposta = $conEmpresa->incluirEmpresa();
        print_r($resposta);
        //header("location:../view/empresa/empresa.php?info=$resposta");
        break;
    default:
        return 'erro';
}




class ConEmpresa {
    private $empresa;
    function __construct() {
        $this->empresa = new MEmpresa;
    }
    
    function listarEmpresas(){
        return $this->empresa->select("SELECT * FROM empresa");
    }
    
    function excluirEmpresa($id){
      return  $this->empresa->delete($id);
    }
    
   function listarEmpresaPorId($id){
      return $this->empresa->select("SELECT * FROM empresa where id_empresa = $id");
   }
    
    function listarEnquadramentos(){
        return $this->empresa->select("SELECT * FROM enquadramento");
    }
    
     function incluirEmpresa(){
        $razao = $_POST['razao'];
        $fantasia = $_POST['fantasia'];
        $cnpj = $_POST["cnpj"];
        $cnae = $_POST['cnae'];
        $ie = $_POST['ie'];
        $logradouro = $_POST['logradouro'];
        $num = $_POST['num'];
        $complemento = $_POST['complemento'];
        $logo = $_POST['logo'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $enquadramento = $_POST['enquadramento'];
        
        $this->empresa->setRazao($razao);
        $this->empresa->setFantasia($fantasia);
        $this->empresa->setCnpj($cnpj);
        $this->empresa->setCnae($cnae);
        $this->empresa->setInscricaoEstadual($ie);
        $this->empresa->setLogradouro($logradouro);
        $this->empresa->setNum($num);
        $this->empresa->setComplemento($complemento);
        $this->empresa->setLogo($logo);
        $this->empresa->setUf($uf);
        $this->empresa->setCidade($cidade);
        $this->empresa->setBairro($bairro);
        $this->empresa->setEnquadramento_id_enquadramento($enquadramento);
        return $this->empresa->insert();
        //return $this->empresa->getLogo();
    }
    
    function alterarEmpresa($id){
        $id = $_POST['id'];
        $razao = $_POST['razao'];
        $fantasia = $_POST['fantasia'];
        $cnpj = $_POST["cnpj"];
        $cnae = $_POST['cnae'];
        $ie = $_POST['ie'];
        $logradouro = $_POST['logradouro'];
        $num = $_POST['num'];
        $complemento = $_POST['complemento'];
        $logo = $_POST['logo'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $enquadramento = $_POST['enquadramento'];
        $this->empresa->setRazao($razao);
        $this->empresa->setFantasia($fantasia);
        $this->empresa->setCnpj($cnpj);
        $this->empresa->setCnae($cnae);
        $this->empresa->setInscricaoEstadual($ie);
        $this->empresa->setLogradouro($logradouro);
        $this->empresa->setNum($num);
        $this->empresa->setComplemento($complemento);
        $this->empresa->setLogo($logo);
        $this->empresa->setUf($uf);
        $this->empresa->setCidade($cidade);
        $this->empresa->setBairro($bairro);
        $this->empresa->setEnquadramento_id_enquadramento($enquadramento);
        return $this->empresa->update($id);
    }
}