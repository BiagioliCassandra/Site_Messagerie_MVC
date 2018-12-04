<?php
    //On se connecte à la base de données
    try
    {
      $db = new PDO('mysql:host=localhost;dbname=AppVolunteers;charset=utf8', 'phpmyadmin', 'AdaLinkLoulouZelda', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
?>