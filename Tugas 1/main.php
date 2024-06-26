<?php

$kataKata1 = "Selamat menunaikan ibadah puasa !";
$kataKata2 = "Semangat menjalani bulan Ramadhan :v";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://muslimah.or.id/wp-content/uploads/2010/08/menyambut-bulan-ramadhan.png" class="d-block img-fluid mx-auto" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $kataKata1?></h5>
          <p><?php echo $kataKata2?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://muslimah.or.id/wp-content/uploads/2010/08/menyambut-bulan-ramadhan.png" class="d-block img-fluid mx-auto" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $kataKata1?></h5>
          <p><?php echo $kataKata2?></p>
        </div>
      </div> 
      <div class="carousel-item">
        <img src="https://muslimah.or.id/wp-content/uploads/2010/08/menyambut-bulan-ramadhan.png" class="d-block img-fluid mx-auto" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $kataKata1?></h5>
          <p><?php echo $kataKata2?></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
