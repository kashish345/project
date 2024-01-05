<?php

    $conn=mysqli_connect("localhost","root","","ks");
    if(isset($_GET['id']))
    {
        $uid=$_GET['id'];
        $sql="DELETE FROM cart1 WHERE id='$uid'";
        $result=mysqli_query($conn,$sql);
        {
            header("location:cart.php");
        }

    }


?>