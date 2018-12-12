<?php 
$headerTitle = "Liste des actions";
$headerContent = "La liste des actions entreprises par les bénévoles de l'association";
include("template/header.php");
$actions = getActions($db);
?>
<section>
    <h2 class="text-center">Liste des évènements</h2>
    <ul class="list-group list-group-flush">
    <div class="text-center my-4">
        <a class="btn btn-info w-20 text-center" href="index.php?&action=addAction">Ajouter un évènement</a>
        <a class="btn btn-info w-20 text-center" href="index.php?&action=viewVolunteers">Voir les bénévoles</a>
    </div>
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
        foreach($actions as $key => $action) {
        ?>
            <tr>
                <th scope="row"><?php echo $action["name"]; ?></th>
                <td><?php echo $action["place"]; ?></td>
                <td><?php echo $action["date"]; ?></td>
                <td><?php echo $action["hour"]; ?></td>
                <td>
                <a class="btn btn-info" href="index.php?id=<?php echo $action["id"]; ?>&action=updateAction">Modifier</a>
                <a class="btn btn-info" href="index.php?id=<?php echo $action["id"]; ?>&action=deleteAction">Supprimer</a>
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