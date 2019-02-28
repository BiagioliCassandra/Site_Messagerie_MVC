<!--The add actions page of the association-->
<?php 
$headerTitle = "Ajout d'un évènement";
$headerContent = "Le formulaire d'ajout des actions de l'association";
include("template/header.php");
?>
<section>
    <h2 class="text-center">Formulaire d'ajout d'un évènement<h2>
    <a class="btn btn-info w-20 text-center" href="actions">Retour</a>
</section>
<?php
require("form/actionForm.php");
include("template/footer.php");
?>