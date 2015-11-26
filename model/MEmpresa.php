<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
class MEmpresa extends Entity{
    
    protected $id_empresa;
    protected $razao;
    protected $fantasia;
    protected $cnpj;
    protected $cnae;
    protected $inscricaoEstadual;
    protected $logradouro;
    protected $num;
    protected $complemento;
    protected $logo;
    protected $uf;
    protected $cidade;
    protected $bairro;
    protected $enquadramento_id_enquadramento;
    
    private $conexao;
    private $sqlInsert  = "INSERT INTO empresa (razao,fantasia,cnpj,cnae,inscricaoEstadual,logradouro,num,
                            complemento,logo,uf,cidade,bairro,enquadramento_id_enquadramento)
                            VALUES('%s','%s',%s,%s,%s,'%s','%s','%s','%s','%s','%s','%s',%s)";
    
    function __construct() {
        $this->conexao = new Conexao();
    }
    function insert(){
        $sql = sprintf($this->sqlInsert,  $this->getRazao(),$this->getFantasia(),  $this->getCnpj(),
                        $this->getCnae(),  $this->getInscricaoEstadual(),  $this->getLogradouro(),
                        $this->getNum(),  $this->getComplemento(), $this->getLogo(),  $this->getUf(), 
                        $this->getCidade(),  $this->getBairro(),  $this->getEnquadramento_id_enquadramento());
        
        if(($this->conexao->executarSelect("SELECT * from empresa WHERE cnpj = '{$this->getCnpj()}' "))== false){
            //return $this->conexao->executarQuery($sql);
            return $sql;
        }else{
            return 'Já existe cadastro com o cnpj/cpf';
        }
    }
    function update($id){
        $valor = array(
           $this->getRazao(),$this->getFantasia(),  $this->getCnpj(),
            $this->getCnae(),  $this->getInscricaoEstadual(),  $this->getLogradouro(),
            $this->getNum(),  $this->getComplemento(), $this->getLogo(),  $this->getUf(), 
            $this->getCidade(),  $this->getBairro(),  $this->getEnquadramento_id_enquadramento()
        );
        
        $coluna = array(
            "razao","fantasia","cnpj","cnae","inscricaoEstadual","logradouro","num",
                            "complemento","logo","uf","cidade","bairro","enquadramento_id_enquadramento"
        );
        if($this->conexao->atualizar($coluna, $valor, "empresa", "WHERE id_empresa = ".$id)){
           return 'Alterado com sucesso'; 
        }else{
            return 'Erro ao alterar registro';
        }
    }

    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from empresa WHERE id_empresa = {$id} "))){
            $this->conexao->deletar("empresa", "WHERE id_empresa = {$id}");
            return 'Deletado com sucesso';
        }else{
            return 'registro não encontrado';
        }
    }        
    
    
    function select($sql){
        return $this->conexao->executarSelect($sql);
    }
    

}