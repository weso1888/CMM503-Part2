<?php

include("connection.php");

if(isset($_POST["submit"]))
{
    $firstname1= $_POST["firstname"];
    $lastname1 = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $name = mysqli_real_escape_string($db, $username);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);

    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        
        $query = mysqli_query($db, "INSERT INTO users (firstname, lastname, username, password, email)VALUES ('$firstname1','$lastname1','$username','$password', '$email')")or die(mysqli_error($db));
        if(($query)==1)
        {
            echo "Thank you for registering, you will be recieve an email with a link to access";
           
        }

    }
}
?>