<?php


$conn= new mysqli("localhost",  "root", "", "tion");  

if(!$conn){
    die(mysqli_error($conn));

}
else{
    print(" bienvenue");
}

?>

  