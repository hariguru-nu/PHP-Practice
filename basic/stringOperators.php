<?php
    // String Operators

    // Concatenation Operators('.')
    $a = "Hello";
    $b = $a . " World!";
    echo $b;
    echo "<br>";

    //Concatenating assignment operator('.=')
    $a = "Welcome";
    $a .= " to PHP!";
    echo $a;

    // Using curly braces instead of . for concatenation
    $a = "Hello";
    echo "<p> {$a} are you hungry? </p>";

    // Using "" simple in the sentence
    echo '<p> Hello man "you didn\'t come" for the party</p>';
    echo "<p> Hello man \"you didn't come\" for the party</p>";

    $string = "Hello World";

    //Get the length of string 
    echo strlen($string);
    echo "<br>";

    //Find the position of the first occurence of a substring in string
    echo strpos($string, 'o');
    echo "<br>";

    //Find the position of the last occurence of a substring in string
    echo strrpos($string, 'o');
    echo "<br>";

    //Reverse a string
    echo strrev($string);
    echo "<br>";

    //convert all charecters into lower case
    echo strtolower($string);
    echo "<br>";

    //convert all charecters into upper case
    echo strtoupper($string);
    echo "<br>";

    //uppercase the first charecter in each word
    echo ucwords($string);
    echo "<br>";

    //String replace
    echo str_replace("World", "everyone", $string);
    echo "<br>";

    //return a position of a string specified by the offset and length
    echo substr($string, 0, 5);
    echo substr($string, 4);
    echo "<br>";

    //Starts with
    if(str_starts_with($string, "He")){
        echo "Yes";
    }

    //Ends with
    if(str_ends_with($string, "ld")) {
        echo "Yes";
    }


    $string2 = "<script>alert(hello)</script>";
    echo $string2;
    echo "<br>";

    printf("%s like to %s", "Hasid", "play football");
    echo "<br>";
    
    printf("1+1=%d", 1+3);
?>