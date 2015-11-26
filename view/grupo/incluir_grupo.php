    <div id="incluir_grupo" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h1 class="modal-title">Incluir Grupos</h1>
                 </div>
                    <div class="modal-body ">
              <form  action="../../control/ConGrupo.php?acao=novo" method="post">
 
                      <label for="descricao">Descrição:</label><input name="descricao" id="descricao" class="form-control"><br>

                    <button type="submit"  class="btn btn-success">Salvar <span class="glyphicon glyphicon-saved"></span></button>  
              </form>
                 <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                 </div>
              </div>

            </div>
        </div>
    </div>     
      <!--    Fim da Modal    -->
