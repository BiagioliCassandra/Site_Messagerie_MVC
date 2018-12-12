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
      "",
      "volunteersController"
    ],
    "volunteers/add" => [
      "",
      "volunteerFormAdd",
      ["message"=>["string"]]
    ],
    "volunteers/update" => [
      "",
      "volunteerFormUpdate",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ],    
    "volunteers/delete" => [
      "",
      "volunteerDelete",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ],
    "actions" => [
      "",
      "actionsController"
    ],
    "actions/add" => [
      "",
      "actionFormAdd",
      ["message"=>["string"]]
    ],
    "actions/update" => [
      "",
      "actionFormUpdate",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ],
    "actions/delete" => [
      "",
      "actionDelete",
      ["id"=>["integer"]],
      ["message"=>["string"]]
    ]
  ];
}

 ?>