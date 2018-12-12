<?php

function getUsers() {
  $db = getDataBase();
  $response = $db->query("SELECT * FROM users");
  $result = $response->fetchall(PDO::FETCH_ASSOC);
  $response->closeCursor();
  return $result;
}

function getSortedUsers($sortingKeys) {
  $db = getDataBase();
  //On démarre la requête avec les paramètres qu'on exécutera stockés dans un tableau
  $sql = "SELECT * FROM users ";
  $params = [];
  //On construit la requête sur la base des paramètres passés dans le post
  if((isset($sortingKeys["available"])) || !empty($sortingKeys["available"]) || (!empty($sortingKeys["city"]))) {
    $sql .= "WHERE ";
    if(!empty($sortingKeys["city"])){
      $sql .= "city = ? ";
      array_push($params, $sortingKeys["city"]);
      if(isset($sortingKeys["available"]) && !empty($sortingKeys["available"])){
        $sql .= "AND available = ? ";
        array_push($params, $sortingKeys["available"]);
      }
    }
    else {
      if(isset($sortingKeys["available"])){
        $sql .= "available = ? ";
        array_push($params, $sortingKeys["available"]);
      }
    }
  }
  //On ordonne le résultat quoiqu'il arrive
  $sql .= "ORDER BY " . $sortingKeys['sort'];
  //On réalise la requête de manière classique
  $query = $db->prepare($sql);
  $query->execute($params);
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function getUser($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM users WHERE id = ?");
  $query->execute([$id]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function getUserByPseudo($user) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM users WHERE pseudo = ?");
  $query->execute([$user["pseudo"]]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function deleteUser($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM users WHERE id= ?");
  $result = $query->execute([$id]);
  $query->closeCursor();
  return $result;
}

function addUser($user) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO users(lastName, firstName, pseudo, age, comment, available, street, city, password) VALUES (:lastName, :firstName, :pseudo, :age, :comment, :available, :street, :city, :password)");
  $result = $query->execute([
    "lastName" => $user["lastName"],
    "firstName" => $user["firstName"],
    "pseudo" => $user["pseudo"],
    "age" => $user["age"],
    "comment" => $user["comment"],
    "available" => $user["available"],
    "street" => $user["street"],
    "city" => $user["city"],
    "password" => $user["password"]
  ]);
  $query->closeCursor();
  return $result;
}

function updateUser($user) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE users SET lastName = :lastName, firstName = :firstName, age = :age, comment = :comment, available = :available, street = :street, city = :city WHERE id = :id");
  $result = $query->execute([
    "lastName" => $user["lastName"],
    "firstName" => $user["firstName"],
    "age" => $user["age"],
    "comment" => $user["comment"],
    "available" => $user["available"],
    "street" => $user["street"],
    "city" => $user["city"],
    "id" => $user["id"]
  ]);
  $query->closeCursor();
  return $result;
}

 ?>
