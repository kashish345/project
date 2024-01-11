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
        <title>non-fiction</title>
    </head>
    <body>
        <nav>
    <a href="bookbunker.php"style="padding: 20px; color:white; text-align:right">home</a>
    <a href="cart.php"style="padding: 20px; color:white; text-align:right">Cart</a><br></nav>
        <h1> Non-Fiction</h1>
        <h2>“If you only read the books that everyone else is reading,<br> you can only think what everyone else is thinking.”</h2>
        <form action="insert.php" method="POST">
        <nav>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <img src="image/doglapan.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Doglapan"><br>by Ashneer Grover | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/norweign woods.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Norweign Woods"><br>by Murakami | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 230"><br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/tsaongaf.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="The Subtle art of not giving a fuck"><br>by Mark Manson | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            </div>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <img src="image/rdpd.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Rich dad Poor dad"><br>by Robert Kiyosaki | 1 Januy 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/spare.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Spare"><br>by Prince Harry | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 230"> <br><input type="submit" name="submit" value="add to cart"><p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <img src="image/unfinished.jpeg"></img>
            <p><input type="text" readonly style="border: none; outline:none; background:none; color:white" name="bookname" value="Unfinished"><br>by Priyanka Chopra Jonas | 1 January 2014 <br> Paperback <br><input type="text" readonly style="border: none; outline:none; background:none; color:white; text-align: center" name="price" value="M.R.P: 231"> <br><input type="submit" name="submit" value="add to cart"></p>
            </div>
            </div>
        </nav>
        </form>
    </body>