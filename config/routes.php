<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "login"
    ],
    "volunteers" => [
      "user",
      "volunteersController",
      "status" => "user, admin"
    ],
    "volunteers/sort" => [
      "user",
      "sortVolunteers",
      "status" => "user, admin"
    ],
    "volunteers/add" => [
      "user",
      "volunteerFormAdd",
      "status" => "admin"
    ],
    "volunteers/update" => [
      "user",
      "volunteerFormUpdate",
      ["id"=>["integer"]],
      ["message"=>["string"]],
      "status" => "admin"
    ],    
    "volunteers/delete" => [
      "user",
      "volunteerDelete",
      ["id"=>["integer"]],
      ["message"=>["string"]],
      "status" => "admin"
    ],
    "logout" => [
      "user",
      "logoutUser", 
      "status" => "user, admin"
    ],
    "actions" => [
      "action",
      "actionsController", 
      "status" => "user, admin"
    ],
    "actions/add" => [
      "action",
      "actionFormAdd", 
      "status" => "admin"
    ],
    "actions/update" => [
      "action",
      "actionFormUpdate",
      ["id"=>["integer"]], 
      "status" => "admin"
    ],
    "actions/delete" => [
      "action",
      "actionDelete",
      ["id"=>["integer"]], 
      "status" => "admin"
    ],
    "messages" => [
      "message",
      "messages", 
      "status" => "user, admin"
    ],
    "messages/add" => [
      "message",
      "messageAdd",
      ["id"=>["integer"]], 
      "status" => "user, admin"
    ],
    "messages/delete" => [
      "message",
      "messageDelete",
      ["id"=>["integer"]], 
      "status" => "user, admin"
    ]
  ];
}

 ?>