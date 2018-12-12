<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <header class="jumbotron jumbotron-fluid mb-0">
      <div class="container">
        <h1 class="display-4">Un jour, un larbin</h1>
        <p class="lead">Solution de management des bénévoles</p>
      </div>
    </header>
    <nav class="bg-success">
      <ul class="nav mb-5 container">
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("") ?>>accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("accueil") ?>>administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" <?php setHref("message") ?>>messagerie</a>
        </li>
        <?php
          if(isLogged()) {
          ?>
          <a class="nav-link text-white" <?php setHref("logout") ?>>deconnexion</a>
          <?php
          }
         ?>
      </ul>
    </nav>

    <main class="container">
