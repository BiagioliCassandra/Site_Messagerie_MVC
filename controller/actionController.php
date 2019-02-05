<?php 
//~~~~~~~~~~~~~~~~~~~Functions Actions~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Function who allows you to view the actions
function actionsController() {
    require("view/actionsView.php");
}
//Function who allows you to view the form who add the action and give a value for $buttonValue
function actionFormAdd() {
    $buttonValue = "Ajouter";
    if(!empty($_POST)) {
        clearForm($_POST);
        if(addAction($_POST)) {
          header("Location: ../actions");
          exit;
        }
        else {
          header("Location: ../actions");
          exit;
        }
    }
    require("view/actionAddView.php");
}
//Function who allows you to view the form who update the action and give a value for $buttonValue
function actionFormUpdate() {
    $buttonValue = "Modifier";
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $action = getAction($id);
    }
    if(!empty($_POST)) {
        clearForm($_POST);
        if(updateAction($_POST)) {
          header("Location: ../actions");
          exit;
        }
        else {
          header("Location: ../actions");
          exit;
        }
    }
    require("view/actionAddView.php");
}
//Function who allows you to delete the action with the id of the action in the db
function actionDelete() {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteAction($id)) {
        header("Location: ../actions");
        exit;
    }
    require("view/actionsView.php");
}
?>