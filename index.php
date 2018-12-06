<?php
require("model/db.php");
require('controller/controller.php');

if (isset($_GET["action"])) {
//~~~~~~~~Volunteers~~~~~~~~
    //Allows you to view the volunteers page
    if($_GET["action"] == "viewVolunteers") {
        volunteersController($db);
    }
    //Add a volonteer to the database
    if($_GET["action"] == "addVolunteer") {
        volunteerFormAdd($db);
    }
    //Update a volonteer to the database    
    if($_GET["action"] == "updateVolunteer") {
        volunteerFormUpdate($db);
    }
    //Delete a volonteer to the database
    if($_GET["action"] == "deleteVolunteer") {
        volunteerDelete($db);
    }    
//~~~~~~~~Actions~~~~~~~~
    //Allows you to view the actions page
    if($_GET["action"] == "viewActions") {
        actionsController($db);
    }
    //Add a action to the database
    if($_GET["action"] == "addAction") {
        actionFormAdd($db);
    }
    //Update a action to the database    
    if($_GET["action"] == "updateAction") {
        actionFormUpdate($db);
    }
    //Delete a action to the database
    if($_GET["action"] == "deleteAction") {
        actionDelete($db);
    }
}
else {
    volunteersController($db);
}
