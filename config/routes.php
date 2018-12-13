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
      "login",
    ],
    "login" => [
      "user",
      "login",
      ["message"=>["string"]]
    ],
    "volunteers" => [
      "user",
      "volunteersController"
    ],
    "volunteers" => [
      "user",
      "volunteersController",
      ["message"=>["string"]]
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
    ]
  ];
}

 ?>