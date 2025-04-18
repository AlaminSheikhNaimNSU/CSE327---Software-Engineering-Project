<?php
include('connection.php');

 $stmt = $conn->prepare("SELECT * FROM products WHERE product_category='foods' LIMIT 4 ");

 $stmt->execute();

 $foods = $stmt->get_result(); 


?>