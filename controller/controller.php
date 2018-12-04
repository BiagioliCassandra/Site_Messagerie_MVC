<?php 
require("model/db.php");
require("model/actionsManager.php");
require("model/volunteersManager.php");

//~~~~~~~~~~~~~~~~~~~Functions Volunteer~~~~~~~~~~~~~~~~~~~~~~~~~
function volunteersController($db) {
    $headerTitle = "Liste des bénévoles";
    $headerContent = "La liste des bénévoles de l'association";  
    $volunteers = getVolunteers($db);
    require("view/volunteersView.php");  
}
function volunteerForm() {
    $headerTitle = "Ajout d'un bénévole";
    $headerContent = "Le formulaire d'ajout des bénévoles de l'association";
    require("view/volunteerAddView.php");
}
function volunteerAddForm($db, $form) {
    $headerTitle = "Ajout d'un bénévole";
    $headerContent = "Le formulaire d'ajout des bénévoles de l'association";
    if(!empty($form)) {
        foreach ($form as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
          if($key === "availability") {
            $_POST[$key] = intval($value);
          }
        }
        if(addVolunteer($db, $form)) {
          header("Location: index.php?message=Le bénévole a été ajouté dans la base de données!");
          exit;
        }
        else {
          header("Location: index.php?message=Echec de l'enregistrement du bénévole dans la base de données");
          exit;
        }
    }
    else {
        header("Location: index.php?message=Merci de remplir le formulaire svp");
        exit;
    }

    require("view/volunteerAddView.php");
}
//~~~~~~~~~~~~~~~~~~~Functions Actions~~~~~~~~~~~~~~~~~~~~~~~~~~~
function actionsController($db) {
    $headerTitle = "Liste des actions";
    $headerContent = "La liste des actions entreprises par les bénévoles de l'association";
    $actions = getActions($db);
    require("view/actionsView.php");
}
function actionForm() {
    $headerTitle = "Ajout d'un évènement";
    $headerContent = "Le formulaire d'ajout des actions de l'association";
    require("view/actionAddView.php");
}
function actionAddForm($db, $form) {
    $headerTitle = "Ajout d'un évènement";
    $headerContent = "Le formulaire d'ajout des actions de l'association";
    if(!empty($form)) {
        foreach ($form as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
        if(addAction($db, $form)) {
          header("Location: index.php?message=L'évènement a été ajouté dans la base de données!");
          exit;
        }
        else {
          header("Location: index.php?message=Echec de l'enregistrement de l'évènement dans la base de données");
          exit;
        }
    }
    else {
        header("Location: index.php?message=Merci de remplir le formulaire svp");
        exit;
    }
    addAction($db, $form);
    require("view/actionAddView.php");
}
function actionDelete($db, $id) {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteAction($db, $id)) {
        header("Location: index.php?message=L'évènement a bien été supprimé de la base de données!&action=viewActions");
        exit;
    }
    require("view/actionsView.php");
}