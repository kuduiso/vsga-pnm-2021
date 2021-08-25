<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style_login.css">
    </head>

    <body>
        <div style="color: white; position: absolute; left: 510px; top: 120px; font-size: 30px; background-color: black">
            ADMIN PERPUSTAKAAN
        </div>
        <div class="container">
            <h1>Login</h1>
            <form method="POST" action="cek_login.php">
                <label for="username">Username</label>
                <input type="text" name="user" id="username"><br />
                <label for="password">Password</label>
                <input type="password" name="pass" id="password">
                <button type="submit" name="submit">Log in</button>
            </form>
        </div>
    </body>
</html>