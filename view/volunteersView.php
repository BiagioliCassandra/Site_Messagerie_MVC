<?php 
include("template/header.php");
?>
<section>
    <h2 class="text-center">Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <a href="index.php?&action=volunteerAddView">Ajouter un bénévole</a>
    <a href="index.php?&action=viewActions">Voir les évènements</a>
    <?php 
    foreach($volunteers as $key => $volunteer) {
    ?>
        <li class="list-group-item">
        <?php 
        echo $volunteer["name"] . " " . $volunteer["firstname"] . " " . $volunteer["age"] . "<br>"
        . $volunteer["street"] . " " . $volunteer["city"] . "<br>"
        . $volunteer["availability"] . "<br>"
        . $volunteer["comment"];
        ?>
        <a href="model/volunteerAddView.php?id=<?php echo $volunteer["id"]; ?>&action=add">Modifier</a>
        <a href="<?php deleteVolunteer($db, $volunteer["id"]); ?>">Supprimer</a>
        </li>
    </ul>
    <?php 
    }
    ?>
</section>
<?php 
include("template/footer.php");
?>