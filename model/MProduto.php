<?php
/*@author Daniel Fiuza <daniel.fuza@hotmail.com>
 */
require_once 'db/conexao.php';
 require_once 'model/Entity.php';

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
            return true;
        }else{
            return false;
        }
    }
    
    function delete(){
        
    }
    
    function update(){
        
    }
    
    function select(){
        
    }
}