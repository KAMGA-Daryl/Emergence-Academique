<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"> Logo </a></p>
        </div>

        <div class="right-links">
            <a href="#">Change profile</a>
            <a href="php/logout.php"> <buttom class="btn">Log out</buttom></a>

        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Change profile</header>
            <form action="" method="Post">
                <div class="field input">
                    <label for="Username">Username</label>
                    <input type="text" name="Username" id="Username" autocomplete="off"  required><br>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required><br>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
               
                
            </form>
        </div>
    </div>
    
</body>
</html>