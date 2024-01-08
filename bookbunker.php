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
    *{
        margin: 0;
        padding: 0;
    }
         .header {padding: 10px;
  text-align: center;
  opacity: 10;
  }

  .logo{ height: 200px; 
        width: 200px;}

h1 {padding: 10px;
  text-align: center;
  color: rgb(14, 15, 15);
  font-style: italic;}

.query { align-items: center;}
nav {
            text-align: center;
            padding: 10px;
            margin-left: 20px;

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
 
    <title>Book bunker</title>
</head>
<body>
    <div class="header">
    <img src="image/bookbunker logo 2.jpg" alt="my logo" class="logo"></img>
    </div>

    <main><br>
        <nav style="font-color: white">
            <a href="romance.php"  style="padding: 20px; color:white">Romance</a>
            <a href="thriller.php"  style="padding: 20px; color:white">Thriller</a>
            <a href="ficition.php" style="padding: 20px;color:white">Fiction</a></li>
           <a href="nonfiction.html" style="padding: 20px; color:white">Non-Fiction</a>
            <a href="horror.html" style="padding: 20px; color:white">Horror</a>
            <a href="contact.php" style="padding: 20px; color:white">Contact Us</a><br>
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <input type="submit" value="Search">
              </form>
            <!-- Add more eBooks as needed -->
        </nav>
        <h1 style="color:white">Romance</h1>
        <nav>
        <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <a href="romance.php"><img src="image/2 states.jpeg"></img></a>
            <p>2 States - The Story of My Marriage (English)<br>M.R.P: 231<br></p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="romance.php"><img src="image/all you perfect.jpeg"></img></a>
            <p>All your perfects(English) <br>M.R.P: 230<br></p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="romance.php"><img src="image/below zero.jpeg"></img></a>
            <p>Below Zero (English)<br>M.R.P: 231 </p>
            </div>
            </nav>
            <h1 style="color:white">Thriller</h1>
            <nav>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <a href="thriller.php"><img src="image/AGGTM.jpeg"></img></a>
            <p>A Good Girl's Guide To Murder (English)<br>M.R.P: 231</p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="thriller.php"><img src="image/GGBB2.jpeg" style="height: 170px; width: 170px;"></img></a>
            <p>Good Girl, Bad Blood (English)<br>M.R.P: 231</p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="thriller.php"><img src="image/as good as dead.jpeg"></img></a>
            <p>As Good As Dead (English)<br>>M.R.P: 230</p>
            </div>
            </nav>
            <h1 style="color:white">Fiction</h1>
            <nav>
            <div style="display: flex">
            <div style="background-color:; margin-left: 150px; margin-top:30px;  width: fit-content; text-align: center">
            <a href="ficition.php"><img src="image/palace.jpeg"></img></a>
            <p>A Good Girl's Guide To Murder (English)<br>M.R.P: 231</p>
            </div>
            <div style="background-color: ; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="ficition.php"><img src="image/forests.jpeg" style="height: 170px; width: 170px;"></img></a>
            <p>Good Girl, Bad Blood (English)<br>M.R.P: 231</p>
            </div>
            <div style="background-color:; margin-left: 150px; margin-top:30px; opacity:; width: fit-content; text-align: center">
            <a href="ficition.php"><img src="image/last queen.jpeg"></img></a>
            <p>As Good As Dead (English)<br>>M.R.P: 230</p>
            </div>
           
            <nav>

       
    </main>
       
            <br><br>
           
     
        
    <footer>
        <p>&copy; 2023 eBook Library</p>
    </footer>
</body>
</html>
