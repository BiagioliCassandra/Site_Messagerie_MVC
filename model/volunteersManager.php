<?php 
function getVolunteers() {
    $db = getDataBase();
    $request = $db->query("SELECT * FROM Volunteers");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
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
    $request = $db->prepare("INSERT INTO Volunteers(name, firstname, age, street, city, availability, comment, email, password) VALUE(:name, :firstname, :age, :street, :city, :availability, :comment, :email, :password)");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "age" => $form["age"],
        "street" => $form["street"],
        "city" => $form["city"],
        "availability" => $form["availability"],
        "comment" => $form["comment"],
        "email" => $form["email"],
        "password" => $form["password"]
    ]);
    $request->closeCursor();
    return $result;
}
function updateVolunteer($form) {
    $db = getDataBase();
    $request = $db->prepare("UPDATE Volunteers SET name = :name, firstname = :firstname, age = :age, comment = :comment, availability = :availability, street = :street, city = :city, email = :email, password = :password WHERE id = :id");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "age" => $form["age"],
        "comment" => $form["comment"],
        "availability" => $form["availability"],
        "street" => $form["street"],
        "city" => $form["city"],
        "id" => $form["id"],
        "email" => $form["email"],
        "password" => $form["password"]
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