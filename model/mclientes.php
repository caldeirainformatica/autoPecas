<?php
/*@author: Daniel Fiuza
 * @date: 30/10/2015
 */
 require_once 'model/Entity.php';
 require_once 'db/conexao.php';
 //classe Entity instanciada e chega de criar Getters e Setters!!
 class MClientes extends Entity{
     
     protected $id_clientes;
     protected $tipo;
     protected $nome;
     protected $razao;
     protected $cnpj_cpf;
     protected $rg_ie;
     protected $logradouro;
     protected $numero;
     protected $complemento;
     protected $cep;
     protected $tel_fixo;
     protected $email;
     protected $contato;
     protected $celular;
     protected $observacao;
     protected $uf;
     protected $cidade;
     protected $bairro;
     protected $situacao_id_situacao;
     
     private $conexao;
     
     //%s são caracteres coringas que são usados pelo método sprintf
    protected $sqlInsert = "insert into clientes (tipo,nome,razao,cnpj_cpf,rg_ie,logradouro,numero,complemento,cep,tel_fixo,email,contato,celular,observacao,uf,cidade,bairro,situacao_id_situacao) 
				values('%s','%s','%s','%s','%s','%s',%s,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',%s)";
    
    protected $sqlUpdate = "";
    protected $sqlSelect = "";
    protected $sqlDelete = "";
     
     function __construct(){
         $this->conexao = new Conexao();
     }
     
     function insert(){
        $sql = sprintf($this->sqlInsert, $this->getTipo(), $this->getNome(), $this->getRazao(), $this->getCnpj_cpf(), $this->getRg_ie(),
                $this->getLogradouro(), $this->getNumero(), $this->getComplemento(), $this->getCep(), $this->getTel_fixo(), $this->getEmail(),
                $this->getContato(),  $this->getCelular(),$this->getObservacao(),  $this->getUf(), $this->getCidade(), $this->getBairro(),$this->getSituacao_id_situacao());
        
       if(!$this->conexao->executarQuery($sql)){
           return 'Inserido com sucesso!';
       }else{
           return "query inválida! Deu merda!";
       }
     }
     
 }