<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loops</title>
</head>
<body>
    <h1>Switch Statement Practice</h1>
    <h2>Switch Statenent Example</h2>
    <pre>
        switch (value) {
            case test_value1: {
                do something;
                break;
            }
            case test_value2: {
                do something else;
                break;
            }
            default: {
                default message;
                break;
            }

        }
    </pre>

    <?php 
        $test_value = "John";
    ?>

    <?php 
        switch ($test_value) {
            case "Paul": {
                echo "<h3>Hello Paul";
                break;
            }
            case "John": {
                echo "<h3>Hello John</h3>";
                break;
            }
            default: {
                echo "<h3>You are not Paul or John</h3>";
                break;
            }
        }
    ?>
</body>
</html>