<?php 
$headerTitle = "Ajout d'un évènement";
$headerContent = "Le formulaire d'ajout des actions de l'association";
include("template/header.php");
?>
<section>
    <h2 class="text-center">Formulaire d'ajout d'un évènement<h2>
</section>
<?php
require("form/actionForm.php");
include("template/footer.php");
?>