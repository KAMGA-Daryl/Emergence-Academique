<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    
    <div class="container">
        <div class="box form-box">
            <?php
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $result= mysqli_query($conn, "SELECT * FROM user WHERE Email= '$email' AND Password= '$password'") or die("select error");
                $row = mysqli_fetch_assoc ($result); 
                if(is_array($row) && !empty($row)){
                    $SESSION_['valid']= $row['Email'];
                    $SESSION_['username']= $row['Username'];
                    $SESSION_['age']= $row['Age'];
                    $SESSION_['id']= $row['Id'];

                }else{
                    echo "<div class='message'>;
                      <p> wrong Username or Password </p>
                          </div> <br>";
                    echo "<a href='index.php'> <button class='btn'>Go Back</button>";
               
                }
                if(isset($SESSION_['valid'])){
                    header("location: ondex.php");
                }
              }else{

              
            ?>

            <header>Login</header>
            <form action="" method="Post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off"  required><br><br>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" autocomplete="off"  required><br><br>
                </div>
                
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign up now</a>
                </div> 
                
            </form>
        </div>
        <?php }    ?>
    </div>
    
</body>
</html>
