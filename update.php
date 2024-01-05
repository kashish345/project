<?php

    $conn=new mysqli("localhost","root","","ks");
    if(isset($_POST['submit']))
    {
        $uid=$_POST['id'];
        $bn=$_POST['bookname'];
        $pr=$_POST['price'];

        $sql1="UPDATE cart SET bookname='$bn', price='$pr' WHERE id='$uid'";
        $data=mysqli_query($conn,$sql1);
        if($data==TRUE)
        {
            header("location:cart.php");
        }
    }
    if(isset($_GET['id']))
    {
        $uid=$_GET['id'];
        $sql="SELECT * FROM cart1 WHERE id='$uid'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
            while($row=mysqli_fetch_array($result))
            {
                $uid=$row['id'];
                $bn=$row['bookname'];
                $pr=$row['price'];
            }
        }
    }

?>
<html>
    <body>
        <form action="" method="POST">
            <table border="3">
                <tr>
                    <td colspan="2" align="center">UPDATE CART</td>
                </tr>
                <tr>
                    <td>BOOKNAME</td>
                    <input type="hidden" name="id" value="<?php echo $uid ?>">
                    <td><input type="text" name="bookname" value="<?php echo $bn ?>"></td>
                </tr>
                <tr>
                    <td>PRICE</td>
                    <td><input type="text" name="price" value="<?php echo $pr ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" ><input type="submit" name="submit" value="update"> 
                <input type="reset" name="reset" value="clear"></td>
                </tr>
            </table>
        </form>
    </body>
</html>