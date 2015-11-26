<?php
/*@author Daniel Fiuza <daniel.fuza@hotmail.com>
 */
 require_once $_SERVER['DOCUMENT_ROOT'].'/model/Entity.php';
 require_once $_SERVER['DOCUMENT_ROOT'].'/db/conexao.php';
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
    
     
     function __construct(){
         $this->conexao = new Conexao();
     }
    
     //função insert
     function insert(){
        $sql = sprintf($this->sqlInsert, $this->getTipo(), $this->getNome(), $this->getRazao(), $this->getCnpj_cpf(), $this->getRg_ie(),
                $this->getLogradouro(), $this->getNumero(), $this->getComplemento(), $this->getCep(), $this->getTel_fixo(), $this->getEmail(),
                $this->getContato(),  $this->getCelular(),$this->getObservacao(),  $this->getUf(), $this->getCidade(), $this->getBairro(),$this->getSituacao_id_situacao());
        
        if(($this->conexao->executarSelect("SELECT * from clientes WHERE cnpj_cpf = '{$this->getCnpj_cpf()}' "))== false){
            if($this->conexao->executarQuery($sql)){
                return 'Inserido com Sucesso!';
            }else{
                return 'Erro: ';
             } 
        }else{
            return 'Já existe cadastro com o cnpj/cpf';
        }

     }
     
    function update2($id){
        $coluna = array(
            "nome","razao","cnpj_cpf","rg_ie","logradouro",
            "numero","complemento","cep","tel_fixo","email","contato",
            "celular","observacao","uf","cidade","bairro","situacao_id_situacao"
        );
        $valor = array(
            $this->getNome(), $this->getRazao(), $this->getCnpj_cpf(), $this->getRg_ie(),
            $this->getLogradouro(), $this->getNumero(), $this->getComplemento(), $this->getCep(), $this->getTel_fixo(), $this->getEmail(),
            $this->getContato(),  $this->getCelular(),$this->getObservacao(),  $this->getUf(), $this->getCidade(), $this->getBairro(),$this->getSituacao_id_situacao()
         );
        return $this->conexao->atualizar($coluna, $valor, 'clientes', "WHERE id_clientes ={$id}");       
     }
     
     /*Qual a melhor forma de criar a função select?
      * 1- criar um select único para a classe passando um parâmetro único também
      * 2- que tal fazer uma função select que retorna os resultados de acordo com a pesquisa realizada?
      */
     function select($sql){
        return $this->conexao->executarSelect($sql);
     }
     
     function select2($coluna, $where, $ordem, $limite){
         return $this->conexao->executarSelectAprimorado('clientes', $coluna, $where, $ordem, $limite);
     }
     
    function update($coluna, $valor,$id){
        $pegarid = "id_clientes =$id ";
         $this->conexao->atualizar($coluna, $valor, 'clientes', $pegarid);
         return $pegarid;
    }
    
    function delete($id){
        if(($this->conexao->executarSelect("SELECT * from clientes WHERE id_clientes = {$id} "))){
            $this->conexao->deletar("clientes", "WHERE id_clientes = {$id}");
            return 'deletado com sucesso';
        }else{
            return 'registro não encontrado';
        }
    }
     
 }