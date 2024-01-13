<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cm.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
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

    <div class="socials">


    <a href="https://www.instagram.com/slpn.beauty/" class="social-icon instagram-icon"><img src="images/Instagram_icon.png"></a>



</div>

<div class="center-container"id="gif-container">
        <img src="C:\Users\USER\Downloads\untitled (1).gif" alt="Your GIF" onclick="triggerAnimation()">

    </div>
    <script>
        function triggerAnimation() {
            // Change the source of the image to the new GIF
            var gifImage = document.getElementById('gif-container').querySelector('img');
            gifImage.src = 'images/untitled (5).gif'; // Replace with the actual path to your second GIF
       
        // Set up an event listener for the animation completion
        gifImage.onload = function () {
                // After the animation is complete, open a new page (replace 'yourNewPage.html' with the actual page URL)
                window.location.href = 'https://www.linkedin.com/in/machariack/';

  // After the animation is complete, wait for 12 seconds and then open a new page
  setTimeout(function () {
                    // Replace 'yourNewPage.html' with the actual page URL
                    window.location.href = '';
                }, 12000); // 12000 milliseconds (12 seconds)
            












            };
        }
       
    </script>

<header>
    <h1>HiI'm <a href="https://www.linkedin.com/in/machariack/" UI/UX developer from Nairobi, Kenya</a>Enthusiastic!<br>
        
        
        about
        3DwebUI
         Designs
    
    
    
    
    </h1>



</header>

<h3> hire mmmmmme🦇</h3>


<script src="script.js"></script>
</body>
</html>

    