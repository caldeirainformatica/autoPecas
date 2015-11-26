
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class Volume{
    
    protected $id_volume;
    protected $descricao;


    public function getDescricao(){
        return $this->descricao;
    }
    public function getIdVolume(){
        return $this->id_volume;
    }
    public function setIdVolume($id_volume){
        $this->id_volume = $id_volume;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function insert($descricao){
        $conexao = new Conexao();
        $this->descricao = "insert into volume (descricao) value ('$descricao')";
        
        $retorno = $conexao->executaSql($this->descricao);
        
        return $retorno;
    }
    public function delete($id_volume){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from volume where volume.id_volume = '$id_volume'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from volume";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($id_volume, $descricao){
        $conexao = new Conexao();
        $sql = "update volume set volume.descricao = '$descricao' where volume.id_volume = '$id_volume'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        
    }
    public function carregarPorId($id_volume)
	{
		$conexao = new Conexao();
	
		$sql = "select * from volume where volume.id_volume = '$id_volume'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->id_volume = $retorno[0]['id_volume'];
		$this->descricao = $retorno[0]['descricao'];
	}	
    
}