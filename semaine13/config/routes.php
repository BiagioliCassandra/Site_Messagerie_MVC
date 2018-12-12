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
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "front",
      "listUsers"
    ],
    "accueil" => [
      "front",
      "listUsers",
    ],
    "user/sort" => [
      "front",
      "sortUsers",
    ],
    "user/new" => [
      "front",
      "newUser",
    ],
    "user/remove" => [
      "front",
      "removeUser",
      ["id"=>["integer"]],
    ],
    "user/modify" => [
      "front",
      "modifyUser",
      ["id"=>["integer"]],
    ]
  ];
}

 ?>
