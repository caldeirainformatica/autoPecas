<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/control/ConEmpresa.php';
    $con = new ConEmpresa();
    $listaEnquadramento = $con->listarEnquadramentos();
?>
<form  id="form_incluir_empresa"  class="" action="../../control/ConEmpresa.php?acao=novo" method="post" >
<div class="col-lg-6">
    <label for="tributacao">Razão Social:</label><input type="text" name="razao" id="razao" class="form-control"><br>
    <label for="descricao">Nome Fantasia:</label><input  name="fantasia" id="fantasia" class="form-control"><br>
    <label for="cnpj">CNPJ:</label><input name="cnpj" type="text" id="cnpj"  class="form-control"><br>
    <label for="cnae">CNAE:</label><input name="cnae" type="text" id="cnae"  class="form-control"><br>
    <label for="ie">Inscrição Estadual:</label><input name="ie" type="number" id="ie"  class="form-control"><br>
    <label for="logradouro">Logradouro:</label><input name="logradouro" type="text" id="logradouro"  class="form-control"><br>
    <label for="num">Num:</label><input name="num" type="text" id="num"  class="form-control"><br>
    <label for="complemento">Complemento:</label><input name="complemento" type="text" id="complemento"  class="form-control"><br>
    <label for="logo">Logo:</label><input name="logo" type="text" id="logo"  class="form-control"><br>
    
  </div>
<div class="col-lg-6">
    <label for="uf">UF:</label><input name="uf" id="uf" type="text"  class="form-control"><br>
    <label for="cidade">Cidade:</label><input name="cidade" type="text" id="cidade" class="form-control"><br>
    <label for="bairro">Bairro:</label><input name="bairro" type="text"  id="bairro" class="form-control"><br>
    <label for="enquadramento">Enquadramento:</label>
        <select name="enquadramento" type="text"  id="enquadramento" class="form-control">
            <?php foreach ($listaEnquadramento as $lista) {?>
              <option value="<?php echo $lista['id_enquadramento']?>"><?php echo $lista['descricao']?></option>
           <?php } ?>
        </select>
    <br>
      <button type="submit"  class="btn btn-success">Incluir <span class="glyphicon glyphicon-saved"></span></button>  
  
</div>
 </form>