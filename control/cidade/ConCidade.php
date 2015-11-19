
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class ConCidade{
    
    protected $cidade;
    protected $idCidade;


    public function getCidade(){
        return $this->cidade;
    }
    public function getIdCidade(){
        return $this->idCidade;
    }
    public function setIdCidade($idCidade){
        $this->idCidade = $idCidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function insert($cidade){
        $conexao = new Conexao();
        $this->cidade = "insert into cidade (cidade) value ('$cidade')";
        
        $retorno = $conexao->executaSql($this->cidade);
        
        return $retorno;
    }
    public function delete($idCidade){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from cidade where cidade.idCidade = '$idCidade'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from cidade";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($idCidade, $cidade){
        $conexao = new Conexao();
        $sql = "update cidade set cidade.cidade = '$cidade' where cidade.idCidade = '$idCidade'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        
    }
    public function carregarPorId($idCidade)
	{
		$conexao = new Conexao();
	
		$sql = "select * from cidade where cidade.idCidade = '$idCidade'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->idCidade = $retorno[0]['idCidade'];
		$this->cidade = $retorno[0]['cidade'];
	}	
    
}