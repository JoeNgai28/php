<?php session_start();?>
<!doctype html>
<html>
    <head>
        <title>Contact Form</title>
    </head>
    <body>
        <?php require_once("nav.php")?>
        <h1>Contact Page</h1>
<!--        <form action="process.php" method="post"> -->
       <form action="process.php" method="get">
            <label>Full Name<br>
                <input type="text" name ="fn">
            </label>
            <br>
            <p>Geneder</p>
            <label>
                <input type="radio" name="gd" value="m">Male
            </label>
            <br>
            <label>
                <input type="radio" name="gd" value="f">Female
            </label>
            <br>
            <label>
                <input type="radio" name="gd" value="s">Self Identify
            </label>
            <br><br>
            <input type="submit" value="send">
        </form>
    </body>
    
</html>
