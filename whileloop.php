<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loops</title>
</head>
<body>
    <h1>While Loop Practice</h1>
    <p>Today is <?php echo date("l") ?>.</p>
    <h2>While Loop Example</h2>
    <pre>
        while (expression) {
            statement;
        }
    </pre>

    <h2>For Loop Example</h2>
    <pre>
        for (initial; test; count) {
            statement;
        }
    </pre>

     <h2>For Each Example</h2>
    <pre>
        foreach ($array as $value) {
            echo "{$value}";
        }
    </pre>

    <h2>For Each Associative Array Example</h2>
    <pre>
        foreach ($array as $key => $value) {
            echo "{$value}";
        }
    </pre>


    <?php 
        $days_of_week = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ];

        $todays_date = date("l");
    ?>
    
    <?php 
        // EXAMPLE OF WHILE LOOP 
        $count = 0;
        while ($count <= count($days_of_week) ) {
            if ($days_of_week[$count] == $todays_date) {
                echo "Today is {$todays_date}<br />";
                $count++;
            } else {
                echo "{$days_of_week[$count]}<br />";
                $count++;
            }
        }
    ?>
    <br />
    <?php 
        // EXAMPLE OF FOR LOOP 
        for ($count = 0; $count <= count($days_of_week); $count++ ) {
            if ($days_of_week[$count] == $todays_date) {
                echo "Today is {$todays_date}<br />";
            } else {
                echo "{$days_of_week[$count]}<br />";
            }
        }
    ?>
    <br />
    <?php 
        // FOR EACH LOOP
        foreach ($days_of_week as $day) {
          echo "{$day}<br />";
        }
    ?>

    <h2>Odd or Even</h2>

    <?php 
        for ($count = 20; $count >= 0; $count--) {
            if ($count % 2 == 0) {
                echo "{$count} this number is even<br />";
            } else {
                echo "{$count} this mumber is odd<br />";
            }
        }
    ?>
    <br />
    <?php 
        $person = [
            "first_name" => "Paul",
            "last_name" => "Brats",
            "age" => 38,
            "hair_color" => "Brown",
            "born" => "Moscow",
            "likes" => "Food"
        ];
        // IF WORKING WITH ARRAYS USE FOREACH
        foreach ($person as $key => $value) {
            $makeLookGood = ucwords( str_replace("_", " ", $key) );
            echo "{$makeLookGood}: {$value} <br />";
        }
    ?>
    


    
</body>
</html>