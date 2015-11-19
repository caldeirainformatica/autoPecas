<?php
$titulo = 'Cadastro de Bairro';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'controle.php';
    include_once '../../model/head.php';
    
    $conBairro = new Bairro();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/bairro.php'
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['bairro'])){
            $bairro = $_POST['bairro'];
        }
        if (!empty($_GET['idBairro'])){
            $idBairro = $_GET['idBairro'];
        }
    }
    switch ($action){
    case 'incluir':
        $conBairro->insert($bairro);
        ?> 
        <script>
            alert("O bairro foi incluido com sucesso.");
            window.location.href = '../../view/bairro.php'
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conBairro->delete($idBairro);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O bairro foi excluido com sucesso.");
                window.location.href = '../../view/bairro.php'
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir bairro, Informe linha 55.");
                window.location.href = '../../view/bairro.php'
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conBairro->update($idBairro, $_GET['bairro']);
       ?> 
        <script>
            alert("O bairro foi salvo com sucesso.");
            window.location.href = '../../view/bairro.php'
        </script>
        <?php
        }
?>
                
    
        
</html>   