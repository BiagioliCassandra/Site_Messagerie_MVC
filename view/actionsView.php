<?php 
include("template/header.php");
?>
<section>
    <h2>Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
    <?php 
    foreach($actions as $key => $action) {
    ?>
        <li class="list-group-item">
        <?php echo $action["name"] . " " . $volunteer["date"] . " " . $volunteer["hour"] . "<br>" 
        . $action["place"]; 
        ?>
        </li>
    </ul>
    <?php 
    }
    ?>
</section>
<?php 
include("template/footer.php");
?>