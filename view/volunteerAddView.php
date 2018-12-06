<?php 
$headerTitle = "Ajout d'un bénévole";
$headerContent = "Le formulaire d'ajout d'un bénévole de l'association";
include("template/header.php");
?>
<section>
    <h2 class="text-center">Formulaire d'ajout d'un bénévole<h2>
</section>
<?php
require("form/volunteerForm.php");
include("template/footer.php");
?>