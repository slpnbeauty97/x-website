<?php
include('db_conn.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql ="DELETE FROM chris WHERE id = $id";

    $result =mysqli_query($con,$sql);

    if($result){
        header('location:admin.php');
    }else{
        echo'Delete failed';
    }
}

?>