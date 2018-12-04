<?php 
include("template/header.php");
?>
<section>
    <h2>Liste des bénévoles</h2>
    <ul class="list-group list-group-flush">
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
        </li>
    </ul>
    <?php 
    }
    ?>
</section>
<?php 
include("template/footer.php");
?>