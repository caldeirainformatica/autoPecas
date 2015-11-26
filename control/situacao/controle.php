
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class Situacao{
    
    private $id_situacao;
    private $descricao;
    private $acao;
    
    function getId_situacao() {
        return $this->id_situacao;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getAcao() {
        return $this->acao;
    }

    function setId_situacao($id_situacao) {
        $this->id_situacao = $id_situacao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setAcao($acao) {
        $this->acao = $acao;
    }

        
    public function insert($descricao, $acao){
        $conexao = new Conexao();
        $sql = "insert into situacao (descricao, acao) values ('$descricao', '$acao');";
        
        $retorno = $conexao->executaSql($sql);
        
        return $retorno;
    }
    public function delete($id_situacao){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from situacao where id_situacao = '$id_situacao'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from situacao";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($id_situacao, $descricao, $acao){
        $conexao = new Conexao();
        $sql = "update situacao set descricao = '$descricao' where ncm.id_ncm = '$id_situacao'";
        $retorno = $conexao->executaSql($sql);
        $sql1 = "update situacao set acao = '$acao' where id_situacao = '$id_situacao'";
        $retorno1 = $conexao->executaSql($sql1);
        
        return "$retorno , $retorno1";
        
    }
    public function carregarPorId($id_situacao)
	{
		$conexao = new Conexao();
	
		$sql = "select * from situacao where id_situacao = '$id_situacao'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->id_situacao = $retorno[0]['id_situacao'];
		$this->descricao = $retorno[0]['descricao'];
		$this->acao = $retorno[0]['acao'];
	}	
}