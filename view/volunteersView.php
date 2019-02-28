<!--The page that lists all the volunteers of the association-->
<?php 
$headerTitle = "Liste des bénévoles";
$headerContent = "La liste des bénévoles de l'association";  
include("template/header.php");
include("form/sortForm.php");

//Retrieve all the volunteers found in the database
$volunteers = getVolunteers();
?>
<section>
    <h2 class="text-center">Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-info" href="messages">Voir ses messages</a>
        <a class="btn btn-info w-20 text-center" href="volunteers/add">Ajouter un bénévole</a>
        <a class="btn btn-info w-20 text-center" href="actions">Voir les évènements</a>
        <a <?php setHref("logout");  ?> class="btn btn-danger mt-5 mb-5">Se deconnecter</a>
    </div>
    <!--Creating a tablet for posters to volunteers-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
                <th scope="col">Rue et Ville</th>
                <th scope="col">Commentaire</th>
                <th scope="col">Disponibilité</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Loop that displays the volunteers in the table according to the contents of the database
        foreach($volunteers as $key => $volunteer) {
        ?>
            <tr>
                <th scope="row"><?php echo $volunteer["name"]; ?></th>
                <td><?php echo $volunteer["firstname"]; ?></td>
                <td><?php echo $volunteer["age"]; ?></td>
                <td><?php echo $volunteer["street"] . " " . $volunteer["city"]; ?></td>
                <td><?php echo $volunteer["comment"]; ?></td>
                <!--Function that can display available or unavailable instead of 0 or 1-->
                <td><?php showAvailability($volunteer) ?></td>
                <td>
                <a class="btn btn-info" href="volunteers/update?id=<?php echo $volunteer["id"]; ?>">Modifier</a>
                <a class="btn btn-info" href="volunteers/delete?id=<?php echo $volunteer["id"]; ?>">Supprimer</a>
                </td>
            </tr>
        <?php 
        //End loop
        }
        ?>
        </tbody>
    </table> 
</section>
<?php 
include("template/footer.php");
?>