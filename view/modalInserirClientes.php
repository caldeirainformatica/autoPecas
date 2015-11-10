<!-- Modal -->
    <div id="modalinserircliente" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1 class="modal-title">Inserir Clientes</h1>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" action="" method="">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                      <legend class="">Tipo de pessoa:</legend>
                      <label class="radio-inline"><input type="radio" name="tipopessoa" id="radiofisica" value="fisica">Física</label>
                      <label class="radio-inline"><input type="radio" name="tipopessoa" id="radiojuridica" value="juridica">Jurídica</label>
                      <div id="dadostipo"></div>
                  </fieldset>
                  <br>
                  <fieldset>
                      <legend>Dados de localização</legend>
                      <select name="uf" id="uf" required="required">
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
                      <label for="logradouro">Logradouro:</label><input name="logradouro" id="logradouro" class="input input-sm"><br>
                      <label for="numero">Número:</label><input name="numero" id="numero" class="input input-sm"><br>
                      <label for="complemento">Complemento:</label><input name="complemento" id="complemento" class="input input-sm"><br>
                      <label for="cep"></label>CEP:<input name="cep" id="cep" class="input input-sm"><br>  
                      <label for="cidade">Cidade:</label><input name="cidade" id="cidade" class="input input-sm">
                  </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                  <fieldset>
                      <legend>Contato</legend>
                      <label for="tel">Celular:</label><input name="celular" id="tel" class="input input-sm"><br>
                      <label for="telfixo">Telefone Fixo</label><input name="telfixo" id="tel" class="input input-sm"><br>
                      <label for="email">Email:</label><input name="email" id="email" class="input input-sm"><br>
                      <label for="contato">Contato:</label><input name="contato" id="contato" class="input input-sm"><br>
                  </fieldset>
                  <fieldset>
                      <legend>Observação:</legend>
                      <textarea class="input-sm" name="observacao" rows="4" cols="50"></textarea> 
                  </fieldset>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>  
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>

      </div>
    </div>
    <!--    Fim da Modal    -->