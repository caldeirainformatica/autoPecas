<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/control/ConSubgrupo.php';
    $conSubgrupo = new ConSubgrupo();
    $listaSubgrupos = $conSubgrupo->listarGrupos();
    $id = $_GET['id'];
    $subgrupo = current($conSubgrupo->listarSubgrupoPorId($id));
?>
<form  id="form_incluir_subgrupo"   action="../../control/ConSubgrupo.php?acao=alterar&id=<?php echo $subgrupo['id_subgrupo']?>" method="post">
<div class="col-lg-6">
    <label for="descricao">Descrição:</label><input value="<?php echo $subgrupo['descricao']?>" name="descricao" id="descricao" class="form-control"><br>
     <label for="grupo">Grupo:</label>
    
</div>
<div class="col-lg-6">
    <select required="required"  name="grupo"  class=" form-control"id="grupo" required="required">
        <option value="<?php echo $subgrupo['grupo_id_grupo']?>">Selecione</option>
        <?php foreach ($listaSubgrupos as $grupos) {?>
          <option value="<?php echo $grupos['id_grupo']?>"><?php echo $grupos['descricao']?></option>
       <?php } ?>
    </select> 
    <br> 
</div>
    <button type="submit"  class="btn btn-success">Incluir <span class="glyphicon glyphicon-saved"></span></button> 
 </form>
