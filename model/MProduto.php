<?php
/*@author Daniel Fiuza <daniel.fuza@hotmail.com>
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';

class MProduto extends Entity {
    protected $id_produto;
    protected $gtim;
    protected $descricao;
    protected $grupo_id_grupo;
    protected $subgrupo_id_subgrupo;
    protected $ncm_id_ncm;
    protected $volume_id_volume;
    protected $genero_id_genero;
    protected $tributacao_id_tributacao;
    protected $observacao;
   
    private $conexao = 0 ;
    private $sqlInsert = "INSERT INTO produto (gtim,descricao,grupo_id_grupo,subgrupo_id_subgrupo,ncm_id_ncm,volume_id_volume,genero_id_genero,tributacao_id_tributacao,observacao)
                          VALUES('%s','%s',%s,%s,%s,%s,%s,%s,'%s')";
    
    function __construct() {
        $this->conexao = new Conexao();
    }
    function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getGtim(),  $this->getDescricao(),  $this->getGrupo_id_grupo(),  $this->getSubgrupo_id_subgrupo(),  $this->getNcm_id_ncm(),  $this->getVolume_id_volume(),
        $this->getGenero_id_genero(),  $this->getTributacao_id_tributacao(),  $this->getObservacao());
        if($this->conexao->executarQuery($sql)){
            return $sql;
        }else{
            return false;
        }
    }
    
    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from produto WHERE id_produto = {$id} "))){
            $this->conexao->deletar("produto", "WHERE id_produto = {$id}");
            return 'deletado com sucesso';
        }else{
            return 'registro não encontrado';
        }
    }
    
    function update($id){

        $valor = array(
            $this->getGtim(),  $this->getDescricao(),  $this->getGrupo_id_grupo(),  
            $this->getSubgrupo_id_subgrupo(),$this->getNcm_id_ncm(),  $this->getVolume_id_volume(),
            $this->getGenero_id_genero(),$this->getTributacao_id_tributacao(),  $this->getObservacao()
        );
        
        $coluna = array(
            "gtim","descricao","grupo_id_grupo","subgrupo_id_subgrupo","ncm_id_ncm",
            "volume_id_volume","genero_id_genero","tributacao_id_tributacao","observacao"
        );
        return $this->conexao->atualizar($coluna, $valor, 'produto', 'WHERE id_produto = '.$id);
    }
    
    function select($sql){
        return $this->conexao->executarSelect($sql);
    }
}