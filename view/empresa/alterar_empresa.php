<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/control/ConEmpresa.php';
    $con = new ConEmpresa();
    $id = $_GET['id'];
    $listaEmpresa = current($con->listarEmpresaPorId($id));
    $listaEnquadramento = $con->listarEnquadramentos();
    print_r($listaEmpresa);
?>
<form  id="form_alterar_empresa"  class="" action="../../control/ConEmpresa.php?acao=alterar" method="post" >
<div class="col-lg-6">
    <input  value="<?php echo $id?>" name="id" type="hidden">
    <label for="tributacao">Razão Social:</label><input value="<?php echo $listaEmpresa['razao']?>" type="text" name="razao" id="razao" class="form-control"><br>
    <label for="descricao">Nome Fantasia:</label><input value="<?php echo $listaEmpresa['fantasia']?>" name="fantasia" id="fantasia" class="form-control"><br>
    <label for="cnpj">CNPJ:</label><input name="cnpj" type="text" value="<?php echo $listaEmpresa['cnpj']?>" id="cnpj"  class="form-control"><br>
    <label for="cnae">CNAE:</label><input name="cnae" type="text" value="<?php echo $listaEmpresa['cnae']?>" id="cnae"  class="form-control"><br>
    <label for="ie">Inscrição Estadual:</label><input name="ie" type="number" value="<?php echo $listaEmpresa['inscricaoEstadual']?>" id="ie"  class="form-control"><br>
    <label for="logradouro">Logradouro:</label><input name="logradouro" type="text" value="<?php echo $listaEmpresa['logradouro']?>" id="logradouro"  class="form-control"><br>
    <label for="num">Num:</label><input name="num" type="text" value="<?php echo $listaEmpresa['num']?>" id="num"  class="form-control"><br>
    <label for="complemento">Complemento:</label><input name="complemento" type="text" value="<?php echo $listaEmpresa['complemento']?>" id="complemento"  class="form-control"><br>
    <label for="logo">Logo:</label><input name="logo" type="text" value="<?php echo $listaEmpresa['logo']?>" id="logo"  class="form-control"><br>
    
  </div>
<div class="col-lg-6">
    <label for="uf">UF:</label><input name="uf" id="uf" type="text" value="<?php echo $listaEmpresa['uf']?>" class="form-control"><br>
    <label for="cidade">Cidade:</label><input name="cidade" type="text" value="<?php echo $listaEmpresa['cidade']?>" id="cidade" class="form-control"><br>
    <label for="bairro">Bairro:</label><input name="bairro" type="text" value="<?php echo $listaEmpresa['bairro']?>" id="bairro" class="form-control"><br>
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