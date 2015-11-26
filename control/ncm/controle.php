
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class Ncm{
    
    private $id_ncm;
    private $codigo;
    private $descricao;
    
    function getIdncm() {
        return $this->id_ncm;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdncm($id_ncm) {
        $this->id_ncm = $id_ncm;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function insert($codigo, $descricao){
        $conexao = new Conexao();
        $sql = "insert into ncm (codigo, descricao) values ('$codigo', '$descricao');";
        
        $retorno = $conexao->executaSql($sql);
        
        return $retorno;
    }
    public function delete($id_ncm){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from ncm where ncm.id_ncm = '$id_ncm'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from ncm";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($id_ncm, $codigo, $descricao){
        $conexao = new Conexao();
        $sql = "update ncm set ncm.codigo = '$codigo' where ncm.id_ncm = '$id_ncm'";
        $retorno = $conexao->executaSql($sql);
        $sql1 = "update ncm set ncm.descricao = '$descricao' where ncm.id_ncm = '$id_ncm'";
        $retorno1 = $conexao->executaSql($sql1);
        
        return "$retorno , $retorno1";
        
    }
    public function carregarPorId($id_ncm)
	{
		$conexao = new Conexao();
	
		$sql = "select * from ncm where ncm.id_ncm = '$id_ncm'";
		$retorno = $conexao->recuperaSelect($sql);
		
		$this->id_ncm = $retorno[0]['id_ncm'];
		$this->codigo = $retorno[0]['codigo'];
		$this->descricao = $retorno[0]['descricao'];
	}	
    

}