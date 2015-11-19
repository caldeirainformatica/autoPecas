<?php
$titulo = 'Cadastro de Cidade';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'ConCidade.php';
    include_once '../../model/head.php';
    
    $conCidade = new ConCidade();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/cidade.php'
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['cidade'])){
            $cidade = $_POST['cidade'];
        }
        if (!empty($_GET['idCidade'])){
            $idCidade = $_GET['idCidade'];
        }
    }
    switch ($action){
    case 'incluir':
        $conCidade->insert($cidade);
        ?> 
        <script>
            alert("O cidade foi incluido com sucesso.");
            window.location.href = '../../view/cidade.php'
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conCidade->delete($idCidade);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O cidade foi excluido com sucesso.");
                window.location.href = '../../view/cidade.php'
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir cidade, Informe linha 55.");
                window.location.href = '../../view/cidade.php'
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conCidade->update($idCidade, $_GET['cidade']);
       ?> 
        <script>
            alert("O cidade foi salvo com sucesso.");
            window.location.href = '../../view/cidade.php'
        </script>
        <?php
        }
?>
                
    
        
</html>   