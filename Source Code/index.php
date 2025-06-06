<?php include('header.php'); ?>

<?php 

if(!isset($_SESSION['admin_logged_in'])){

    header('location: login.php');
    exit();
}

?>



<?php 
//1. determine page number 
if(isset($_GET['page_no']) && $_GET['page_no'] != "" ){
  
    //if user has already entered page number is the one that they selected 
  $page_no = $_GET['page_no'];

  }else{
    //if user just entered the page then default if 1
    $page_no = 1;
  }

  $category = $_POST['category'];
  $price = $_POST['price'];


  //2. return number of products  
  $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM products WHERE product_category=? AND product_price<=?");
  $stmt1->bind_param('si',$category,$price);
  $stmt1->execute();
  $stmt1->bind_result($total_records);
  $stmt1->store_result();
  $stmt1->fetch();


  //3. products per page 
  $total_records_per_page = 8;

  $offset = ($page_no-1) * $total_records_per_page;

  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;

  $adjacents = "2";
  
  $total_no_of_pages = ceil($total_records/$total_records_per_page);

    //4. get all products

    $stmt2 = $conn->prepare("SELECT * FROM products WHERE product_category=? AND product_price<=?  LIMIT $offset,$total_records_per_page");
    $stmt2->bind_param('si',$category,$price);
    $stmt2->execute();
    $products = $stmt2->get_result();


?>


<div class="container-fluid">
    <div class="row" style="min-height: 1000px;">
    
<?php include('sidemenu.php') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-warp flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0" >
        <div class="btn-group me-2" >


           </div>
        </div>
    </div>

    <h2>Orders</h2>
    <div class="table-responsive">
        <table class="table table-stripad table-sm">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Order date</th>
                    <th scope="col">User Phone</th>
                    <th scope="col">User address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
          </tbody>
           
           <?php foreach($orders as $order) { ?>
           
           <tr>
            <td><?php echo $order['order_id']; ?></td>
            <td><?php echo $order['order_status']; ?></td>
            <td><?php echo $order['user_id']; ?></td>
            <td><?php echo $order['order_date']; ?></td>
            <td><?php echo $order['user_phone']; ?></td>
            <td><?php echo $order['user_address']; ?></td>

            <td><a class="btn btn-primary">Edit</a></td>
            <td><a class="btn btn-primary">Delete</a></td>
           
        </tr>

        <?php } ?>
        
        </table>

    </div>

</main>




    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>