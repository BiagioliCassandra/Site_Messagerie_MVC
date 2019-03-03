<form class="w-50 mx-auto my-5" method="POST" action="">
  <input type="hidden" class="form-control" name="id" value="<?php echo (isset($action)?$action["id"]:""); ?>">
  <div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Dupont" value="<?php echo (isset($action)?$action["name"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="place">Lieu : </label>
    <input type="text" class="form-control" name="place" id="place" value="<?php echo (isset($action)?$action["place"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="date">Date : </label>
    <input type="date" class="form-control" name="date" id="date" value="<?php echo (isset($action)?$action["date"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="hour">Heure : </label>
    <input type="time" class="form-control" name="hour" id="hour" value="<?php echo (isset($action)?$action["hour"]:""); ?>">
  </div>
  <button type="submit" name="action" value="<?php echo $buttonValue; ?>" class="btn btn-primary"><?php echo $buttonValue; ?></button>
</form>