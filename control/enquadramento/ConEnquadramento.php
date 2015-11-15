
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class ConEnquadramento{
    
    protected $descricao;
    
    public function getDescricao(){
        return $descricao;
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
    public function delet($idEnquadramento){
        $conexao = new Conexao();
        $sql = "delete from enquadramento where enquadramento.idenquadramento = '$idEnquadramento";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
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
    
}
