<form class="w-75 m-auto" action="" method="post">
  <input type="hidden" name="id" <?php echo "value=" . $user["id"]; ?>>
  <div class="form-group">
    <label>Nom</label>
    <input type="text" class="form-control" name="lastName" <?php echo "value=" . $user["lastName"]; ?>>
  </div>
  <div class="form-group">
    <label>Prénom</label>
    <input type="text" class="form-control" name="firstName" <?php echo "value=" . $user["firstName"]; ?>>
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" class="form-control" name="age" <?php echo "value=" . $user["age"]; ?>>
  </div>
  <div class="form-group">
    <label>Commentaire sur le larbin</label>
    <textarea name="comment" class="w-100"><?php echo $user["comment"]; ?></textarea>
  </div>
  <div class="form-group">
    <label>Disponibilité</label>
    <select class="form-control" name="available">
      <option value="1" <?php if($user["available"] === "1"){ echo "selected";} ?>>Disponible</option>
      <option value="0" <?php if($user["available"] === "0"){ echo "selected";} ?>>Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <label>Ville</label>
    <input type="text" class="form-control" name="city" <?php echo "value=" . $user["city"]; ?>>
  </div>
  <div class="form-group">
    <label>Rue</label>
    <input type="text" class="form-control" name="street" <?php echo "value=" . $user["street"]; ?>>
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success">Enregistrer</button>
  </div>
</form>
