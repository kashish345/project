<html>
    <head>
        <title>contact us </title>
        <link rel="icon" href="image/bookbunker logo 2.jpg">
    </head>
    <body>
        <form>
        <table cellspacing="0" cellpadding="15" border="0">
            <tr>
                <td colspan="2" align="center"><h1>Contact Us</h1></td>
            </tr>
                <tr>
                    <td><input type="text" id="firstname"></td>
                    <td><input type="text" id="phone"></td>
                    

                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="email" id="email" style="width:100% "></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="text" id="message" style="width:100%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center "><button type="submit" onclick="gotowhatsapp()" class="btn">send</button></td>
                </tr>
            </table>
        </form>
        <script>
		function gotowhatsapp() {
            
            var name =document.getElementById("firstname").value;
            var phone =document.getElementById("phone").value;
            var email =document.getElementById("email").value;
            var msg =document.getElementById("message").value;
            
            var url = "https://wa.me/+919484564698?text=" 
            + "Name: " + name + "%0a"
			+ "Phone: " + phone + "%0a"
			+ "Email: " + email + "%0a"
			+ "Message: " + msg;
            window.open(url).focus();
        }
        </script>
    
    </body>
</html>