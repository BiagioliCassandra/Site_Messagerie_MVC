<!--The add volunteers page of the association-->
<?php 
$headerTitle = "Ajout d'un bénévole";
$headerContent = "Le formulaire d'ajout d'un bénévole de l'association";
include("template/header.php");
?>
<section class="text-center">
    <h2>Formulaire d'ajout d'un bénévole<h2>
    <a class="btn btn-primary" href="../volunteers">Retour</a>
</section>
<?php
require("form/volunteerForm.php");
include("template/footer.php");
?>