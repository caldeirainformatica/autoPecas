<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MSubgrupo
 *
 * @author Code
 */
class MSubgrupo extends Entity{
    protected $id_subgrupo;
    protected $descricao;
    protected $grupo_id_grupo;
    
    private $conexao;
    private $sqlInsert = "INSERT INTO subgrupo (descricao,grupo_id_grupo) VALUES('%s',%s)";
    
    function __construct() {
        $this->conexao = new Conexao();
    }
    function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getDescricao(),  $this->getGrupo_id_grupo());
        if($this->conexao->executarQuery($sql)){
            return "Inserido com sucesso.";
        }else{
             return "Erro ao Inserir Grupo";
        }
    }
    
    function update($id){
        $valor = array(
            $this->getDescricao(),  $this->getGrupo_id_grupo()
        );  
        $coluna = array(
            "descricao","grupo_id_grupo"
        );
        if($this->conexao->atualizar($coluna, $valor, "subgrupo", "WHERE id_subgrupo = ".$id)){
           return 'Alterado com sucesso'; 
        }else{
            return 'Erro ao alterar registro';
        }
        
 
    }
    function listarSubgrupos(){
     return $this->conexao->executarSelect("SELECT * FROM subgrupo");
    }
    
    function select($sql){
       return $this->conexao->executarSelect($sql);
    }
    
    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from subgrupo WHERE id_subgrupo = {$id} "))){
           return $this->conexao->deletar("subgrupo", "WHERE id_subgrupo = {$id}");
        }else{
            return 'registro não encontrado';
        }
    }
}
