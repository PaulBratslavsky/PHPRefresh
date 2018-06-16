<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pointers</title>
</head>
<body>
    <?php
        $ages = [23,56,43,51,13,34,70,252,52,267,886,97];

        foreach ( $ages as $age) {
            echo current($ages) . "<br />";
            next($ages);
        }
    ?>
    <br />
    <?php
        //echo current($ages);
        foreach ( $ages as $age) {
            echo $age . "<br />";
        }
    ?>
    <br />
    <?php 
        reset($ages);
        while ( $age = current($ages) ) {
            echo $age . "<br />";
            next($ages);
        }
    ?>
</body>
</html>