<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>

    <?php 
        // VARIABLES
        include("variables.php");
        // $first_name = "Paul";
        // $last_name = "Brats";

        // FUNCTION
        $addNames = function($first_name,$last_name) {
            $full_name = "{$first_name} {$last_name}";
            return $full_name;
        };

        // FUNCTION CALL
        echo $addNames($first_name,$last_name);
    ?>
</body>
</html>