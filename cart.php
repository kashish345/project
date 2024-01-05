<?php

    $conn= new mysqli("localhost","root","","ks");
    $sql="SELECT * FROM cart1";
    $result=mysqli_query($conn,$sql);

?>
<html>
    <head>
        <title>feedback</title>
        <link rel="icon" href="image/bookbunker logo 2.jpg">
    </head>
    <body>
            <table border="3" cellspacing="0" cellpadding="15">
                <tr>
                    <td colspan="8" align="center">CART </tr></td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>BOOKNAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>DELETE</th>
                    <th>EDIT</th>
                </tr>
                <?php
                if(mysqli_num_rows($result)> 0)
                {
                while($row=mysqli_fetch_array($result))
                {?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['bookname'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><input type="number" id="quantity" min="1" value="1"></td>
                        <td> <a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a> </td>
                        <td> <a href="update.php?id=<?php echo $row['id'] ?>">EDIT</a> </td>
                    </tr>
                    
                    
                <?php }
               }
                ?>
            </table>
    </body>
</html>
        
