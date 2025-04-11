<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_char'])) {
  $_SESSION['selected_character'] = $_POST['selected_char'];
}

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case "destination":
      $page = "destination"; 
      break;
    case "about":
      $page = "about"; 
      break;
    default:
      $page = "destination"; 
      break;
  }
} else {
  $page = "destination"; 
}

$theme = "light";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wizh Homes</title>
  <link rel="icon" href="img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="styles.css">
</head>
<body data-bs-theme="<?php echo $theme ?>">
<nav class="navbar navbar-light shadow fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Wizh Homes</a>
  </div>
</nav>

<div class="wrapper">

  <aside class="sidebar d-flex flex-column">
    <nav class="flex-grow-1">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'destination') ? 'active' : ''; ?>" href="?page=destination">
            <i class="fas fa-home me-2"></i>Available House
          </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page === 'about') ? 'active' : ''; ?>" href="?page=about">
            <i class="fas fa-info-circle me-2"></i>About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-envelope me-2"></i>Contact the Guild
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-star me-2"></i>Reviews
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-concierge-bell me-2"></i>Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-question-circle me-2"></i>FAQ
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-scroll me-2"></i>Guild Rules
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-map me-2"></i>Magical Maps
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-hat-wizard me-2"></i>Wizards’ Lounge
          </a>
        </li>
      </ul>
    </nav>
  </aside>


    <?php 
    if ($page === "destination") {
      include("shared/destination.php"); 
    } elseif ($page === "about") {
      include("shared/about.php"); 
    }
    ?>
  </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
