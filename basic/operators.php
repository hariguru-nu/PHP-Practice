<?php 
    //1.Arithmetic operators 
    // Identity
    $a="10";
    echo "<br>".gettype($a);
    $a="10";
    echo "<br>".gettype(+$a);

    //Negation
    $a = 40;
    echo "<br>" . "A value is " . $a;
    echo "<br>" . "A value is " . -$a;

    //Addition
    $a=23;
    $b=32;
    echo "<br> Total is : " .$a+$b;

    //Subtraction
    $a=23;
    $b=12;
    echo "<br> Total is : " .$a-$b;

    //Multiplication
    $a=20;
    $b=8;
    echo "<br> Total is : " .$a*$b;

    //Division
    $a=20;
    $b=8;
    echo "<br> Total is : " .$a/$b;

    //Modulo
    $a=20;
    $b=8;
    echo "<br> Total is : " .$a%$b;

    //Exponentiation
    $a=2;
    $b=3;
    echo "<br> Total is : " .$a**$b;
    echo "<br>";
    
    //2..Comparison operators 
    
    //Equal
    $a=55;
    $b=33;
    var_dump($a==$b);
    echo "<br>";

    //Identical
    $a=55;
    $b=33;
    var_dump($a===$b);
    echo "<br>";

    //Not eqaul
    $a=55;
    $b=33;
    var_dump($a != $b);
    echo "<br>";

    //Not identical
    $a=33;
    $b="33";
    var_dump($a !== $b);
    echo "<br>";

    //Less than
    $a=33;
    $b=34;
    var_dump($a < $b);
    echo "<br>";

    //Less than equal
    $a=33;
    $b=33;
    var_dump($a <= $b);
    echo "<br>";

    //greater than
    $a=33;
    $b=34;
    var_dump($a > $b);
    echo "<br>";

    //greater than equal
    $a=43;
    $b=34;
    var_dump($a >= $b);
    echo "<br>";

    //spaceship <=> -1 0 1
    $a=38;
    $b=36;
    var_dump($a<=>$b);
    echo "<br>";

    //3.Logical Operators
    //and operator
    $tam = 43;
    $eng = 45;
    $mat = 43;
    var_dump($tam >=35 and $eng>=35 and $mat>=35);
    echo "<br>";

    //or operator
    $tam = 43;
    $eng = 45;
    $mat = 43;
    var_dump($tam >=35 or $eng>=35 or $mat>=35);
    echo "<br>";

    // not operator
    var_dump(!$tam>=35);
    echo "<br>";

    //xor operator
    $a = true;
    $b = false;
    var_dump($a xor $b);
    echo "<br>";

    //4. Error control operators
    $v=20;
    $w=@$x + $v;
    echo "<br>";

    echo "total is : $w";

    //5.Execution operator
    echo "<pre>";
    echo `dir *.php`;
    echo "</pre>";

?>