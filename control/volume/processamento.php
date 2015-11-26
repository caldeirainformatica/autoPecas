<?php
$titulo = 'Cadastro de Volume';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'controle.php';
    include_once '../../model/head.php';
    
    $conVolume = new Volume();
    
    if (!isset($_GET['action'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/volume.php';
        </script>
       <?php 
    }else{
        $action = $_GET['action'];
        if (isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
        }
        if (!empty($_GET['id_volume'])){
            $id_volume = $_GET['id_volume'];
        }
    }
    switch ($action){
    case 'incluir':
        $conVolume->insert($descricao);
        ?> 
        <script>
            alert("O volume foi incluido com sucesso.");
            window.location.href = '../../view/volume.php';
        </script>
        <?php
        break;
    case 'delete':
        $retorno = $conVolume->delete($id_volume);
        if ($retorno == 1){
        ?> 
            <script>
                alert("O volume foi excluido com sucesso.");
                window.location.href = '../../view/volume.php';
            </script>
        <?php
        }else
        {
        ?> 
            <script>
                alert("Erro ao excluir volume, Informe linha 55.");
                window.location.href = '../../view/volume.php';
            </script>
        <?php
        }
        break;
    case 'update':
       $retorno = $conVolume->update($id_volume, $_GET['descricao']);
       ?> 
        <script>
            alert("O volume foi salvo com sucesso.");
            window.location.href = '../../view/volume.php';
        </script>
        <?php
        }
?>
                
    
        
</html>   