<?php 
//~~~~~~~~~~~~~~~~~~~Functions Volunteer~~~~~~~~~~~~~~~~~~~~~~~~~
//Function who allows you to view the volunteers
function login() {
    $volunteers = getVolunteers();
    if(!empty($_POST)) {
        clearForm($_POST);
        foreach ($volunteers as $key => $volunteer) {
            if($volunteer["pseudo"] === $_POST["pseudo"] && password_verify($_POST["password"], $volunteer["password"])) {
                session_start();
                $_SESSION["user"] = $volunteer;
                header("Location: volunteers?message=Bienvenue!");
                exit;
            }
            header("Location: login?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
            exit;
            }
        }
    require("view/loginView.php");
}
function volunteersController() {
    function showAvailability($volunteer) {
        if($volunteer["availability"] == true) { 
            echo "Disponible";
        } else {
            echo "Indisponible";
        }
    }
    require("view/volunteersView.php");  
}
//Function who allows you to view the form who add the volunteer and give a value for $buttonValue
function volunteerFormAdd() {
    $buttonValue = "volunteers/add";
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
          if($key === "availability") {
            $_POST[$key] = intval($value);
          }
        }
        if(addVolunteer($_POST)) {
          header("Location: ../volunteers?message=Le bénévole a été ajouté dans la base de données!");
          exit;
        }
        else {
          header("Location: ../volunteers?message=Echec de l'enregistrement du bénévole dans la base de données");
          exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to view the form who update the volunteer and give a value for $buttonValue
function volunteerFormUpdate() {
    $buttonValue = "volunteers/update";
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $volunteer = getVolunteer($id);
    }
    if(!empty($_POST)) {
        clearForm($_POST);
        if(updateVolunteer($_POST)) {
        header("Location: ../volunteers?message=Les informations sur le bénévole a été modifié dans la base de données!");
        exit;
        }
        else {
        header("Location: ../volunteers?message=Echec de la modification des informations du bénévole dans la base de données");
        exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to delete the volunteer with the id of the volunteer in the db
function volunteerDelete() {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteVolunteer($id)) {
        header("Location: ../volunteers?message=Le bénévole a bien été supprimé de la base de données!");
        exit;
    }
    require("view/volunteersView.php");
}
function sortVolunteers() {
    $volunteers = getSortedVolunteers($_POST);
    function showAvailability($volunteer) {
        if($volunteer["availability"] == true) { 
            echo "Disponible";
        } else {
            echo "Indisponible";
        }
    }
    require("view/volunteersView.php");
}