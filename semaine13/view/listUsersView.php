<?php
include "view/template/header.php";
include "view/form/addUserForm.php";
include "view/form/sortUserForm.php";
?>
<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Adress</th>
      <th scope="col">Disponibilité</th>
      <th scope="col">Commentaire</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $key => $user) {
    ?>
    <tr>
      <th scope="row"><?php echo $user["id"] ?></th>
      <td><?php echo $user["firstName"] ?></td>
      <td><?php echo $user["lastName"] ?></td>
      <td><?php echo $user["age"] ?></td>
      <td> <?php echo $user["street"] . ", " . $user["city"] ?></td>
      <td><?php echo $user["available"] ?></td>
      <td><?php echo $user["comment"] ?></td>
      <td>
        <a href="user/remove?id=<?php echo $user["id"]?>" class="btn btn-danger">Supprimer</a>
        <a href="user/modify?id=<?php echo $user["id"]?>" class="btn btn-warning">Modifier</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>



<?php
include "view/template/footer.php"
?>
