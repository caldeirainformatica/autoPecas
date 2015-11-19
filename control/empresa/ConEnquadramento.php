
<!--
 @Autor: Ricardo Caldeira Lima
-->

<?php

include 'conexao.php';

Class ConEmpresa{
    
    protected $id_empresa;
    protected $razao;
    protected $fantasia;
    protected $cnpj;
    protected $cnae;
    protected $inscricaoEstadual;
    protected $logradouro;
    protected $num;
    protected $complemento;
    protected $uf;
    protected $cidade;
    protected $bairro;
    protected $enquadramento;
    
    function getId_empresa() {
        return $this->id_empresa;
    }

    function getRazao() {
        return $this->razao;
    }

    function getFantasia() {
        return $this->fantasia;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getCnae() {
        return $this->cnae;
    }

    function getInscricaoEstadual() {
        return $this->inscricaoEstadual;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getNum() {
        return $this->num;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getUf() {
        return $this->uf;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEnquadramento() {
        return $this->enquadramento;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setRazao($razao) {
        $this->razao = $razao;
    }

    function setFantasia($fantasia) {
        $this->fantasia = $fantasia;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setCnae($cnae) {
        $this->cnae = $cnae;
    }

    function setInscricaoEstadual($inscricaoEstadual) {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNum($num) {
        $this->num = $num;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEnquadramento($enquadramento) {
        $this->enquadramento = $enquadramento;
    }

    
    
    public function delete($id_empresa){
        try {
            
        $conexao = new Conexao();
        $sql = "delete from empresa where empresa.id_empresa = '$id_empresa'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        } catch (Exception $ex) {
         return "erro $ex";   
        }
        
    }
    public function recuperaTodos(){
        $conexao = new Conexao();
        $sql = "select * from empresa";
        $retorno = $conexao->recuperaSelect($sql);
        return $retorno;
    }
    public function update($post){
        
        $this->id_empresa = $post['id_empresa'];
        $this->razao = $post['razao'];
        $this->fantasia = $post['fantasia'];
        $this->cnpj = $post['cnpj'];
        $this->cnae = $post['cnae'];
        $this->inscricaoEstadual = $post['inscricaoEstadual'];
        $this->logradouro = $post['logradouro'];
        $this->num = $post['num'];
        $this->complemento = $post['complemento'];
        $this->uf = $post['uf'];
        $this->cidade = $post['cidade'];
        $this->bairro = $post['bairro'];
        $this->enquadramento = $post['enquadramento'];
        
        $conexao = new Conexao();
        $sql = "update empresa set razao = '$this->razao', fantasia = '$this->fantasia', cnpj = '$this->cnpj' cnae = '$this->cnae'"
                . ", inscricaoEstadual = '$this->inscricaoEstadual', logradouro = '$this->logradouro', num = '$this->num' "
                . "complemento = '$this->complemento', uf = '$this->uf', cidade = '$this->cidade', bairro = '$this->bairro', "
                . "enquadramento = '$this->enquadramento' where id_empresa = '$this->id_empresa'";
        $retorno = $conexao->executaSql($sql);
        return $retorno;
        
    }
    public function carregarPorId($id_empresa)
	{
		$conexao = new Conexao();
	
		$sql = "select * from empresa where id_empresa = '$id_empresa'";
		$retorno = $conexao->recuperaSelect($sql);
                
                $this->id_empresa = $retorno[0]['id_empresa'];
                $this->razao = $retorno[0]['razao'];
                $this->fantasia = $retorno[0]['fantasia'];
                $this->cnpj = $retorno[0]['cnpj'];
                $this->cnae = $retorno[0]['cnae'];
                $this->inscricaoEstadual = $retorno[0]['inscricaoEstadual'];
                $this->logradouro = $retorno[0]['logradouro'];
                $this->num = $retorno[0]['num'];
                $this->complemento = $retorno[0]['complemento'];
                $this->uf = $retorno[0]['uf'];
                $this->cidade = $retorno[0]['cidade'];
                $this->bairro = $retorno[0]['bairro'];
                $this->enquadramento = $retorno[0]['enquadramento'];
        }	
    
}