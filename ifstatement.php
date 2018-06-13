<?php 
/* LETS MAKE SOME IF STATEMENTS */
?>
<h1>If Statement in PHP</h1>
<strong>Example One</strong>
<pre>
    if ( something ) {
        say "Hello";
    } else {
        say "Goodbye";
    }
</pre>

<?php 
    $var_name_one = "Paul";
    $var_name_two = "John";

    if ( $var_name_two == "Paul") {
        echo "<h2>Welcome Paul</h2>";
    } elseif ( $var_name_two == "John") {
        echo "<h2>Welcome John</h2>";
    } else {
        echo "<h2>Goodbye</h2>";
    }

    echo "<code>Code Completed</code>";
?>