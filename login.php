<?php
    session_start();
    error_reporting(E_ALL);
ini_set('display_errors', 1);

    include('db_conn.php');
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $username = $_POST['nme'];
        $password =$_POST['passw'];

        $sql = "SELECT * FROM lgn WHERE username = '$username'";

        $result =mysqli_query($con,$sql);
       

        if ($result->num_rows==1){
            
            $row = $result -> fetch_assoc();

            if($password == $row['passwor']){
               $_SESSION['username']=$row['username'];
                header('location:admin.php');
            }else{
                echo '<h1> Incorrect pasword </h1>';
            }
        }else{
            echo'<h1> User not Found </h1>';
        }
        $con->close();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<style>
       .nav{
    margin-top:20px;
    position:fixed;
}
.nav a{
    text-decoration:none;
    color:black;
}
@media screen and (max-width:768px){
       
       .nav a{
           display:block;
           padding:20px;
           transition: 1s;
       }
      
   }
</style>
<body>
<div class="nav">
    
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Login</a>
</div>
<header>
        


        <div class="center-container"id="gif-container">
            <img src="C:\Users\USER\Downloads\untitled (1).gif" alt="Your GIF" onclick="triggerAnimation()">
    
        </div>
    




        <h1>Login</h1>



        


    </header>

<div class="container">


<form action="" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="fullname" name="nme" required>

    <label for="email">Password</label>
    <input type="password" id="email" name="passw" required>

   

    <input type="submit" value="submit" name=submit>
</form>
</div>
</body>
</html>