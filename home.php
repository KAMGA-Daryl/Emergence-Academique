<?php
   session_start();
  include("php/config.php");
  if(isset($_SESSION['valid'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
        <?php
             $id = $_SESSION['id'];
             $query =  mysqli_query($conn, "SELECT*FROM user WHERE ID='$id'");

             while($result= mysqli_fetch_assoc ($query)){
                    $res_uname= $result['Username'];
                    $res_Email= $result['Email'];
                    $res_Age= $result['Age'];
                    $res_id= $result['Id'];
             }
              echo "<a href='edit.php Id='$res_id'>Change profile</a>";
            ?>  n
            
            
            <a href="php/logout.php"> <buttom class="btn">Log out</buttom></a>

        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>your email is <b></b>, Welcome</p>
                </div>
            </div>
            <div class="buttom">
                <div class="box">
                    <p>And you are <b></b>, Welcome</p>

                </div>
            </div>

        </div>


    </main>
    
</body>
</html>