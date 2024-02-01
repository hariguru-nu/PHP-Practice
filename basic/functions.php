<?php 
    function registerUser($email) {
        echo "$email Registered";
    }

    registerUser("Haieus");

    function sum($n1 = 43, $n2 = 21) {
        return $n1 + $n2;
    }

    $num = sum();
    echo "<p>$num</p>";

    //call function directly using $var
    $subtract = function($c1, $c2) {
        return $c1 - $c2;
    };

    echo $subtract(19, 8);
    echo "<br>";

    //call function using arrow function
    $multiply = fn($s1, $s2) => $s1 * $s2;

    echo $multiply(4, 13);