<!DOCTYPE <html>
    <html>
        <head>
            <title>Login</title>
            <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        </head>
        <body>
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            
            <label>UserName</label>
            <input type="text" name="User" placeholder="User Name">

            <label>password</label>
            <input type="password" name="Pass" placeholder="Passowrd">

            <button type="submit">Login</button>
            
            
        </form>
        </body>
       
       
     </html>

