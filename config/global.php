<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/Lab/semaine14/",
    "status" => ["anonymous", "user", "admin"],
    "defaultRoute" => ""
  ];
}

?>