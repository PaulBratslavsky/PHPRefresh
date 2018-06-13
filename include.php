<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Include</title>
</head>
<body>
    <h1>Example of using include in PHP</h1>
    <p>PHP Include Follows Bellow</p>

    <?php 
        include("array.php"); 
        
        // ALSO WORKS
        include "functions.php";

        // INCLUDE ONCE DUH
        include_once("loop.php");
        
    ?>


    <?php  ?>
</body>
</html>