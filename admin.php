<?php
session_start();
if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}
if(isset($_SESSION['username'])){
    echo"Welcome ". $_SESSION['username'] . "!";

}else{
    header('login.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <h1>Messsages</h1>

    <div class="table">
        <table>
            <tr>
                <th>Customer id</th>
                <th>name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
            <?php
            include('db_conn.php');

            $sel = "SELECT * FROM chris";
            
            $que = mysqli_query($con,$sel);

            if(mysqli_num_rows($que)<1){
                echo '<h1> No records to show in the database </h1>';
            }
            while($row=mysqli_fetch_assoc($que)){
                $enqid = $row['id'];
                $enqname =$row['fullname'];
                $enqemail =$row['email'];
                $enqmess =$row['contactmessage'];
                echo"
                <tr>
                <td>$enqid</td>
                <td>$enqname</td>
                <td>$enqemail</td>
                <td>$enqmess</td>
                <td><a href='delete.php?deleteid=$enqid'style='color:black;'>Delete</a></td>
               
                </tr>
                
                ";
            }
            ?>
        </table>
    </div>
    <div class="logout" style="margin-top:60px;">
    <a href="logout.php" class="logout" style="padding:20px;background-color:black;color:white;">Logout</a>
    </div>
</body>
</html>