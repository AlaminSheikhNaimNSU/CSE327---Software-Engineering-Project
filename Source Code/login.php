<?php
session_start();

include('server/connection.php');


// Check if user is already logged in, redirect to account page
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}

// Handle logout
if(isset($_GET['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header('location: login.php');
    exit;
}

// Handle login
if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_email = ?");
    $stmt->bind_param('s', $email);

    if($stmt->execute()){
        $stmt->store_result();

        if($stmt->num_rows() == 1){
            $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $user_password)) {
                // Set session variables
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_email'] = $user_email;
                $_SESSION['logged_in'] = true;

                // Redirect to account page
                header('location: account.php?login_success=Logged in successfully');
                exit;
            } else {
                header("location: login.php?error=Incorrect password");
                exit;
            }
        } else {
            header("location: login.php?error=Could not verify your account");
            exit;
        }
    } else {
        // Log the SQL error for debugging
        error_log("SQL Error: " . $stmt->error);
        header('location: login.php?error=Something went wrong');
        exit;
    }
}
?>


<?php include('layouts/header.php'); ?>



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
                <input type="submit" class="btn" id="login-btn" name="login_btn" value="Login">
            </div>
            <div class="form-group">
                <a id="register-url" href="register.php" class="btn"> You don't have an account! Register Now</a>
            </div>
        </form>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
