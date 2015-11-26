<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/model/MSubgrupo.php';
$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");
/**
 * Description of ConSubgrupo
 *
 * @author Code
 */
$subgrupo = new ConSubgrupo();
switch($acao){
    case "listar":

        break;
    case "alterar";
        $resposta = $subgrupo->alterarSubgrupo($id);
        print_r($resposta);
         header("location:../../view/subgrupo/subgrupo.php?info=$resposta");
        break;
    case "novo":
        $resposta =$subgrupo->inserirSubgrupo();
        print_r($resposta);
        header("location:../../view/subgrupo/subgrupo.php?info=$resposta");
        break;
    case "excluir":
       $resposta  = $subgrupo->deletarSubgrupo($id);
        header("location:../../view/subgrupo/subgrupo.php?info=$resposta");
        break;
    default:
       

}
class ConSubgrupo {
    private $subgrupo;
    
    function __construct() {
        $this->subgrupo = new MSubgrupo();
    }
    function listarSubgrupos(){
      return  $this->subgrupo->listarSubgrupos();
    }
    
    function listarGrupos(){
        return $this->subgrupo->select("SELECT * FROM grupo");
    }
    
    function inserirSubgrupo(){
        $descricao = $_POST['descricao'];
        $grupo = $_POST['grupo'];
        $this->subgrupo->setDescricao($descricao);
        $this->subgrupo->setGrupo_id_grupo($grupo);
        return $this->subgrupo->insert();
    }
    
    function deletarSubgrupo($id){
       return $this->subgrupo->delete($id);
    }
    
    function listarSubgrupoPorId($id){
       return $this->subgrupo->select("SELECT * FROM subgrupo WHERE id_subgrupo = $id");
    }
    
    function alterarSubgrupo($id){
        $descricao = $_POST['descricao'];
        $grupo = $_POST['grupo'];
        $this->subgrupo->setDescricao($descricao);
        $this->subgrupo->setGrupo_id_grupo($grupo);
        return $this->subgrupo->update($id);
    }
}
