<?php session_start();
    print_r($_GET);
    //print_r($_POST);
   echo $_GET['fn'];
    //echo $_GET["gd"];
//echo $_POST["fn"];
    $_SESSION['fn'] = $_GET['fn'];
    $_SESSION['gd'] = $_GET['gd'];
    echo $_SESSION['fn'];
    echo '<br>';
    echo $_SESSION['gd'];

?>