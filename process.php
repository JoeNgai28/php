<?php session_start();
//    print_r($_GET);
    //print_r($_POST);
//   echo $_GET['fn'];
    //echo $_GET["gd"];
//echo $_POST["fn"];

///session var
    $_SESSION['fn'] = $_GET['fn'];
    $_SESSION['gd'] = $_GET['gd'];
//    echo $_SESSION['fn'];
//    echo '<br>';
//    echo $_SESSION['gd'];

// to use html in the process.php
//all print and echo statements needs to be 
//commented out before using any html


///email
    $t = "josephn812@gmail.com";

    $s = "New Form Lead from: ".$_GET['fn'];

    $m = "Someone just emailed you";

    $h = 'From: josephn812@gmail.com \r\n Reply-To: josephn812@gmail.com \r\n X-Mailer: PHP/'.phpversion();

    mail($t, $s, $m, $h);

//save to Json

$d = json_encode($_GET);

//file_put_content('data.json', $_GET);
file_put_contents('data.json', $d);

header('location:contact.php');

?>