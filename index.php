<?php
require('controller/controller.php');

if (isset($_GET["action"])) {
    if ($_GET["action"] == "addVolunteer") {
        volunteerAddForm($db, $_POST);
    }
    if($_GET["action"] == "addAction") {
        actionAddForm($db, $_POST);
    }
    if ($_GET["action"] == "actionAddView") {
        actionForm();
    }
    if ($_GET["action"] == "volunteerAddView") {
        volunteerForm();
    }
    if($_GET["action"] == "viewActions") {
        actionsController($db);
    }
    if($_GET["action"] == "delete") {
        actionDelete($db, $id);
    }
}
else {
    volunteersController($db);
}
