
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class ConEnquadramento{
    
    protected $descricao;
    protected $idEnquadramento;


    public function getDescricao(){
        return $this->descricao;
    }
    public function getIdEnquadramento(){
        return $this->idEnquadramento;
    }
    public function setIdEnquadramento($idEnquadramento){
        $this->idEnquadramento = $idEnquadramento;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function insert($descricao){
        $conexao = new Conexao();
        $this->descricao = "insert into enquadramento (descricao) value ('$descricao')";
        
        $retorno = $conexao->executaSql($this->descricao);
        
        return $retorno;
    }
    public function delete($idEnquadramento){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from enquadramento where enquadramento.idenquadramento = '$idEnquadramento'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from enquadramento";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($idenquadramento, $descricao){
        $conexao = new Conexao();
        $sql = "update enquadramento set enquadramento.descricao = '$descricao' where enquadramento.idenquadramento = '$idenquadramento'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        
    }
    public function carregarPorId($idenquadramento)
	{
		$conexao = new Conexao();
	
		$sql = "select * from enquadramento where enquadramento.idenquadramento = '$idenquadramento'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->idEnquadramento = $retorno[0]['idenquadramento'];
		$this->descricao = $retorno[0]['descricao'];
	}	
    
}
