<?php 
    /*  THIS IS A STUDY AND PRACTICE OF HOW TO 
        WORK WITH VARIABLES IN PHP */

    // EXAMPLE OF CONSTANTS - IN PHP CAN ONLY SET WITH FUNCTION
    define("PIE", 3.14); // ONCE SET YOU CANT CHANGE IT or REDEFINE IT
    echo PIE; // WRITE WITH ALL CAPS

    // EXAMPLES OF VARIABLES
    $first_name = "John";
    $last_name = "Dowe";

    /*  YOU CAN SET ONE OF 5 TYPES WITH VARIABLES
            1   string
            2   int, integer
            3   float
            4   array
            5   bool, boolean
    */
    $var_string = "10";
    echo gettype($var_string);
    settype($var_string, "integer");
    echo gettype($var_string);

    (string) $string_variable = "Hello this is a stribg";
    (integer) $integer_variable = 10;
    (float) $float_variable = 5.476;
    (array) $array_variable = array(1,2,3,4,"one","two","three","four");
    (boolean) $boolean_variable = true;

    // Type casting happends automaticaly

    $var_one = 10;
    $var_two = "9.5";
    echo $var_one + $var_two;
    echo gettype($var_one);

    // You can set type to make sure that it is not handled by php automaticaly

    $var_integer_one = 10;
    echo gettype($var_integer_one);
    $var_float_one= (float) $var_integer_one; // NEEDS TO BE SAVED IN TO A NEW VAR
    echo gettype($var_float_one);

    // use settype to set it in place
    $count = "10";
    echo gettype($count);
    settype($count,"integer");
    echo gettype($count);

    $num_var_one = 11;
    $num_var_two = 11;

    echo $num_var_one + $num_var_two;

    $num_var_one = "11";
    $num_var_two = "11";
    // PHP WILL FIGURE OUT AND CONVERT
    echo $num_var_one + $num_var_two;


    $num_var_one = "11";
    $num_var_two = "11";

    echo $num_var_one . $num_var_two;


?>
