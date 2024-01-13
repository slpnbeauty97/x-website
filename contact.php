<?php
include("db_conn.php");

if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email= $_POST['email'];
    $message =$_POST['contactmessage'];

   

    $sql = "INSERT INTO chris ( fullname,email,contactmessage) VALUES ('$name','$email','$message')";

    $que = mysqli_query($con,$sql);

    if($que){
        echo '<h1> Enquiry submitted successfully. We will contact you </h1>';
    }else{
        echo '<h1>Message sending failed. </h1>';
    }
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
<header>
<div class="nav">
    
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Login</a>
</div>


        <div class="center-container"id="gif-container">
            <img src="C:\Users\USER\Downloads\untitled (1).gif" alt="Your GIF" onclick="triggerAnimation()">
    
        </div>
    




        <h1>Contact Us</h1>



        


    </header>

<div class="container">


<form action="" method="POST">
    <label for="name">Your Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Your Message:</label>
    <textarea id="message" name="contactmessage" rows="4" required></textarea>

    <input type="submit" value="submit" name=submit>
</form>
</div>
</body>
</html>