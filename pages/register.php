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
<h1>Sign up</h1>
    <form action="../includes/signup.php" method="POST">
        <input name="name" type="text" placeholder="Name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="Password">
        <button name="register" type="submit" class="btn">Register</button>
    </form>
</body>
</html>