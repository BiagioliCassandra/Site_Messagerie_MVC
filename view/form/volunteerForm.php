<form class="w-50 mx-auto my-5" method="POST" action="index.php?&action=addVolunteer">
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
    <label for="availability">Disponibilité</label>
    <select class="form-control" name="availability" id="availability">
      <option value="0" selected>Disponible</option>
      <option value="1">Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comment">Commentaire sur le bénévole</label>
    <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>