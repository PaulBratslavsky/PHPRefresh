<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continue PHP</title>
</head>
<body>
    <h1>Example of Continue</h1>
    <?php 

        $my_variable = 1000;
        // Using Continue to skip
        for ( $i = 0; $i <= $my_variable; $i++ ) {
            if ( $i % 2 != 0 ) { continue; } 
            echo "$i <br />";
        }
    ?>
    <?php 
        $count = 0;
        while ( $count <= $my_variable ) {
            if ( $count == 5 ) {
                //echo "FIVE<br />";
                $count++;
                continue;
    
            }
            echo "$count <br />";
            $count++;
        }
    ?>

    
</body>
</html>