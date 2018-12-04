<form class="w-50 mx-auto my-5" method="POST" action="controller.php?&action=addVolunteer">
  <div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Dupont">
  </div>
  <div class="form-group">
    <label for="firstname">Prénom : </label>
    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Juliette">
  </div>
  <div class="form-group">
    <label for="age">Age : </label>
    <input type="number" class="form-control" name="age" id="age" placeholder="21">
  </div>
  <div class="form-group">
    <label for="street">Rue : </label>
    <input type="text" class="form-control" name="street" id="street" placeholder="6 rue du code">
  </div>
  <div class="form-group">
    <label for="city">Ville : </label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Roubaix">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Disponibilité</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Disponible</option>
      <option>Indisponible</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>