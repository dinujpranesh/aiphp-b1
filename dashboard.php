<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en" lang="en" data-bs-theme="white">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--favicons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <style>
       .hero-text {
      background-color: #f8f9fa;
      padding: 10px;
      text-align: center;
      margin-top: 01vh;
      margin-bottom: 04vb;
    }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/fav/favicon-32x32.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="Register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="logout.php">Logout</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  
        <div class="card container-md text-center"  style="max-width: 400px;">
          <div class="hero-text">
          <h2 class="mt-4 mb-4 fw-light text-success-emphasis">Employee Dashboard</h2>
          <div class="mb-3">
          <div class="row">
          
          
          <a class="col-4 dash-card card p-3 rounded-5" style="width: 12rem;" href="notes/index.php">
          <img src="img/note/3.png" class="card-img-top" alt="..."/>
          <h3 class="dash-card-text">Notes App</h3>
          </a>
          
        
    </div>
  </div>

 
          </div>
                

            <div>
              
            </div>
