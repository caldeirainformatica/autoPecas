<html>
    <head>
        <meta charset="utf-8">
        <title>Página Inicial</title>
             <?php include $_SERVER['DOCUMENT_ROOT'].'/autoPecas/view/head.php'; ?>  
        <script>
            $("input").click(function(){
                $('#tel').mask('(99)9999-9999?9');
                $('#cpf').mask('999.999.999-99');
                $('#cnpj').mask('999.999.999/9999-99');
            });

        </script>      
               
    </head>
    <body>
     <?php include_once 'menuindex.php'; ?> 
    <hr>
    <br>         
           <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Página Inicial</h1>
      </div>
      
        
        
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/autoPecas/view/footer.php'; ?>        
    </body>
</html>        