<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';
/**
 * Description of MGrupo
 *
 * @author Daniel Fiuza
 */
class MGrupo extends Entity{

    protected $id_grupo;
    protected $descricao;
    
    private $conexao;
    private $sqlInsert = "INSERT INTO grupo (descricao) VALUES('%s')";
    function __construct() {
        $this->conexao = new Conexao();
    }
    
    function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getDescricao());
        if($this->conexao->executarQuery($sql)){
            return "Inserido com sucesso.";
        }else{
             return "Erro ao Inserir Grupo";
        }
    }
    
    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from grupo WHERE id_grupo = {$id} "))){
           return $this->conexao->deletar("grupo", "WHERE id_grupo = {$id}");
        }else{
            return 'registro não encontrado';
        }
    }
    
    function update($id){
        $valor = $this->getDescricao();
        $coluna = "descricao";
        return $this->conexao->atualizar($coluna, $valor, "grupo", "WHERE id_grupo = ".$id);
    }
    
    function select($sql){
       return $this->conexao->executarSelect($sql); 
    }
    
}
