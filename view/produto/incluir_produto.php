<?php
    include_once '../../control/ConProduto.php';
    $conProduto = new ConProduto();
    $listaGrupos = $conProduto->listarGrupos();
    print_r($listaGrupos);
    
    $listaSubGrupos = $conProduto->listarSubGrupos();
    $listaNcm = $conProduto->listarNcm();
    $listaVolumes = $conProduto->listarVolumes();
    $listaGeneros = $conProduto->listarGeneros();
    $listaTributacao = $conProduto->listarTributacao();
?>
<!-- Modal -->
<script>
    $(function(){
        $('.tel').mask('(99)9999-9999?9');

    });
</script>
    <div id="incluir_produto" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 class="modal-title">Incluir Produtos</h1>
          </div>
          <div class="modal-body ">
              <form  action="../../control/ConProduto.php?acao=novo" method="post">

                  <div class="col-md-6 col-lg-6">    
                      <label for="gtim">Gtim:</label><input name="gtim" id="gtim" class="form-control"><br>
                      <label for="descricao">Descrição:</label><input name="descricao" id="descricao" class="form-control"><br>                             
                      <label for="grupo">Grupo:</label>
                      <select required="required" name="grupo"  class=" form-control"id="ncm" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaGrupos as $grupos) {?>
                            <option value="<?php echo $grupos['id_grupo']?>"><?php echo $grupos['descricao']?></option>
                         <?php } ?>
                      </select> 
                      <br>
                      <label for="subgrupo">Subgrupo:</label><select required="required" name="subgrupo"  class=" form-control"id="ncm" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaSubGrupos as $subGrupos) {?>
                            <option value="<?php echo $subGrupos['id_subgrupo']?>"><?php echo $subGrupos['descricao']?></option>
                         <?php } ?>
                      </select> <br>
                      <label for="ncm">NCM:</label><select required="required" name="ncm"  class=" form-control"id="ncm" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaNcm as $ncm) {?>
                            <option value="<?php echo $ncm['id_ncm']?>"><?php echo $ncm['descricao']?></option>
                         <?php } ?>
                      </select> <br>
                      <label for="volume">Volume:</label><select required="required" name="volume"  class=" form-control"id="ncm" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaVolumes as $volumes) {?>
                            <option value="<?php echo $volumes['id_volume']?>"><?php echo $volumes['descricao']?></option>
                         <?php } ?>
                      </select> <br>
                      <label for="genero">Gênero:</label><select required="required" name="genero"  class=" form-control"id="ncm" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaGeneros as $generos) {?>
                            <option value="<?php echo $generos['id_genero']?>"><?php echo $generos['descricao']?></option>
                         <?php } ?>
                      </select> <br>
                </div>
                   <!--  fim form-group1    -->
                   <!--inicio form-group2-->
<!--                  <div class="form-group">-->
                <div class="col-md-6 col-lg-6">

                      <label for="tel">Tributação:</label><select required="required" name="tributacao"  class=" form-control"id="tributacao" required="required">
                          <option value="">Selecione</option>
                          <?php foreach ($listaTributacao as $tributacao) {?>
                            <option value="<?php echo $tributacao['id_tributacao']?>"><?php echo $tributacao['descricao']?></option>
                         <?php } ?>
                      </select> <br>
                  <fieldset>
                      <legend>Observação:</legend>
                      <textarea class="form-control" name="observacao" rows="4" cols="50"></textarea> 
                  </fieldset>
                    <br>
                    <button type="submit"  class="btn btn-success">Salvar <span class="glyphicon glyphicon-saved"></span></button>  
                </div>
                
              </form>
                   
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>

      </div>
    </div>
    </div>     
      <!--    Fim da Modal    -->