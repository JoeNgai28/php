<?php session_start();
<!doctype html>
<html>
   <head>
       <title>php1</title>
   </head>
   <body>
       <?php require_once('nav.php');?>
       <h1>index</h1>
       <?php
       global $n, $z;
           $n = "james";
           $f = "smith";
           $x =3;
           $t = true;
           $a = array ('val1', 'val2');
           $a2 = ['apple','grapes','bananas'];
           $a3 = [
               "fn"=>"Mark",
               "ln"=>"garcia",
               "city"=>"ny",
               "age"=>20
           ];

           function sumof(){
                global $n, $z;
               if($n == "james"){
                   $z = "James is in the house";
               } else {
                   $z= "james is home sick";
               };
           };
           sumof();
       ?>
       <h1>Hello, <?php echo $n.' '.$f; ?></h1>
//  double quotes used to concatenate
       <h1><?php echo "My name is $n $f"; ?></h1>
//        single quotes will not work
        <h1><?php echo 'My name is $n $f'; ?></h1>
       <h2><?php print_r($a); ?></h2>
       <h2><?php print_r($a2); ?></h2>
       <h2><?php echo $a3["city"]; ?></h2>
       <h1><?php echo $z?></h1>
       <h1>
           <?php
               foreach($a3 as $index => $value){
                   echo $index.'<br>';
                   echo $value.'<br>';
               };

       ?>
       </h1>
   </body>
</html>
