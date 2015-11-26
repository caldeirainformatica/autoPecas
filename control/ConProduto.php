<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/MProduto.php';

$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");

$conProduto = new ConProduto();
switch ($acao) {
    case 'excluir':
          $resposta = $conProduto->excluirProduto($id);
            header("location:../view/produto/produtos.php?info=$resposta");
        break;
    case 'alterar':
        $resposta = $conProduto->alterarProduto($id);
        print_r($id);
        var_dump($resposta);
        header("location:../view/produto/produtos.php?info=$resposta");
        break;
    case 'novo':
       $resposta = $conProduto->inserirProdutos();
        print_r($resposta);
       header("location:../view/produto/produtos.php?info=$resposta");
        break;
    default:
        return 'erro';
}



class ConProduto{
    
    
    private $produto;
    
            function __construct(){
        $this->produto = new MProduto();
    }
    
    function inserirProdutos(){
        $gtim = $_POST['gtim'];
        $descricao = $_POST['descricao'];
        $grupo = $_POST['grupo'];
        $subgrupo = $_POST['subgrupo'];
        $ncm = $_POST['ncm'];
        $volume = $_POST['volume'];
        $genero = $_POST['genero'];
        $tributacao = $_POST['tributacao'];
        $obervacao = $_POST['observacao'];
        
        $this->produto->setGtim($gtim);
        $this->produto->setDescricao($descricao);
        $this->produto->setGrupo_id_grupo($grupo);
        $this->produto->setSubgrupo_id_subgrupo($subgrupo);
        $this->produto->setNcm_id_ncm($ncm);
        $this->produto->setVolume_id_volume($volume);
        $this->produto->setGenero_id_genero($genero);
        $this->produto->setTributacao_id_tributacao($tributacao);
        $this->produto->setObservacao($obervacao);
        return $this->produto->insert();
        
        
    }
    
    function excluirProduto($id){
        return $this->produto->delete($id);
    }
    
    function alterarProduto($id){
        $gtim = $_POST['gtim'];
        $descricao = $_POST['descricao'];
        $grupo = $_POST['grupo'];
        $subgrupo = $_POST['subgrupo'];
        $ncm = $_POST['ncm'];
        $volume = $_POST['volume'];
        $genero = $_POST['genero'];
        $tributacao = $_POST['tributacao'];
        $obervacao = $_POST['observacao'];
        
        $this->produto->setGtim($gtim);
        $this->produto->setDescricao($descricao);
        $this->produto->setGrupo_id_grupo($grupo);
        $this->produto->setSubgrupo_id_subgrupo($subgrupo);
        $this->produto->setNcm_id_ncm($ncm);
        $this->produto->setVolume_id_volume($volume);
        $this->produto->setGenero_id_genero($genero);
        $this->produto->setTributacao_id_tributacao($tributacao);
        $this->produto->setObservacao($obervacao);
        return $this->produto->update($id);
    }
    
    function listarProdutos(){
        return $this->produto->select('SELECT * FROM produto');
    }
    
       function listarGrupos(){
        return $this->produto->select('SELECT * FROM grupo');
    }
    
    function listarSubGrupos(){
        return $this->produto->select('SELECT * FROM subgrupo');
    }
    
    function listarNcm(){
       return $this->produto->select('SELECT * FROM ncm'); 
    }
    
    function listarVolumes(){
        return $this->produto->select('SELECT * FROM volume');
    }
    
    function listarGeneros(){
        return $this->produto->select('SELECT * FROM genero');
    }
    
    function listarTributacao(){
        return $this->produto->select('SELECT * FROM tributacao');
    }
    
    function listarProdutoPorId($id){
        return $this->produto->select("SELECT * FROM produto WHERE id_produto = $id ");
    }
    
}
?>