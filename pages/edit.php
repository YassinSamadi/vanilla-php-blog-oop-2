<?php
    include('../Controller/Blogcontrollers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button onclick="window.history.back();">Back</button>
    <h1>Edit Post</h1>
    <form  action="../includes/editpost.php?id=<?php echo $_GET['id'];?>" method="POST">
        <input name="edittitle" type="text" placeholder="Title">
        <input name="editcontent" type="text" placeholder="Content">
        <button name="edit" type="submit" class="btn">Edit</button>
    </form>
</body>
</html>