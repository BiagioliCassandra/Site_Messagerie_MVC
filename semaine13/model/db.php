<?php
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=associationGestion;charset=utf8', 'root', 'ThomAdmin12');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

 ?>
