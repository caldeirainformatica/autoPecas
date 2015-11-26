
<!-- Modal -->
    <div id="modalalterarcliente" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 class="modal-title">Editar Cadastro de Cliente</h1>
          </div>
          <div class="modal-body ">
              <form id="form_editar_cliente" action="" method="post">

                  <div class="col-md-6 col-lg-6">  
                      <input  type="hidden" name="id" id="divid"></input>      
                  <fieldset>
                      
                      <legend>Tipo de pessoa:</legend>
     
                      <div id="dadostipo">

                      </div>
                  </fieldset>
                  <fieldset>
                      <legend>Dados de localização</legend>
                      <select name="uf" class=" form-control"id="uf" required="required">
                            <label>Informe UF:</label>
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                    </select>
                          <br>
                      <label for="logradouro">Logradouro:</label><input name="logradouro" id="logradouro" class="form-control"><br>
                      <label for="numero">Número:</label><input name="numero" id="numero" class=" form-control"><br>
                      <label for="complemento">Complemento:</label><input name="complemento" id="complemento" class=" form-control"><br>
                      <label for="cep">CEP:</label><input name="cep" id="cep" class=" form-control"><br>  
                       <label for="cep">Bairro:</label><input name="bairro" id="bairro" class=" form-control"><br>  
                      <label for="cidade">Cidade:</label><input name="cidade" id="cidade" class=" form-control">
                  </fieldset>
                </div>
                   <!--  fim form-group1    -->
                   <!--inicio form-group2-->
<!--                  <div class="form-group">-->
                <div class="col-md-6 col-lg-6">
                  <fieldset>
                      <legend>Contato</legend>
                      <label for="tel">Celular:</label><input name="celular" id="celular" class="tel form-control"><br>
                      <label for="tel">Telefone Fixo</label><input name="fixo" id="telfixo" class="tel form-control"><br>
                      <label for="email">Email:</label><input name="email" id="email" class=" form-control"><br>
                      <label for="contato">Contato:</label><input name="contato" id="contato" class=" form-control"><br>
                  </fieldset>
                  <fieldset>
                      <legend>Observação:</legend>
                      <textarea class="form-control" name="observacao" id="observacao" rows="4" cols="50"></textarea> 
                  </fieldset>
                    <br>
                    <button type="submit"  class="btn-enviar btn btn-success">Completar edição <span class="glyphicon glyphicon-saved"></span></button>  
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