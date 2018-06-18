<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Sheep</title>
</head>
<body>
    <?php 
        function countsheep($num){
            for ( $i = 1; $i <= $num; $i++ ) {
              $my_string = $my_string . "{$i} sheep...";
            }

            return $my_string;
          }

          echo countsheep(10);
    ?>
</body>
</html>