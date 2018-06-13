<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
        $header_text = "Array's in PHP";
        print "<h1>$header_text</h1>";
    ?>
    
    <?php 
        $days_in_the_week = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
        ];

        $numbers = array(1,2,3,4,5,6,7);
    ?>

    <ul>
    <h2>Regular Array displayed using foreach()</h2> 
        <?php 
            foreach( $days_in_the_week as $value ) {
                echo "<li>{$value}</li>";
            }
        ?>
        
        <br />
        <?php echo $days_in_the_week[0]; ?>
        <br />
        <?php echo $days_in_the_week[1]; ?>
        <br />
        <?php echo $days_in_the_week[2]; ?>
        <br />
        <?php echo $days_in_the_week[3]; ?>
        <br />
        <?php echo $days_in_the_week[4]; ?>
        <br />
        <?php echo $days_in_the_week[5]; ?>
        <br />
        <?php echo $days_in_the_week[6]; ?>
        <br />
       
        
        <br />
        
        <?php
            foreach ( $numbers as $value ) {
                echo "<li>{$value}</li>";
            }
        ?>
            <h2>Example of Associarive Array</h2>
        <?php             
            
            //ASSOCIATIVE ARRAYS
            $members_profile_data = [
                "first_name" => "Paul",
                "last_name" => "Brats",
                "age" => 37,
            ];

        ?>

            <p>First Name: <?php echo $members_profile_data["first_name"]; ?></p>
            <p>Last Name:<?php echo $members_profile_data["last_name"]; ?></p>
            <p>Age: <?php echo $members_profile_data["age"]; ?></p>

        <br />

        <h2>Basic Functions for Arrays</h2>
        <?php
            //ARRAY FUNCTIONS
            $random_numbers = [4,8,6,1,2,7,3,5,10,9];
        ?>
        
            <p>Number Count: <?php echo count($random_numbers); ?></p>
            <p>Max Number: <?php echo max($random_numbers); ?></p>
            <p>Min Number: <?php echo min($random_numbers); ?></p>
            
            <p>sort() and rsort() change the original array</p>
            <p>Sort:</p> <?php sort($random_numbers); print_r($random_numbers)?>
            <p>Reverse Sort:</p> <?php rsort($random_numbers); print_r($random_numbers)?>
            <p>Turn to string implode():</p> <?php $new_string = implode(" * ",$random_numbers); ?>
            <p><?php echo $new_string ?></p>
            <p>Turn to Array explode(): <?php $new_array = explode(" * ",$new_string); ?>
            <p><?php print_r($new_array) ?></p>
            <br />
            <?php $more_ran_numbers = [1,2,3,4,5,6,7,8,9,10]; ?>
            In the Array? in_array(): <?php echo in_array(10,$more_ran_numbers); ?><br />
            In the Array? in_array(): <?php echo in_array(100,$more_ran_numbers); ?><br />


            <br />
            <?php 
                $user_data = "Paul Bratslavsky, 1 Quail Drive, Tariffville, CT, 06081";
                echo $user_data;

                $user_data_array = explode(",",$user_data);

                foreach( $user_data_array as $user_value ) {
                       echo "<p>{$user_value}</p>"; 
                };

                /*  NOTE FOR MORE ARRAY FUNCTIONS GO TO 
                    PHP DOCUMENTATION AND LOOK THEM UP
                    NO NEED TO LEARN EVERYTHING JUST NEED 
                    TO KNOW WHERE TO LOOK AND WHY STUFF WORKS
                */

                // array_push()
                // array_pop()
                // array_shift()
                //array_unshift()

        
            ?>

            <h2>More array examples using for loop</h2>
            <?php 
                $food_cart = [
                    "bannanas",
                    "chicken",
                    "ice cream",
                    "coconuts",
                    "chocolate"
                ];
            ?>
            <?php 
                $food_cart_items = count($food_cart);
                echo "There are {$food_cart_items} in your food cart";

                for( $i = 0; $i < $food_cart_items; $i++ ) {
                    echo "<br />" . $food_cart[$i];
                }; 
            ?>

            <h2>Using Array Sort asort()</h2>
            <?php 
                $my_array_of_numbers = [1,5,8,4,54,645,78,9,4,7354,63,64585,8579,53];

                foreach ($my_array_of_numbers as $number) {
                    echo "$number<br />";
                }

                asort($my_array_of_numbers);

                foreach ($my_array_of_numbers as $number) {
                    echo "{$number}<br />";
                }



            ?>


        





</body>
</html>