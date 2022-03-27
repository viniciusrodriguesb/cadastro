<main >
  <section class="container">
  <form action="./app/scripts/cadastra.php" method="POST" style="margin:200px;" class="row g-3 needs-validation mb-4 border border-5 col-9" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">EAN/GTIN</label>
    <input type="text" class="form-control" id="validationCustom01" value="" name="EAN_GTIN" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Descrição do Produto</label>
    <input type="text" class="form-control" id="validationCustom02" value="" name="descricao" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Marca</label>
    <input type="text" class="form-control" id="validationCustom02" value="" name="marca" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Categoria</label>
    <select class="form-select" id="validationCustom04" name= "categoria" required>
      <option selected disabled value="">Selecione</option>
      <option>Bebidas</option>
      <option>Congelados</option>
      <option>Frutas</option>
      <option>Legumes</option>
      <option>Biscoitos</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estoque</label>
    <select class="form-select" id="validationCustom04" name="estoque" required>
      <option selected disabled value="">Selecione</option>
      <option>10</option>
      <option>50</option>
      <option>100</option>
      <option>200</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Preço de Venda</label>
    <input type="text" class="form-control" id="validationCustom05" name="Preco_Venda" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Preço de Custo</label>
    <input type="text" class="form-control" id="validationCustom05" name="Preco_Custo" required>
  </div>
  <div class="col-md-2">
    <button class="btn btn-primary" type="submit">Adicionar</button>
  </div>
  <div class="col-md-2">
    <button class="btn btn-danger" type="submit">Remover</button>
  </div>
  <div class="col-md-2 mb-2">
    <button class="btn btn-secondary" type="submit">Editar</button>
  </div>
</form>
  </section>
</main>