<?php 
require("model/db.php");
require("model/actionsManager.php");
require("model/volunteersManager.php");

function volunteersController($db) {
    $headerTitle = "Liste des bénévoles";
    $headerContent = "La liste des bénévoles de l'association";  
    $volunteers = getVolunteers($db);
    require("view/volunteersView.php");  
}
function actionsController($db) {
    $headerTitle = "Liste des actions";
    $headerContent = "La liste des actions entreprises par les bénévoles de l'association";
    $actions = getActions($db);
    require("view/actionsView.php");
}
function volunteerForm($db, $form) {
    $headerTitle = "Ajout d'un bénévole";
    $headerContent = "Le formulaire d'ajout des bénévoles de l'association";
    $request = addVolunteer($db, $form);
    require("view/volunteerAddForm.php");
}
function actionForm($db, $form) {
    $headerTitle = "Ajout d'un évènement";
    $headerContent = "Le formulaire d'ajout des actions de l'association";
    $request = addAction($db, $form);
    require("view/actionAddForm.php");
}