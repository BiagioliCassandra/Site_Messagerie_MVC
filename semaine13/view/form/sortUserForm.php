<form class="form-inline my-3" <?php setAction("user/sort"); ?> method="post">
  <div class="form-group mr-4">
    <label class="mr-2">Trier par</label>
    <select class="form-control" name="sort">
      <option value="id">Identifiant</option>
      <option value="lastName">Nom</option>
      <option value="firstName">Prénom</option>
      <option value="age">Age</option>
    </select>
  </div>
  <div class="form-group mr-4">
    <label class="mr-2">Ville de résidence</label>
    <input type="text" class="form-control" name="city">
  </div>
  <div class="form-group mr-4">
    <label class="mr-2">Disponibilité</label>
    <select class="form-control" name="available">
      <option disabled selected value>choisir</option>
      <option value="1">Disponible</option>
      <option value="0">Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success">Trier</button>
  </div>
</form>
