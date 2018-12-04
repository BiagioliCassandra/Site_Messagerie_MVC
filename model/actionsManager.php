<?php 
function getActions($db) {
    $request = $db->query("SELECT * FROM Actions");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
function getAction($db, $id) {
    $request = $db->prepare("SELECT * FROM Actions WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function addAction($db, $action) {
    $request = $db->prepare("INSERT INTO Actions(name, place, date, hour) VALUE(:name, :place, :date, :hour)");
    $result = $request->execute([
        "name" => $action["name"],
        "place" => $action["place"],
        "date" => $action["date"],
        "hour" => $action["hour"],
    ]);
    $request->closeCursor();
    return $result;
}
function deleteAction($db, $id) {
    $request = $db->prepare("DELETE FROM Actions WHERE id = ?");
    $result = $request->execute([$id]);
    $request->closeCursor();
    return $result;
}
function updateAction($db, $id, $action) {
    $request = $db->prepare("UPDATE Actions SET name = :name, place = :place, date = :date, hour = :hour WHERE id = :id");
    $result = $request->execute([
        "name" => $action["name"],
        "place" => $action["place"],
        "date" => $action["date"],
        "hour" => $action["hour"],
        "id" => $id
        ]);
    $request->closeCursor();
    return $result;
}