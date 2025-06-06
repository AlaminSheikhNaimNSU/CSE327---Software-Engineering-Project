<?php 

session_start();

include('server/connection.php');

if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
 }


if(isset($_POST['register'])){

  $name = $_POST['name'];
  $email= $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];
  
  //if password don't match 
  if($password !== $confirmPassword){
    header('location: register.php?error=Passwords dont match');
    exit;
  }
  
  //if password is less than 6 charachters
  else if(strlen($password) < 6){
    header('location: register.php?error=Password must be at least 6 charachters');
    exit;
  }
 
  //if there is no error
  else{
                //check weather there is a user this email or not 

                $stmt1=$conn->prepare("SELECT count(*) FROM users where user_email=?");
                $stmt1->bind_param('s',$email);
                $stmt1->execute();
                $stmt1->bind_result($num_row);
                $stmt1->store_result();
                $stmt1->fetch();

                //if there is a user already registered with this email
                if($num_row != 0){
                  header('location: register.php?error=user with this email already exists');
                
                //if no user register with this email before   
                }else{ 
                
                
                  //create a new user

                $stmt = $conn->prepare("INSERT INTO users (user_name,user_email,user_password)
                                VALUES (?,?,?)");
                
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $name, $email, $passwordHash);


                if($stmt->execute()){
                  $user_id = $stmt-> insert_id;
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['user_email'] = $email;
                  $_SESSION['user_name'] = $name;
                  $_SESSION['logged_in']=true;

                 

                  header('location: account.php?register_success=you registered successfully');

                 //account could not created  
                }else{

                  header('location: register.php? error=could not create an account at the moment');

                }
                

 
                }                                                                          
              }/*if(isset($_SESSION['logged_in'])){
                header('location: account.php');
                exit;
               }

            }*/
           
           
           /*else{

            header('location: register.php?error fill in the form');
                
                

           }*/

     }


?>


<?php include('layouts/header.php');?>




      <!--Register-->
     <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Register</h2>
            <hr class="register-hr mx-auto">
        </div>
        <div class="mx-auto container col-lg-6 col-md-6">
            <form id="register-form" method="POST" action="register.php">
              <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="register-confirm-Password" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" name="register" id="register-btn" value="Register" >
                </div>
                <div class="form-group">
                    <a id="login-url" href="login.php" class="btn">Do you have account! Login Now</a>
                </div>
            </form>
        </div>
      </section>





      <?php include('layouts/footer.php');?>