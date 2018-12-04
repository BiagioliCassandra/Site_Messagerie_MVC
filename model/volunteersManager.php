<?php 
function getVolunteers($db) {
    $request = $db->query("SELECT * FROM Volunteers");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getVolunteer($db, $id) {
    $request = $db->prepare("SELECT * FROM Volunteers WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function addVolunteer($db, $form) {
    $request = $db->prepare("INSERT INTO Volunteers(name, firstname, age, comment, availability, street, city) VALUE(:name, :firstname, :age, :comment, :availability, :street, :city)");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "age" => $form["age"],
        "comment" => $form["comment"],
        "availability" => $form["availability"],
        "street" => $form["street"],
        "city" => $form["city"],
    ]);
    $request->closeCursor();
    return $result;
}
function deleteVolunteer($db, $id) {
    $request = $db->prepare("DELETE FROM Volunteers WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function updateVolunteer($db, $id, $form) {
    $request = $db->prepare("UPDATE Volunteers SET name = :name, firstname = :firstname, age = :age, comment = :comment, availability = :availability, street = :street, city = :city WHERE id = :id");
    $result = $request->execute([
        "name" => $form["name"],
        "firstname" => $form["firstname"],
        "age" => $form["age"],
        "comment" => $form["comment"],
        "availability" => $form["availability"],
        "street" => $form["street"],
        "city" => $form["city"],
        "id" => $id
        ]);
    $request->closeCursor();
    return $result;
}