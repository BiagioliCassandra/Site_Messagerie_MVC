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
    ],
    "volunteers/add" => [
      "user",
      "volunteerFormAdd"
    ],
    "volunteers/update" => [
      "user",
      "volunteerFormUpdate",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ],    
    "volunteers/delete" => [
      "user",
      "volunteerDelete",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ],
    "logout" => [
      "user",
      "logoutUser"
    ],
    "actions" => [
      "action",
      "actionsController"
    ],
    "actions/add" => [
      "action",
      "actionFormAdd"
    ],
    "actions/update" => [
      "action",
      "actionFormUpdate",
      ["id"=>["integer"]]
    ],
    "actions/delete" => [
      "action",
      "actionDelete",
      ["id"=>["integer"]]
    ],
    "messages" => [
      "message",
      "messages"
    ],
    "messages/add" => [
      "message",
      "messageAdd",
      ["id"=>["integer"]]
    ],
    "messages/delete" => [
      "message",
      "messageDelete",
      ["id"=>["integer"]]
    ]
  ];
}

 ?>