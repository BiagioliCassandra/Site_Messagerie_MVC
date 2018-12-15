<?php 
$headerTitle = "Liste des messages";
$headerContent = "La liste des messages de l'utilisateur";  
include("template/header.php");
session_start();
$userID = $_SESSION["user"]["id"]; 
$messages = getMessages($userID);
?>
<section>
    <h2 class="text-center">Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-info w-20 text-center" href="messages/add?id=<?php echo $userID; ?>">Ajouter un message</a>
        <a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5">Se deconnecter</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom envoyeur</th>
                <th scope="col">Object</th>
                <th scope="col">Contenu</th>
                <th scope="col">Date et heure</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach($messages as $key => $message) {
        ?>
            <tr>
                <th scope="row"><?php echo $message["pseudo"]; ?></th>
                <td><?php echo $message["object"]; ?></td>
                <td><?php echo $message["contents"]; ?></td>
                <td><?php echo $message["date"]; ?></td>
                <td>
                <a class="btn btn-info" href="messages/delete?id=<?php echo $message["id"]; ?>">Supprimer</a>
                </td>
            </tr>
        <?php 
        }
        ?>
        </tbody>
    </table> 
</section>
<?php
include("template/footer.php");
?>