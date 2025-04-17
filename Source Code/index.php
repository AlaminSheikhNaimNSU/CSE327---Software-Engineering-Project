      
     <? include('server/connection.php');?>
      
      
      
      
      
      <?php include('layouts/header.php');?>


      




      <!--Home-->

      <section id="home">
      <video id="video-bg" autoplay muted loop>


      
            <source src="../assets/img/GiProduct.mp4" type="video/mp4">
            <!-- Add additional source tags for other video formats if needed -->
            Your browser does not support the video tag.
        </video>

        <!--Brand-->
      <section id="brand" class="container">
        
        <div class="container">
          <h4>NEW ARRIVALS</h4>
          <h1>This Season's <span>Best Prices</span></h1>
          <p><b>Online GI Products, where you find best GI products in best Prices</b></p>
         <!-- <button>Shop Now</button>-->

        </div>
      </section>


      </section>

      
      
      

      <!--New-->

     <section id="new" class="w-100">
       <div class="row p-0 m-0">

          <!--one-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/Img/rajshahi_silk2.jpg">
            <div class="details">
              <h2>New Clothes</h2>
              <!--<button class="text-uppercase">Shop Now</button>-->
          </div>
         </div>

         <!--two-->
         <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/Img/tulshimala rice2.jpg">
            <div class="details">
              <h2>Exclusive Foods</h2>
              <!--<button class="text-uppercase">Shop Now</button>-->
         </div>
       </div> 

       <!--three-->
       <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/Img/lengra mango.webp">
        <div class="details">
          <h2>Offer in our Fruits</h2>
          <!--<button class="text-uppercase">Shop Now</button>-->
     </div>
   </div> 

      
      </div>
      </section>

      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Featured of our product</h3>
          <hr>
          <p><b>You can check our exclusive products</b></p>
        </div>
        <div onclick="window.location.href='single_product.php';" class="row mx-auto container-fluid">
        <?php include('server/get_featured_products.php'); ?>


        <?php while($row= $featured_products->fetch_assoc()) { ?>

        

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="/assets/Img/<?php echo $row['product_image']; ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
          </div>

          <?php } ?>

          
        </div>
      </section>

      <!--Banner-->

      <section id = "banner" class="my-5 py-5">
        <div class="container">
          <h4>WINTER SEASON'S SALE</h4>
          <h1>Winter Collection <br>UP to 25% off</h1>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </section>

      

      <!--Clothes Section-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Clothes</h3>
          <hr>
          <p><b>Check out all Clothes</b></p>
        </div>
        <div onclick="window.location.href='single_product.php';" class="row mx-auto container-fluid">

        <?php include('server/get_clothes.php'); ?> 

        <?php while($row= $clothes_products->fetch_assoc()) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="/assets/Img/<?php echo $row['product_image']; ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
          </div>
        
        <?php } ?>  
          
        </div>
      </section>

      <!--Food Section-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Foods</h3>
          <hr>
          <p><b>Check out all Food</b></p>
        </div>
        <div onclick="window.location.href='single_product.php';" class="row mx-auto container-fluid">

        <?php include('server/get_foods.php'); ?> 

        <?php while($row= $foods->fetch_assoc()) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="/assets/Img/<?php echo $row['product_image']; ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
          </div>
        
        <?php } ?>  
          
        </div>
      </section>


      <!--Fruits Section-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Fruits</h3>
          <hr>
          <p><b>Check out all Fruits</b></p>
        </div>
        <div onclick="window.location.href='single_product.php';" class="row mx-auto container-fluid">

        <?php include('server/get_fruits.php'); ?> 

        <?php while($row= $fruits->fetch_assoc()) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="/assets/Img/<?php echo $row['product_image']; ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>


        
          </div>
        
        <?php } ?>  

        <?php 
        
        
// Assume user ID is obtained after login
$user_id = 123;

// Fetch recommended products for the user from the database
// This could be based on collaborative filtering, content-based filtering, or any other recommendation method
$recommended_products_query = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
$recommended_products_result = $conn->query($recommended_products_query);




       ?>

<section id="recommended" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>Recommended for You</h3>
        <hr>
    </div>
    <div class="row mx-auto container-fluid">
        <?php while($row = $recommended_products_result->fetch_assoc()) { ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="/assets/Img/<?php echo $row['product_image']; ?>">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy now</button></a>
            </div>
        <?php } ?>
    </div>
</section>





          
        </div>
      </section>


      




      
      <?php include('layouts/footer.php');?>


      