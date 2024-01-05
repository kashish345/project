<html>
    <body>
        <table border="3">
            <tr>
                <td colspan="2" align="center">LOGIN FORM</td>
            </tr>
            <form action="" method="POST">
            <tr>
                <td>USERNAME</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2">Don't have an account <a href="form.php">sign up now</a></td>
                
                
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="login" ></td>
            </tr>
        </form>
        </table>
    </body>
</html>
<?php

    $conn=new mysqli("localhost","root","","ks");
    if(isset($_POST['submit']))
    {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql= "SELECT * FROM register WHERE firstname='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result ,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result); 
    if($count==1)
    {
        header("location:view.php");
    }
}
?>