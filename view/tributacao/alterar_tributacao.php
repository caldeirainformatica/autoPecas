<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/control/ConTributacao.php';
    $conTributacao = new ConTributacao();
    $id = $_GET['id'];
    $listaTributacao = current($conTributacao->listarTributacaoPorId($id));
?>

<form  id="form_alterar_tributacao"  class="" action="../../control/ConTributacao.php?id=<?php echo $listaTributacao['id_tributacao']?>&acao=alterar" method="post">
<div class="col-lg-6">
     <label for="tributacao">Tributação:</label><input  value="<?php  echo $listaTributacao['tributacao']?>"name="tributacao" id="tributacao" class="form-control"><br>
     <label for="descricao">Descrição:</label><input value="<?php echo $listaTributacao['descricao']?>" name="descricao" id="descricao" class="form-control"><br>
     <label for="icms">ICMS:</label><input name="icms" id="icms" value="<?php echo $listaTributacao['icms']?>" class="form-control"><br>
  </div>
<div class="col-lg-6">
     <label for="iss">ISS:</label><input name="iss" id="iss" value="<?php echo $listaTributacao['iss']?>" class="form-control"><br>
     <label for="cfopdentro">CFOP Dentro UF:</label><input name="cfopdentro" value="<?php echo $listaTributacao['cfop_dentro_uf']?>" id="cfopdentro" class="form-control"><br>
     <label for="cfopfora">CFOP Fora UF:</label><input name="cfopfora" value="<?php echo $listaTributacao['cfop_fora_uf']?>" id="cfopfora" class="form-control"><br>
      <button type="submit"  class="btn btn-success">Alterar <span class="glyphicon glyphicon-saved"></span></button>  
  
</div>
 </form>
