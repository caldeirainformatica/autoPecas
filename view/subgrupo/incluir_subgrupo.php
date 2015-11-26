<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConSubgrupo.php';
    $conSubgrupo = new ConSubgrupo();
    $listaSubgrupos = $conSubgrupo->listarGrupos();
?>
    <form  id="form_incluir_subgrupo"   action="../../control/ConSubgrupo.php?acao=novo" method="post">
     <label for="descricao">Descrição:</label><input  name="descricao" id="descricao" class="form-control"><br>
     <label for="grupo">Grupo:</label>
    <select required="required" name="grupo"  class=" form-control"id="grupo" required="required">
        <option value="">Selecione</option>
        <?php foreach ($listaSubgrupos as $grupos) {?>
          <option value="<?php echo $grupos['id_grupo']?>"><?php echo $grupos['descricao']?></option>
       <?php } ?>
    </select> 
    <br> 
        <button type="submit"  class="btn btn-success">Incluir <span class="glyphicon glyphicon-saved"></span></button> 
 </form>

