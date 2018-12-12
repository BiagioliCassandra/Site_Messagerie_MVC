<?php 
function getActions() {
    $db = getDataBase();
    $request = $db->query("SELECT * FROM Actions");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getAction($id) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM Actions WHERE id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function addAction($form) {
    $db = getDataBase();
    $request = $db->prepare("INSERT INTO Actions(name, place, date, hour) VALUE(:name, :place, :date, :hour)");
    $result = $request->execute([
        "name" => $form["name"],
        "place" => $form["place"],
        "date" => $form["date"],
        "hour" => $form["hour"]
    ]);
    $request->closeCursor();
    return $result;
}
function updateAction($form) {
    $db = getDataBase();
    $request = $db->prepare("UPDATE Actions SET name = :name, place = :place, date = :date, hour = :hour WHERE id = :id");
    $result = $request->execute([
        "name" => $form["name"],
        "place" => $form["place"],
        "date" => $form["date"],
        "hour" => $form["hour"],
        "id" => $form["id"]
        ]);
    $request->closeCursor();
    return $result;
}
function deleteAction($id) {
    $db = getDataBase();
    $request = $db->prepare("DELETE FROM Actions WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}