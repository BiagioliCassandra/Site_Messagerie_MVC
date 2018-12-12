<?php
require "model/userManager.php";

function listUsers() {
  $users = getUsers();
  foreach ($users as $key => $user) {
    $users[$key]["available"] = ($user["available"]) ? "Disponible" : "Indisponible";
  }
  require "view/listUsersView.php";
}

function removeUser() {
  if(deleteUser($_GET["id"])) {
    redirectTo("accueil");
  }
}

function newUser() {
  $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
  addUser($_POST);
  redirectTo("accueil");
}

function modifyUser() {
  if(!empty($_POST)) {
    updateUser($_POST);
    redirectTo("accueil");
  }
  $user = getUser($_GET["id"]);
  if(empty($user)){
    header("Location: ../accueil");
  }
  require "view/modifyUserView.php";
}

function sortUsers() {
  $users = getSortedUsers($_POST);
  require "view/listUsersView.php";
}

 ?>
