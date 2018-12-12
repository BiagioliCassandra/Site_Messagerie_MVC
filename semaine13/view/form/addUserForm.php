<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserForm">
  Ajouter un esclave
</button>

<!-- Modal -->
<div class="modal fade" id="addUserForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajoutez votre larbin ici ;)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" <?php setAction("user/new"); ?> method="post">
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="lastName">
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="firstName">
          </div>
          <div class="form-group">
            <label>Pseudo (attention unique)</label>
            <input type="text" class="form-control" name="pseudo">
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age">
          </div>
          <div class="form-group">
            <label>Commentaire sur le larbin</label>
            <textarea name="comment" class="w-100"></textarea>
          </div>
          <div class="form-group">
            <label>Disponibilité</label>
            <select class="form-control" name="available">
              <option value="1" selected>Disponible</option>
              <option value="0">Indisponible</option>
            </select>
          </div>
          <div class="form-group">
            <label>Ville</label>
            <input type="text" class="form-control" name="city">
          </div>
          <div class="form-group">
            <label>Rue</label>
            <input type="text" class="form-control" name="street">
          </div>
          <div class="form-group">
            <label>Mot de passe</label>
            <input type="text" class="form-control" name="password">
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-success">Enregistrer</button>
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
