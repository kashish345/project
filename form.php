<html>
    <body>
        <form action="insert.php" method="POST">
            <table border="3">
                <tr>
                    <td colspan="2" align="center">FORM REGISTERATION</td>
                </tr>
                <tr>
                    <td>FIRSTNAME</td>
                    <td><input type="text" name="firstname"></td>
                </tr>
                <tr>
                    <td>LASTNAME</td>
                    <td><input type="text" name="lastname"></td>
                </tr>
                <tr>
                    <td>PHONE</td>
                    <td><input type="tel" name="phone"></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" ><input type="submit" name="submit" value="register"> 
                <input type="reset" name="reset" value="clear"></td>
                </tr>
            </table>
        </form>
    </body>
</html>