<?php
require_once('php/CreatDB.php');
require_once('./php/component.php');

// create instance of Created class
$database = new CreateDB("Productdb","Producttb")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamzah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <i class="fa-solid fa-heading"></i>
              <!-- <img src="imgs/HamzahLogo.png" alt=""> -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-3" href="#">Contact</a>
              </li>
            </ul>
            <div class="search ps-3 pe-3 d-none d-lg-block"><i class="fa-solid fa-magnifying-glass"></i></div>
            <a class="btn rounded-pill main-btn" href="#">Login</a> 
        </div>
        
        </div>
      </nav>
      <!-- Landign -->
      <div class="landing d-flex justify-content-center align-items-center">
        <div class="text-center text-light">
          <h1>Tast the Creativity</h1>
          <p class="fs-6 text-white-50 mb-4">I make awsome graphic and web desig</p>
          <button class="btn rounded-pill main-btn">Get Started</button>
        </div>
      </div>
      <div class="features text-center py-3 position-relative">
        <div class="container">
          <div class="main-title">
            <i class="fa-solid fa-fire-flame-curved fa-4x py-3"></i>
            <h2>We are Good at </h2>
            <p class="text-black-50 text-uppercase" >Some of These Stuff Under</p>
          </div>
          <div class="row">
          <?php
          // for($i=0;$i<30;$i++)
          component("Prodect 1",590,"./imgs/access1.jpg");
          component("Prodect 2",590,"./imgs/access2.jpg");
          component("Prodect 3",590,"./imgs/access3.jpg");
          component("Prodect 4",590,"./imgs/access5.jpg");
          ?>

          </div>
        </div>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>