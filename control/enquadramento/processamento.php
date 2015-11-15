<?php
$titulo = 'enquadramento';

/* 
 * @autor Ricardo Caldeira
 * 
 */
    include_once 'ConEnquadramento.php';
    include_once '../../model/head.php';
    
    $conEnquadramento = new Enquadramento();
    
    if (!isset($_GET['acao'])){
        ?>
        <script>
            alert('Erro ao capturar evento, não foi possível identificar a ação');
            window.location.href = '../../view/enquadramento.php'
        </script>
       <?php 
    }else{
        $acao = $_GET['acao'];
        $descricao = $_POST['descricao'];
        $idenquadramento = $_POST['idenquadramento'];
    }
    switch ($acao){
    case 'incluir':
        echo ok;
        break;
    }
?>
    <body>
        
    </body>
</html>