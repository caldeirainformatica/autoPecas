
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class Bairro{
    
    protected $bairro;
    protected $idBairro;


    public function getBairro(){
        return $this->bairro;
    }
    public function getIdBairro(){
        return $this->idBairro;
    }
    public function setIdBairro($idBairro){
        $this->idBairro = $idBairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function insert($bairro){
        $conexao = new Conexao();
        $this->bairro = "insert into bairro (bairro) value ('$bairro')";
        
        $retorno = $conexao->executaSql($this->bairro);
        
        return $retorno;
    }
    public function delete($idBairro){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from bairro where bairro.idBairro = '$idBairro'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from bairro";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($idBairro, $bairro){
        $conexao = new Conexao();
        $sql = "update bairro set bairro.bairro = '$bairro' where bairro.idBairro = '$idBairro'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        
    }
    public function carregarPorId($idBairro)
	{
		$conexao = new Conexao();
	
		$sql = "select * from bairro where bairro.idBairro = '$idBairro'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->idBairro = $retorno[0]['idBairro'];
		$this->bairro = $retorno[0]['bairro'];
	}	
    
}