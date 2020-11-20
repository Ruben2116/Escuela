<?php include'layouts/head.php'; ?>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="resources/img/cuarto2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cuarto 1</h5>
      <p class="card-text">Habitación individual - una habitación para un huésped con una cama individual. Dependiendo de la categoría del hotel, la superficie habitable puede variar entre los 8 y los 14 metros cuadrados.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Disponible</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="resources/img/cuarto1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cuarto 2</h5>
      <p class="card-text">Habitación twin o doble con camas individuales - se trata de una habitación para 2 personas. Su principal característica es que tiene dos camas individuales. El término "doble" también es utilizado para las habitaciones para varias personas en las que hay un número mayor y par de camas individuales.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Disponible</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="resources/img/cuarto3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cuarto 3</h5>
      <p class="card-text">Habitación doble - también se trata de una habitación para dos personas, pero en este caso con una cama doble.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">No Disponible</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="resources/img/cuarto4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cuarto 4</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Disponible</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="resources/img/cuarto5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cuarto 5</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Disponible</small>
    </div>
  </div>
</div>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo Electronico</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccionar Cuaerto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Numero de Cuartos</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

<?php include'layouts/footer.php'; ?>
