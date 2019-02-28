<!--List of all messages received by the user-->
<?php 
$headerTitle = "Liste des messages";
$headerContent = "La liste des messages de l'utilisateur";  
include("template/header.php");

$userID = $_SESSION["user"]["id"]; 
//Retrieve all messages in the database according to the id of the logged in user
$messages = getMessages($userID);
?>
<section>
    <h2 class="text-center">Liste des messages</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-info w-20 text-center" href="messages/add?id=<?php echo $userID; ?>">Ajouter un message</a>
        <!--Displays the admin space button if the logged in user is an admin-->
        <?php if($_SESSION["user"]["status"] == "admin"){ echo "<a class='btn btn-info w-20 text-center' href='volunteers'>Retour espace Admin</a>"; } ?>
        <a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5">Se deconnecter</a>
    </div>
    <!--Creating a tablet for posters to messages of user-->
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