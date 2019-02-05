<?php
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=AppVolunteers;charset=utf8', 'phpmyadmin', 'AdaLinkLoulouZelda');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}
?>