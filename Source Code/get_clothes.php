<?php
include('connection.php');

 $stmt = $conn->prepare("SELECT * FROM products WHERE product_category='clothes'  LIMIT 4 ");

 $stmt->execute();

 $clothes_products = $stmt->get_result(); 


?>