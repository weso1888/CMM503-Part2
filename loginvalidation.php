<?php
session_start();
include("connection.php");

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    $error=  "Both fields are required.";
}
else {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);

    $sql="SELECT userID FROM users WHERE username='$username' and password='$password'";

    $result=mysqli_query($db,$sql);


    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['userID'] = $row['userID'];
        header("location: index.html");
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>