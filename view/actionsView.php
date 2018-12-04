<?php 
include("template/header.php");
?>
<section>
    <h2>Liste des évènements</h2>
    <ul class="list-group list-group-flush">
    <a href="index.php?&action=actionAddView">Ajouter un évènement</a>
    <?php 
    foreach($actions as $key => $action) {
    ?>
        <li class="list-group-item">
        <?php echo $action["name"] . " " . $action["date"] . " " . $action["hour"] . "<br>" 
        . $action["place"]; 
        ?>
        <a class="btn" href="">Modifier</a>
        <a class="btn" href="index.php?id=<?php echo $action["id"]; ?>&action=delete">Supprimer</a>
        </li>
    </ul>
    <?php 
    }
    ?>
</section>
<?php 
include("template/footer.php");
?>