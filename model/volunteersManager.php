<?php 
function getVolunteers() {
    $db = getDataBase();
    $request = $db->query("SELECT * FROM Volunteers");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Function that retrieves all the information of a user when the nickname entered in the login is the same as the one in the database. 
//Check the encrypted password in Login
function loginUser($form) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM Volunteers WHERE pseudo = ?");
    $request->execute([$form["pseudo"]]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Retrieves the volunteer id when his nickname is in the database
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
//The function of the volunteer sorting form
function getSortedVolunteers($sortingKeys) {
    $db = getDataBase();
    //We start the query with the parameters we will execute stored in a table
    $sql = "SELECT * FROM Volunteers";
    $params = [];
    //We build the query based on the parameters passed in the post
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
    $sql .= "ORDER BY " . $sortingKeys['sort'];
    $query = $db->prepare($sql);
    $query->execute($params);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}