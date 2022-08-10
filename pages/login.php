<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
</head>
<body>
<button onclick="window.history.back();">Back</button>
<h1>LOGIN</h1>
    <form  action="../includes/login.php" method="POST">
        <input name="emaillogin" type="text" placeholder="email">
        <input name="passwordlogin" type="password" placeholder="Password">
        <button name="login" type="submit" class="btn">Log in</button>
    </form>
</body>
</html>