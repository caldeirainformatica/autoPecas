<?php
/**
 * Description of ConTributacao
 *
 * @author Code
 */
include_once $_SERVER['DOCUMENT_ROOT'].'/model/MTributacao.php';
$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");
$tributacao = new ConTributacao();
switch($acao){
    case "listar":
        $tributacao->listarTributacaoPorId($id);
        break;
    case "alterar";
        $resposta = $tributacao->alterarTributacao($id);
        print_r($resposta);
        header("location:../../view/tributacao/tributacao.php?info=$resposta");
        break;
    case "novo":
        $resposta = $tributacao->incluirTributacao();
        header("location:../../view/tributacao/tributacao.php?info=$resposta");
        break;
    case "excluir":
        $resposta = $tributacao->deletarTributacao($id);
        header("location:../../view/tributacao/tributacao.php?info=$resposta");
        break;
    default:
        $resposta = "Erro";

}
class ConTributacao {
    private $tributacao;
    function __construct() {
        $this->tributacao = new MTributacao();
    }
    function listarTributacao(){
        return $this->tributacao->select("SELECT * FROM tributacao");
    }
        function listarTributacaoPorId($id){
        return $this->tributacao->select("SELECT * FROM tributacao WHERE id_tributacao=$id");
    }
    
    function alterarTributacao($id){
        $nome = $_POST['tributacao'];
        $descricao = $_POST['descricao'];
        $icms = $_POST["icms"];
        $iss = $_POST['iss'];
        $cfopDentro = $_POST['cfopdentro'];
        $cfopFora = $_POST['cfopfora'];
        
        $this->tributacao->setTributacao($nome);
        $this->tributacao->setDescricao($descricao);
        $this->tributacao->setIcms($icms);
        $this->tributacao->setIss($iss);
        $this->tributacao->setCfop_dentro($cfopDentro);
        $this->tributacao->setCfop_fora($cfopFora);
        return $this->tributacao->update($id);
    }
    
    function incluirTributacao(){
        $nome = $_POST['tributacao'];
        $descricao = $_POST['descricao'];
        $icms = $_POST["icms"];
        $iss = $_POST['iss'];
        $cfopDentro = $_POST['cfopdentro'];
        $cfopFora = $_POST['cfopfora'];
        
        $this->tributacao->setTributacao($nome);
        $this->tributacao->setDescricao($descricao);
        $this->tributacao->setIcms($icms);
        $this->tributacao->setIss($iss);
        $this->tributacao->setCfop_dentro($cfopDentro);
        $this->tributacao->setCfop_fora($cfopFora);
        return $this->tributacao->insert();
    }
    
    function deletarTributacao($id){
      return $this->tributacao->delete($id);
    }
}
