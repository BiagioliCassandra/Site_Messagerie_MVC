<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, v.pseudo FROM Messages AS m INNER JOIN Volunteers AS v ON m.sender = v.id WHERE getter = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $sender) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Messages(contents, date, sender, getter, object) VALUES (:contents, NOW(), :sender, :getter, :object)");
  $result = $query->execute([
    "contents" => $message["contents"],
    "sender" => $sender,
    "getter" => $message["pseudo"],
    "object" => $message["object"]
  ]);
  $query->closeCursor();
  return $result;
}

 ?>
