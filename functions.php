<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <pre>
        $addNames = function($first_name,$last_name) {
                $full_name = "{$first_name} {$last_name}";
                return $full_name;
            };

            or 
            
        function hello() {
            echo "hello world";
        }
       
    </pre>

    <?php 
        // VARIABLES
        $first_name = "Paul";
        $last_name = "Brats";

        // FUNCTION
        $addNames = function($first_name,$last_name) {
            $full_name = "{$first_name} {$last_name}";
            return $full_name;
        };

        // FUNCTION CALL
        echo $addNames($first_name,$last_name);

        // FUNCTION
        function hello() {
            echo "hello world";
        }

        hello();

        function blog_post($title,$content) {
            echo "<h1>$title</h1>";
            echo "<p>$content</p>";
        }

        $title = "Welcome to PHP";
        $content = "This is my blog regarding PHP.";

        $title1 = "Check This Out";
        $content1 = "This was returned by a function.";

        blog_post($title,$content);

        // RETURN MULTIPLE VALUES USING ARRAYS
        function blog_post_return($title,$content) {
            $header = "<h1>$title</h1>";
            $paragraph = "<p>$content</p>";
            return array($header,$paragraph);
        }
        // you can use list to assign returned array to variables
        foreach ( blog_post_return($title1,$content1) as $item ) {
            echo $item;
        }

        function get_name_age($var1,$var2,$var3) {
            return array($var1,$var2,$var3);
        }

        list($first,$last,$age) = get_name_age("Paul","Brats",37);

        echo $first . "<br />";
        echo $last . "<br />";
        echo $age . "<br />";

        //SETTING DEFAULT ARGUMENTS VALUES
        function showName($name = "------------") {
            echo "Your name is {$name}.";
        }

        showName("Paul Brats");
        showName();

    ?>
<br />
    <?php 
        function sayHello($arg = "blank") {
            echo "Hello $arg!<br />";
        }

        sayHello("Paul");
        sayHello("Ariya");
        sayHello();
    ?> 

<br />
    <?php 
        $array_of_names = ["Paul","Ariya","Marissa","Natasha","Katusha"];

        function showNames($arr = ["The Array is Empty"]) {
            if ( is_array($arr) ) {
                foreach ( $arr as $item ) {
                    echo "$item<br />";
                }
            } else echo "Item is not an array!";
        }

        showNames($array_of_names);
        showNames("Paul");
        showNames();

    ?>

    <br />
    <?php 
        function sayHelloOptional($first_name, $last_name = null) {
            if ($last_name) {
                echo "Hello $first_name $last_name.<br ?>";
            } else {
                echo "Hello $first_name but we also need your last name.<br />";
            }


            
        }

        sayHelloOptional("Paul","Brats");
        sayHelloOptional("Paul");
    ?>
    <br /> 

    <?php 
        //VARIABLE FUNCTIONS (WOW)
        
        function addTwo($arg1,$arg2) {
            return $arg1 + $arg2;
        }

        $sum_of_two = 'addTwo';

        echo $sum_of_two(1,1);

    ?>

    <br />

    <?php 
        //CLOSURES
        $name = "friend!";

        $greet = function () use($name) {
            echo "Hello There $name";
        };

        $greet();
    ?>

    <h2>PHP Functions Examples</h2>
    <?php 
        $myString = "My name is Paul!";        
        // echo strlen($myString);

        for ( $i = 0; $i <= strlen($myString); $i++ ) {
            echo $myString[$i] . "<br />";
        }

        function stringLength ($myString) {
            for ( $i = 0; $i <= strlen($myString); $i++ ) {
                echo "Position " . $i . " " .$myString[$i] . "<br />";
            }
        }

        stringLength("hello world!");
        stringLength($myString);

        

        echo strpos( $myString, 'Paul' );
        echo substr( $myString, 11 );
        echo substr( $myString, strpos($myString, 'Paul') );

        $myArray = [
            'sister' => 'Katusha',
            'fiance' => 'Ariya',
            'mother' => 'Natasha',
            'brother' => 'Felix'
        ];
        
        $myArrayKeys = array_keys($myArray);
        var_dump($myArrayKeys);

        foreach ( array_keys($myArray) as $name) {
            echo "Hello, $name!<br />";
        }

        function printInfo ($value, $key) {
            echo "$value is my $key<br />";
        }
        
        // ALOWS YOU TO APPLY A FUNCTION TO EACH ITEM IN THE ARRAY
        array_walk($myArray, 'printInfo');


    ?>
</body>
</html>