<?php

session_start();

include('..server/connection.php');


if(isset($_SESSION['admin_logged_in'])){
  header('location: index.php');
  exit;
}

if(isset($_POST['login_btn'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt=$conn->prepare("SELECT admin_id,admin_name,admin_email,admin_password FROM admins WHERE admin_email = ? AND admin_password = ? LIMIT 1");

  $stmt->bind_param('s', $email);

  if($stmt->execute()){
      $stmt->bind_result($admin_id,$admin_name,$admin_email,$admin_password);
      $stmt->store_result();

      if($stmt->num_rows() == 1){
         $stmt->fetch();

         // Verify the password
         if (password_verify($password, $user_password)) {
             $_SESSION['admin_id'] = $admin_id;
             $_SESSION['admin_name'] = $admin_name;
             $_SESSION['admin_email'] = $admin_email;
             $_SESSION['admin_logged_in'] = true;

             header('location: index.php?login_success=Logged in successfully');
         } else {
             header("location: login.php?error=Incorrect password");
         }

      } else {
         header("location: login.php?error=Could not verify your account");
      }
  
  }else {
     //if error
     header('location: login.php?error=Something went wrong');
  }
}
?>

<?php  ?>




      <!--Login-->
     <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="login-hr mx-auto">
        </div>
        <div class="mx-auto container col-lg-6 col-md-6">
            <form id="login-form" method="POST" action="login.php">
              <p style="color:red" class="text-center"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></p>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="login-btn" name="login_btn" value="Login" >
                </div>
            </form>
        </div>
      </section>





   
