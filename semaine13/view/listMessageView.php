<?php
include "view/template/header.php";
?>

<h2>Bonjour <?php echo $_SESSION["user"]["pseudo"]; ?></h2>
<p>Voici vos derniers messages reçus</p>
<a <?php setHref("message/new")?> class="btn btn-success">Ecrire un message</a>

<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">De</th>
      <th scope="col">Object</th>
      <th scope="col">Contenu</th>
      <th scope="col">Envoyé le</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($messages as $key => $message) {
    ?>
    <tr>
      <td><?php echo $message["pseudo"]; ?></td>
      <td><?php echo $message["object"]; ?></td>
      <td><?php echo substr($message["content"], 0, 50) . "..."; ?></td>
      <td><?php echo $message["date"]; ?></td>
      <td>
        <a href="user/remove?id=<?php echo $message["id"]?>" class="btn btn-danger">Supprimer</a>
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
