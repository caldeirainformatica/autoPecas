<?php
$titulo = 'enquadramento';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'ConEnquadramento.php';
    include_once '../../model/head.php';
    
    $conEnquadramento = new ConEnquadramento();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/enquadramento.php'
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
        }
        if (!empty($_GET['idenquadramento'])){
            $idenquadramento = $_GET['idenquadramento'];
        }
    }
    switch ($action){
    case 'incluir':
        $conEnquadramento->insert($descricao);
        ?> 
        <script>
            alert("O enquadramento foi incluido com sucesso.");
            window.location.href = '../../view/enquadramento.php'
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conEnquadramento->delete($idenquadramento);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O enquadramento foi excluido com sucesso.");
                window.location.href = '../../view/enquadramento.php'
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir enquadramento, Informe linha 55.");
                window.location.href = '../../view/enquadramento.php'
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conEnquadramento->update($idenquadramento, $_GET['descricao']);
       ?> 
        <script>
            alert("O enquadramento foi salvo com sucesso.");
            window.location.href = '../../view/enquadramento.php'
        </script>
        <?php
        
    }
?>
                
    
        
</html>   