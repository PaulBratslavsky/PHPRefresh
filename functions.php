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
</body>
</html>