<?php

session_start()


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets/style.css">

    <style>
        /* Keyframes for moving logo */
        @keyframes moveLeftToRight {
            0% {
                transform: translateX(-30%);
            }
            100% {
                transform: translateX(60%);
            }
        }

        /* Applying animation to the logo */
        .logos {
            animation: moveLeftToRight 5s infinite alternate;
        }
    </style>



    





</head>
<body>
    <!------------------------------Navbar------------------------------->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
        <div class="container-fluid">
          <img class="logos" src="assets/Img/bangladesh.png">
          <!--h2 class="brand">Laptop Cafe</h2-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact US</a>
              </li>

              <li class="nav-item">
                <a href="cart.php">
                  <i class="fas fa-shopping-cart">
                    <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) { ?>
                        <span class="cart-quantity"><?php echo $_SESSION['quantity']; ?></span>
                      <?php } ?>
                  </i></a>
               <a href="account.php"><i class="fas fa-users"></i></a> 
              </li>
  
            </ul>
            
          </div>
        </div>
      </nav>