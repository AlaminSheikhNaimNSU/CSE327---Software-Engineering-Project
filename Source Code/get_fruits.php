<?php
include('connection.php');

 $stmt = $conn->prepare("SELECT * FROM products WHERE product_category='fruits' LIMIT 4 ");

 $stmt->execute();

 $fruits = $stmt->get_result(); 


?>