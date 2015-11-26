<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';
/**
 * Description of MTributacao
 *
 * @author Code
 */
class MTributacao extends Entity{
    protected $id_tributacao;
    protected $tributacao;
    protected $descricao;
    protected $icms;
    protected $iss;
    protected $cfop_dentro;
    protected $cfop_fora;
    
    private $conexao;
    private $sqlInsert = "INSERT INTO tributacao (tributacao,descricao,icms,iss,cfop_dentro_uf,cfop_fora_uf)
                          VALUES(%s,'%s',%s,%s,%s,%s)";
            
    function __construct() {
        $this->conexao = new Conexao();
    }
    
    function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getTributacao(),  $this->getDescricao(),  $this->getIcms(),  $this->getIss(),
        $this->getCfop_dentro(),  $this->getCfop_fora());
        if($valor = $this->conexao->executarQuery($sql)){
                return "Inserido com sucesso.";

        }else{
             return "Erro ao Inserir Tributação";
        }
        
    }
    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from tributacao WHERE id_tributacao = {$id} "))){
           return $this->conexao->deletar("tributacao", "WHERE id_tributacao = {$id}");
        }else{
            return 'registro não encontrado';
        }
    }
    function update($id){
        $valor = array(
            $this->getTributacao(),  $this->getDescricao(),  $this->getIcms(),  $this->getIss(),
            $this->getCfop_dentro(), $this->getCfop_fora()
        );
        
        $coluna = array(
            "tributacao","descricao","icms","iss","cfop_dentro_uf","cfop_fora_uf"
        );
        if($this->conexao->atualizar($coluna, $valor, "tributacao", "WHERE id_tributacao = ".$id)){
           return 'Alterado com sucesso'; 
        }else{
            return 'Erro ao alterar registro';
        }
    }
    function select($sql){
        return $this->conexao->executarSelect($sql); 
    }
}
