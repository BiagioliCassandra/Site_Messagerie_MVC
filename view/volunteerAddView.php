<!--The add volunteers page of the association-->
<?php 
$headerTitle = "Ajout d'un bénévole";
$headerContent = "Le formulaire d'ajout d'un bénévole de l'association";
include("template/header.php");
?>
<section>
    <h2 class="text-center">Formulaire d'ajout d'un bénévole<h2>
    <a class="btn btn-info w-20 text-center" href="volunteers">Retour</a>
</section>
<?php
require("form/volunteerForm.php");
include("template/footer.php");
?>