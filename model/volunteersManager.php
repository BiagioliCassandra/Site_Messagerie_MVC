<?php 
function getVolunteers() {
    $db = getDataBase();
    $request = $db->query("SELECT * FROM Volunteers");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function loginUser($form) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM Volunteers WHERE pseudo = ?");
    $request->execute([$form["pseudo"]]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getID($form) {
    $db = getDataBase();
    $request = $db->prepare("SELECT id FROM Volunteers WHERE pseudo = ?");
    $request->execute([$form]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getVolunteer($id) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM Volunteers WHERE id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function addVolunteer($form) {
    $db = getDataBase();
    $request = $db->prepare("INSERT INTO Volunteers(name, firstname, pseudo, age, street, city, availability, comment, email, password, status) VALUE(:name, :firstname, :pseudo, :age, :street, :city, :availability, :comment, :email, :password, :status)");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "pseudo" => $form["pseudo"],
        "age" => $form["age"],
        "street" => $form["street"],
        "city" => $form["city"],
        "availability" => $form["availability"],
        "comment" => $form["comment"],
        "email" => $form["email"],
        "password" => password_hash($form['password'], PASSWORD_BCRYPT, ['cost' => 13]),
        "status" => $form["status"]
    ]);
    $request->closeCursor();
    return $result;
}
function updateVolunteer($form) {
    $db = getDataBase();
    $request = $db->prepare("UPDATE Volunteers SET name = :name, firstname = :firstname, pseudo = :pseudo, age = :age, comment = :comment, availability = :availability, street = :street, city = :city, email = :email, password = :password, status = :status WHERE id = :id");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "pseudo" => $form["pseudo"],
        "age" => $form["age"],
        "comment" => $form["comment"],
        "availability" => $form["availability"],
        "street" => $form["street"],
        "city" => $form["city"],
        "email" => $form["email"],
        "password" => password_hash($form['password'], PASSWORD_BCRYPT, ['cost' => 13]), 
        "status" => $form["status"],    
        "id" => $form["id"]
        ]);
    $request->closeCursor();
    return $result;
}
function deleteVolunteer($id) {
    $db = getDataBase();
    $request = $db->prepare("DELETE FROM Volunteers WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function getSortedVolunteers($sortingKeys) {
    $db = getDataBase();
    //On démarre la requête avec les paramètres qu'on exécutera stockés dans un tableau
    $sql = "SELECT * FROM Volunteers";
    $params = [];
    //On construit la requête sur la base des paramètres passés dans le post
    if((isset($sortingKeys["availability"])) || !empty($sortingKeys["availability"]) || (!empty($sortingKeys["city"]))) {
      $sql .= "WHERE ";
      if(!empty($sortingKeys["city"])){
        $sql .= "city = ? ";
        array_push($params, $sortingKeys["city"]);
        if(isset($sortingKeys["availability"]) && !empty($sortingKeys["availability"])){
          $sql .= "AND availability = ? ";
          array_push($params, $sortingKeys["availability"]);
        }
      }
      else {
        if(isset($sortingKeys["availability"])){
          $sql .= "availability = ? ";
          array_push($params, $sortingKeys["availability"]);
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