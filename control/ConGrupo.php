<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/model/MGrupo.php';

$acao = (isset($_GET['acao'])?$acao = $_GET['acao']: $acao="");
$id = (isset($_GET['id'])?$id = $_GET['id']: $id="");
/**
 * Description of ConGrupo
 *
 * @author Code
 */
$grupo = new ConGrupo();
switch ($acao) {
    case 'excluir':
          
          print_r($grupo->excluirGrupo($id));
          header("location:".$_SERVER['DOCUMENT_ROOT']."'/view/grupos.php?info=$resposta'");
        break;
    case 'alterar':
        $resposta =$grupo->alterarGrupo($id);
        print_r($id);
       // header("location:".$_SERVER['DOCUMENT_ROOT']."'/view/grupos.php?info=$resposta'");
        break;
    case 'novo':
        $resposta = $grupo->incluirGrupo();
        print_r($resposta);
        header("location:".$_SERVER['DOCUMENT_ROOT']."'/view/grupos.php?info=$resposta'");
        break;
    default:
        return 'erro';
}
class ConGrupo {
    private $grupo;
    function __construct() {
        $this->grupo = new MGrupo();
    }
    
    function incluirGrupo(){
        $descricao = strip_tags($_POST['descricao']);  
        if(!empty($descricao)){
          $this->grupo->setDescricao($descricao);
          return $this->grupo->insert();
          
        }else{
            return "Erro ao cadastrar grupo:Nome do grupo vazio";
        }
        
        
    }
    function alterarGrupo($id){
         $descricao = strip_tags($_POST['descricao']);  
            if(!empty($descricao)){
              $this->grupo->setDescricao($descricao);
              return $this->grupo->update($id);

            }else{
                return "Erro ao cadastrar grupo:Nome do grupo vazio";
            }
            return $this->grupo->update($id);
    }     
    function excluirGrupo($id){
       return $this->grupo->delete($id);
    }
    function listarGrupos(){
        return $this->grupo->select('SELECT * FROM grupo');
    }
    
}
