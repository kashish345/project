<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/bookbunker logo 2.jpg">
    <style>
    
            body{
        padding: 10px;
        background-image: url("image/background.jpg");
        color: white;
            }
         h1,h2 {
            font-style: italic;
            text-align: center;
         }
       
        nav {
            padding: 10px;
        }

nav a {
            color:rgb(11, 10, 10);
            text-decoration: none;
            margin: 0 20px;
            font-size: larger;
            padding-left: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        </style>
        <title> romance</title>
    </head>
    <body>
        <nav>
    <a href="bookbunker.php" style="padding: 20px; color:white; text-align:right">home</a>
    <a href="cart.php" style="padding: 20px; color:white; text-align:right">Cart</a><br></nav>
        <h1> FICTION</h1>
        <h2>"It does not do to dwell on dreams and forget to live."</h2>
        <form action="insert.php" method="POST">
        <nav>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <img src="image/last queen.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="the last queen"><br>by Chetan Bhagat | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/harry potter.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Harry potter book set"><br>by Collen Hoover | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 1499"><br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/percy.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Below Zero (English)"><br>by Ali Hazelwood | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            </div>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <img src="image/forests.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Bittersweet Memories (English)"><br>by Catherina Maura | 1 Januy 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/palace.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Breaking Dawn (English)"><br>by Stephenie Meyer | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 230"> <br><input type="submit" name="submit" value="add to cart"><p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/shiva.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Eclipse (English)"><br>by Stephenie Meyer | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            </div>
        </nav>
        </form>
    </body>