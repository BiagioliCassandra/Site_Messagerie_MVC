<?php 
$headerTitle = "Liste des bénévoles";
$headerContent = "La liste des bénévoles de l'association";  
include("template/header.php");
$volunteers = getVolunteers($db);
?>
<section>
    <h2 class="text-center">Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-primary w-20 text-center" href="index.php?&action=addVolunteer">Ajouter un bénévole</a>
        <a class="btn btn-primary w-20 text-center" href="index.php?&action=viewActions">Voir les évènements</a>
    </div>
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
        foreach($volunteers as $key => $volunteer) {
        ?>
            <tr>
                <th scope="row"><?php echo $volunteer["name"]; ?></th>
                <td><?php echo $volunteer["firstname"]; ?></td>
                <td><?php echo $volunteer["age"]; ?></td>
                <td><?php echo $volunteer["street"] . " " . $volunteer["city"]; ?></td>
                <td><?php echo $volunteer["comment"]; ?></td>
                <td><?php echo $volunteer["availability"]; ?></td>
                <td>
                <a class="btn btn-primary" href="index.php?id=<?php echo $volunteer["id"]; ?>&action=updateVolunteer">Modifier</a>
                <a class="btn btn-primary" href="index.php?id=<?php echo $volunteer["id"]; ?>&action=deleteVolunteer">Supprimer</a>
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