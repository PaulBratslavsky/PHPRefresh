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
        <?php 
            foreach ( $days_in_the_week as $value ) {
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
    </ul>

</body>
</html>