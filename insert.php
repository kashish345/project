<?php

    $conn=new mysqli("localhost","root","","ks");
    if(isset($_POST['submit']))
    {
        $bn=$_POST['bookname'];
        $pr=$_POST['price'];

        $sql="INSERT INTO cart1(bookname,price) VALUES('$bn','$pr')";
        $result=mysqli_query($conn,$sql);
        if($result==TRUE)
        { ?>
           <script>
                alert("product added to cart successfully");
                window.location.href="romance.php";
           </script>
        <?php }
    }

?>
