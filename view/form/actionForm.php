<form class="w-50 mx-auto my-5" method="POST" action="controller.php?&action=addAction">
  <div class="form-group">
    <label for="name">Nom : </label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Dupont">
  </div>
  <div class="form-group">
    <label for="place">Lieu : </label>
    <input type="text" class="form-control" name="place" id="place">
  </div>
  <div class="form-group">
    <label for="date">Date : </label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="form-group">
    <label for="hour">Heure : </label>
    <input type="time" class="form-control" name="hour" id="hour">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>