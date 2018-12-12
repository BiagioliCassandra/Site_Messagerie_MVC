<form class="w-50 mx-auto my-5" method="POST" action="">
  <input type="hidden" class="form-control" name="id" value="<?php echo (isset($volunteer)?$volunteer["id"]:""); ?>">
  <div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Dupont" value="<?php echo (isset($volunteer)?$volunteer["name"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="firstname">Prénom : </label>
    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Juliette" value="<?php echo (isset($volunteer)?$volunteer["firstname"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="age">Age : </label>
    <input type="number" class="form-control" name="age" id="age" placeholder="21" value="<?php echo (isset($volunteer)?$volunteer["age"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="street">Rue : </label>
    <input type="text" class="form-control" name="street" id="street" placeholder="6 rue du code" value="<?php echo (isset($volunteer)?$volunteer["street"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="city">Ville : </label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Roubaix" value="<?php echo (isset($volunteer)?$volunteer["city"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="email">Mail : </label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Dupont@gmail.com" value="<?php echo (isset($action)?$action["name"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe : </label>
    <input type="password" class="form-control" name="password" id="password" placeholder="***" value="<?php echo (isset($action)?$action["name"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="availability">Disponibilité</label>
    <select class="form-control" name="availability" id="availability" value="<?php echo (isset($volunteer)?$volunteer["availability"]:""); ?>">
      <option value="1" selected>Disponible</option>
      <option value="0">Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <label for="comment">Commentaire sur le bénévole</label>
    <textarea class="form-control" name="comment" id="comment" rows="3">
    <?php echo (isset($volunteer)?$volunteer["comment"]:""); ?>
    </textarea>
  </div>
  <button type="submit" name="action" value="<?php echo $buttonValue; ?>" class="btn btn-info"><?php echo $buttonValue; ?></button>
</form>