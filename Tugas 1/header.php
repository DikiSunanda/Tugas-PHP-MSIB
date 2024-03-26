<?php

$judul = "Website Boots & PHP";
$profile = 'Profile';
$home = 'Home';
$search = 'Search';



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    .nav-link:hover {
      color: #fff ;
      background-color: green;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-light" style="background-color: dimgray;">
    <div class="container">
      <a class="navbar-brand text-success fs-2 fw-bold"><?php print $judul ?></a>
      <ul class="nav ms-auto me-5 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="main.php" target="main"><?php echo $home ?></a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link text-dark" href="profile.php" target="main"><?php echo $profile ?></a>
        </li>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><?php print $search ?></button>
      </form>
    </div>
  </nav>
</body>
</html>

