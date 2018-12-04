<?php 
function getVolunteers($db) {
    $request = $db->query("SELECT * FROM Volonteers");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getVolunteer($db, $id) {
    $request = $db->prepare("SELECT * FROM Volonteers WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function addVolunteer($db, $volunteer) {
    $request = $db->prepare("INSERT INTO Volonteers(name, firstname, age, comment, availability, street, city) VALUE(:name, :firstname, :age, :comment, :availability, :street, :city)");
    $result = $request->execute([
        "name" => $volunteer["name"],
        "firstname" => $volunteer["firstname"],
        "age" => $volunteer["age"],
        "comment" => $volunteer["comment"],
        "availability" => $volunteer["availability"],
        "street" => $volunteer["street"],
        "city" => $volunteer["city"],
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
function updateVolunteer($db, $id, $volunteer) {
    $request = $db->prepare("UPDATE Volunteers SET name = :name, firstname = :firstname, age = :age, comment = :comment, availability = :availability, street = :street, city = :city WHERE id = :id");
    $result = $request->execute([
        "name" => $volunteer["name"],
        "firstname" => $volunteer["firstname"],
        "age" => $volunteer["age"],
        "comment" => $volunteer["comment"],
        "availability" => $volunteer["availability"],
        "street" => $volunteer["street"],
        "city" => $volunteer["city"],
        "id" => $id
        ]);
    $request->closeCursor();
    return $result;
}