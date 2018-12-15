
<?php 
// var_dump($_POST);
// var_dump($volunteer);
// var_dump($_SESSION["user"]);
$headerTitle = "Login";
$headerContent = "Le formulaire de connexion";
include("template/header.php");
require("form/loginForm.php");
include("template/footer.php");
?>