<?php
$msg = "";
if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "1234")
    {
        header("Location: index.html");
        exit();
    }
    else
    {
        $msg = "Invalid username or password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "post">
        <?php echo $msg; ?><br><br>
   Enter Username:
   <input type = "text" name = "username"><br>
   Enter Password:
   <input type = "password" name = "password"><br>
   <input type = "submit" name = "login" value = "login">
</form>
</body>
</html>




