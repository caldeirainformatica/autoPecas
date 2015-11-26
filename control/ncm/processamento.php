<?php
$titulo = 'Cadastro de Ncm';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'controle.php';
    include_once '../../model/head.php';
    
    $conNcm = new Ncm();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/ncm.php';
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['codigo'])){
            $codigo = $_POST['codigo'];
            $descricao = $_POST['descricao'];
        }
        if (!empty($_GET['id_ncm'])){
            $id_ncm = $_GET['id_ncm'];
        }
    }
    switch ($action){
    case 'incluir':
        $conNcm->insert($codigo, $descricao);
        ?> 
        <script>
            alert("O ncm foi incluido com sucesso.");
            window.location.href = '../../view/ncm.php';
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conNcm->delete($id_ncm);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O ncm foi excluido com sucesso.");
                window.location.href = '../../view/ncm.php';
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir ncm, Informe linha 55.");
                window.location.href = '../../view/ncm.php';
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conNcm->update($id_ncm, $_GET['codigo'], $_GET['descricao']);
       ?> 
        <script>
            alert("O ncm foi salvo com sucesso.");
            window.location.href = '../../view/ncm.php';
        </script>
        <?php
        }
?>    
</html>   