<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
          
          include("php/config.php");
          if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age= $_POST['age'];
            $password = $_POST['password'];
         //verifying the unique email

         $verify_query = mysqli_query($conn, "SELECT Email FROM user WHERE Email= '$email'");
         if(mysqli_num_rows($verify_query) !=0 ){
              echo "<div class='message'>
                      <p>this email is used, try another one please! </p>
                    </div> <br>";
              echo "<a href='javascript:self.history.back()'> <button class='btn'>Go Back</button>";
               
    
            }
            else{
               mysqli_query($conn,"INSERT INTO user(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or("Erroe Occured"); 
                 
                 echo "<div ='message'>
                     <p>Registration succesfuly! </p>
                      </div> <br>";
                  echo "<a href='index.php'> <button class='btn'>Login now</button>";
              
                }            
          }else{   

 
        ?>  
             <header>Sign up</header>
             <form action="" method="Post">

             <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off"  required><br><br>
                </div>


                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required><br><br>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required><br><br>
                </div>

                <div class="field input">
                    <label for="password">password</label>
                    <input type="text" name="password" id="password" autocomplete="off"  required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    already a member <a href="index.php">Sign In</a>
                </div> 
                
            </form>
                </div>
                
                <?php }    ?>

               </div>
    
 </body>
 </html>
