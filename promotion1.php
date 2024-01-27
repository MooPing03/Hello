<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS Shop</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="carousel.css">
    <link href="bootstrap/css/a.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'index/login-singup.php'; ?>
    <?php include 'index/header.php'; ?>
</header>
<style>
    /* Hide Carousel Indicators */
    .carousel-indicators {
      display: none;
    }
    .carousel-control-prev {
      position: absolute;
      top: -150px;
      left: -50px;
    }

    .carousel-control-next {
      position: absolute;
      top: -150px;
      right: -50px;
    }    
  </style>
<div id="bms" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#bms" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#bms" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#bms" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
        <a href="#">
          <div class="carousel-caption text-start">
            <h1>โปรโมชั่น</h1>
            <p class="opacity-75">เอาไว้ใส่โปรโมชั่น</p> #โปรโมชั่นนานๆมาที
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <a href="#">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>เอาไว้ใส่โปรโมชั่น</h1>
            <p>เอาไว้ใส่โปรโมชั่น</p>
          </div>
        <div class="carousel-item">
      <a href="#">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>เอาไว้ใส่โปรโมชั่น</h1>
            <p>เอาไว้ใส่โปรโมชั่น</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
        <a href="#">
          <div class="carousel-caption">
            <h1>เอาไว้ใส่โปรโมชั่น</h1>
            <p>เอาไว้ใส่โปรโมชั่น</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bms" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bms" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
</body>
</html>
