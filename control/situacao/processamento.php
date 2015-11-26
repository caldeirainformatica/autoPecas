<?php
$titulo = 'Cadastro de Situacao';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'controle.php';
    include_once '../../model/head.php';
    
    $conSituacao = new Situacao();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/situacao.php';
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
            $acao = $_POST['acao'];
        }
        if (!empty($_GET['id_situacao'])){
            $id_situacao = $_GET['id_situacao'];
        }
    }
    switch ($action){
    case 'incluir':
        $conSituacao->insert($descricao, $acao);
        ?> 
        <script>
            alert("O situacao foi incluido com sucesso.");
            window.location.href = '../../view/situacao.php';
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conSituacao->delete($id_situacao);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O situacao foi excluido com sucesso.");
                window.location.href = '../../view/situacao.php';
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir situacao, Informe linha 55.");
                window.location.href = '../../view/situacao.php';
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conSituacao->update($id_situacao, $_GET['descricao'], $_GET['acao']);
       ?> 
        <script>
            alert("O situacao foi salvo com sucesso.");
            window.location.href = '../../view/situacao.php';
        </script>
        <?php
        }
?>    
</html>   