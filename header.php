<?php
// session_start();
// if( !isset($_SESSION["login"])){
//     header("location: login.php");
//     exit;
// }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rizky maulana </title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
      <div class="loader"></div>
    </div> -->

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="header__logo">
              <a href="./index.php"><img src="img/logo.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
              <ul>
                <li><a href="./index.php">Home</a></li>
                <li>
                  <a href="./shop.php">Shop</a>
                </li>
                <li><a href="./shopping-cart.php">Cart</a></li>
                <li><a href="./contact.php">Contacts</a></li>
                <li>
             <?php if (!isset($_SESSION["role"]) || $_SESSION["role"] == 1) : ?>
            <a href="./dashboard/dashboard.php">Dashboard</a>
            <?php else : ?>
          <a href="logout.php">Logout</a>
        <?php endif; ?>

          </div>
          <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
              <a href="#" class="search-switch"
                ><img src="img/icon/search.png" alt=""
              /></a>
              <a href="#"><img src="img/icon/heart.png" alt="" /></a>
              <a href="#"
                ><img src="img/icon/cart.png" alt="" /> <span>0</span></a
              >
              <div class="price">$0.00</div>
            </div>
          </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
      </div>
    </header>
</head>
<body>
    
</body>
</html>