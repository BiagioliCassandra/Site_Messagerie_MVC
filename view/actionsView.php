<!--The page that lists all the actions of the association-->
<?php 
$headerTitle = "Liste des actions";
$headerContent = "La liste des actions entreprises par les bénévoles de l'association";
include("template/header.php");
//I retrieve all actions in database
$actions = getActions();
?>
<section>
    <h2 class="text-center">Liste des évènements</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-primary w-20 text-center" href="actions/add">Ajouter un évènement</a>
        <a class="btn btn-primary w-20 text-center" href="volunteers">Voir les bénévoles</a>
    </div>
    <!--Creating a tablet for posters to actions-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Lieu</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        //Loop that displays the actions in the table according to the contents of the database
        foreach($actions as $key => $action) {
        ?>
            <tr>
                <th scope="row"><?php echo $action["name"]; ?></th>
                <td><?php echo $action["place"]; ?></td>
                <td><?php echo $action["date"]; ?></td>
                <td><?php echo $action["hour"]; ?></td>
                <td>
                <a class="btn btn-primary" href="actions/update?id=<?php echo $action["id"]; ?>">Modifier</a>
                <a class="btn btn-primary" href="actions/delete?id=<?php echo $action["id"]; ?>">Supprimer</a>
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