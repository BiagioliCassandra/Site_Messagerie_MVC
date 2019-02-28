<!--The page sends messages between users-->
<?php 
$headerTitle = "Envoie d'un message";
$headerContent = "Le formulaire d'envoie d'un message";  

include("template/header.php");
require("form/messageForm.php");
include("template/footer.php");
?>