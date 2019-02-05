<?php 
//~~~~~~~~~~~~~~~~~~~Functions Volunteer~~~~~~~~~~~~~~~~~~~~~~~~~
//Function who allows you to view the volunteers
function login() {
    if(!empty($_POST)) {
        clearForm($_POST);
        if(loginUser($_POST)) {
            $user = loginUser($_POST);
            if(password_verify($_POST["password"], $user["password"]))
            {
                initializeUserSession($user);
                if($user["status"] === "admin") {
                    redirectTo("volunteers");
                }
                if($user["status"] === "user") {
                    redirectTo("messages");
                }
            }
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
    $buttonValue = "Ajouter";
    if(!empty($_POST)) {
        foreach ($_POST as $key => $value) {
          $_POST[$key] = htmlspecialchars($value);
          if($key === "availability") {
            $_POST[$key] = intval($value);
          }
        }
        if(addVolunteer($_POST)) {
          header("Location: ../volunteers");
          exit;
        }
        else {
          header("Location: ../volunteers");
          exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to view the form who update the volunteer and give a value for $buttonValue
function volunteerFormUpdate() {
    $buttonValue = "Modifier";
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $volunteer = getVolunteer($id);
    }
    if(!empty($_POST)) {
        clearForm($_POST);
        if(updateVolunteer($_POST)) {
        header("Location: ../volunteers");
        exit;
        }
        else {
        header("Location: ../volunteers");
        exit;
        }
    }
    require("view/volunteerAddView.php");
}
//Function who allows you to delete the volunteer with the id of the volunteer in the db
function volunteerDelete() {
    $id = htmlspecialchars($_GET["id"]);
    if(deleteVolunteer($id)) {
        header("Location: ../volunteers");
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
function logoutUser() {
    logout();
    redirectTo("");
}