<?php

include("connection.php");
include("regsubmit.php");

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
    <form method="post" action="regsubmit.php" autocomplete="on">


        <h7> Create account </h7>
        <table cellspacing="10px" class="box-table">

            <tr>
                <td><label for="firstname">First name:</label></td>
                <td><input type="text" name="firstname" class="input-text" required></td>
            </tr>

            <tr>
                <td><label for="lastname">Last name:</label></td>
                <td><input type ="text" name="lastname" class="input-text" required></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type = "text" name="username" class="input-text" maxlength="10"required></td>
            </tr>

            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type ="password" name="password" class="input-text" minlength="4" maxlength="12" required></td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type ="email" name="email" class="input-text" maxlength="20" required><br><?php echo $msg;?></td>
            </tr>

        </table>
        <br>
        <div style="text-align:center">
            <input type="submit"  name="submit" value="Create your account">
        </div>
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
