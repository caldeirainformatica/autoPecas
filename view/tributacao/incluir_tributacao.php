
<form  id="form_incluir_tributacao"  class="" action="../../control/ConTributacao.php?acao=novo" method="post">
<div class="col-lg-6">
    <label for="tributacao">Tributação:</label><input type="number" name="tributacao" id="tributacao" class="form-control"><br>
     <label for="descricao">Descrição:</label><input  name="descricao" id="descricao" class="form-control"><br>
     <label for="icms">ICMS:</label><input name="icms" type="number" id="icms"  class="form-control"><br>
  </div>
<div class="col-lg-6">
     <label for="iss">ISS:</label><input name="iss" id="iss" type="number"  class="form-control"><br>
     <label for="cfopdentro">CFOP Dentro UF:</label><input name="cfopdentro" type="number" id="cfopdentro" class="form-control"><br>
     <label for="cfopfora">CFOP Fora UF:</label><input name="cfopfora" type="number"  id="cfopfora" class="form-control"><br>
      <button type="submit"  class="btn btn-success">Incluir <span class="glyphicon glyphicon-saved"></span></button>  
  
</div>
 </form>