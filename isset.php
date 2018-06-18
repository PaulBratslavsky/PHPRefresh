<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isset.php</title>
</head>
<body>
    <?php 
        $facts = array(
            57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
            2 => ' is the approximate hours a day Giraffes sleeps',
            18 => ' is the average hours a Python sleeps per day',
            10 => ' per cent of the world is left-handed.',
            11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
            98 => '% of the atoms in your body are replaced every year',
            69 => ' is the largest number of recorded children born to one woman',
        );
        //add your loop below this line
        
        for ($i=1; $i<=100; $i++) {
            if ( isset($facts[$i-1]) == true) {
                echo "{$facts[$i-1]} <br />";
            } else {
                echo $i . "<br />";
            }
        }

        var_dump( isset($facts[$i]) );
    ?>
</body>
</html>