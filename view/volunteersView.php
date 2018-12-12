<?php 
$headerTitle = "Liste des bénévoles";
$headerContent = "La liste des bénévoles de l'association";  
include("template/header.php");
$volunteers = getVolunteers();
?>
<section>
    <h2 class="text-center">Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-info w-20 text-center" href="volunteers/add">Ajouter un bénévole</a>
        <a class="btn btn-info w-20 text-center" href="actions">Voir les évènements</a>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nom/Age
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Nom(A-Z)</a>
            <a class="dropdown-item" href="#">Age(Ordre croissant)</a>
        </div>
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
                <td><?php showAvailability($volunteer) ?></td>
                <td>
                <a class="btn btn-info" href="volunteers/update?id=<?php echo $volunteer["id"]; ?>">Modifier</a>
                <a class="btn btn-info" href="volunteers/delete?id=<?php echo $volunteer["id"]; ?>">Supprimer</a>
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