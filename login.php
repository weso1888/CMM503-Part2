<?php
include('loginvalidation.php');

if ((isset($_SESSION['username']) != ''))
{
    header('Location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMM503-Coursework2</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/unsemantic-grid-responsive-tablet.css">

</head>

<body>

<!--START OF HEADER -->
<header>
    <h1>Group Project Peer Assessment</h1>


    <div class="group_photos">
        <img src="Assets/Images/7316767744_eb5b7104c3_o.jpg" alt="Students working on group project" id="gprj">
        <img src="Assets/Images/16580685751_a48506410f_o.jpg" alt="Students working on group project 2" id="gprj2">
        <img src="Assets/Images/33356021871_01315f7aa5_o.jpg" alt="Students working on group project 3" id="gprj3">
    </div>

</header>
<!--END OF HEADER -->

<!--START OF MAIN -->
<main>

    <h6 class="h6">Log In</h6>

    <br><br>
    <form method="post" action="loginvalidation.php" class="box-form" autocomplete="on">
        <label for = "username">Username:</label>
        <input type="text" name="username" placeholder="username" class="input-text"/><br>
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password" class="input-text" />  <br>

        <div class="error"><?php ?></div>

        <input type="submit" name="submit" value = "login" /><br><br>

    </form>

    </main>
    <!--end of main -->

    <!--START OF FOOTER -->
    <footer>
        <p>(c)2017 1amW3s0ne</p>
    </footer>
    <!--END OF FOOTER -->
</body>
</html>