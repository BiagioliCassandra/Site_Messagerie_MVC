<?php 
require("model/actionsManager.php");
require("model/volunteersManager.php");

//~~~~~~~~~~~~~~~~~~~Functions Volunteer~~~~~~~~~~~~~~~~~~~~~~~~~
//Function who allows you to view the volunteers
function volunteersController($db) {
    require("view/volunteersView.php");  
}
//Function who allows you to view the form who add the volunteer and give a value for $buttonValue
function volunteerFormAdd($db) {
    $buttonValue = "addVolunteer";
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
          if($key === "availability") {
            $_POST[$key] = intval($value);
          }
        }
        if(addVolunteer($db, $_POST)) {
          header("Location: index.php?message=Le bénévole a été ajouté dans la base de données!&action=viewVolunteers");
          exit;
        }
        else {
          header("Location: index.php?message=Echec de l'enregistrement du bénévole dans la base de données");
          exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to view the form who update the volunteer and give a value for $buttonValue
function volunteerFormUpdate($db) {
    $buttonValue = "updateVolunteer";
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        var_dump($id);
        $volunteer = getVolunteer($db, $id);
    }
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
        if(updateVolunteer($db, $_POST)) {
        header("Location: index.php?message=Les informations sur le bénévole a été modifié dans la base de données!&action=viewVolunteers");
        exit;
        }
        else {
        header("Location: index.php?message=Echec de la modification des informations du bénévole dans la base de données");
        exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to delete the volunteer with the id of the volunteer in the db
function volunteerDelete($db) {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteVolunteer($db, $id)) {
        header("Location: index.php?message=Le bénévole a bien été supprimé de la base de données!&action=viewVolunteers");
        exit;
    }
    require("view/volunteersView.php");
}
//~~~~~~~~~~~~~~~~~~~Functions Actions~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Function who allows you to view the actions
function actionsController($db) {
    require("view/actionsView.php");
}
//Function who allows you to view the form who add the action and give a value for $buttonValue
function actionFormAdd($db) {
    $buttonValue = "addAction";
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
        if(addAction($db, $_POST)) {
          header("Location: index.php?message=L'évènement a été ajouté dans la base de données!&action=viewActions");
          exit;
        }
        else {
          header("Location: index.php?message=Echec de l'enregistrement de l'évènement dans la base de données");
          exit;
        }
    }
    require("view/actionAddView.php");
}
//Function who allows you to view the form who update the action and give a value for $buttonValue
function actionFormUpdate($db) {
    $buttonValue = "updateAction";
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $action = getAction($db, $id);
    }
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
        }
        if(updateAction($db, $id, $_POST)) {
          header("Location: index.php?message=L'évènement a été modifié dans la base de données!&action=viewActions");
          exit;
        }
        else {
          header("Location: index.php?message=Echec de la modification de l'évènement dans la base de données");
          exit;
        }
    }
    require("view/actionAddView.php");
}
//Function who allows you to delete the action with the id of the action in the db
function actionDelete($db) {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteAction($db, $id)) {
        header("Location: index.php?message=L'évènement a bien été supprimé de la base de données!&action=viewActions");
        exit;
    }
    require("view/actionsView.php");
}