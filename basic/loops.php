<?php 
    echo "Loops in PHP";

    //For loop
    // for ($x=0; $x <=10; $x++) {
    //     echo "<p>$x</p>";
    // }

    /* ----------while loop----------*/
    $x = 1;
    while($x <= 15) {
        echo "Number" .$x ."<br>";
        $x++;
    }

    $posts = ["post1", "post2", "post3"];
    for($x=0; $x < count($posts); $x++) {
        echo "<p> $posts[$x] </p>";
    }

    //using foreach
    foreach($posts as $post) {
        echo $post;
        echo "<br>";
    }

    //using index value
    foreach($posts as $index => $post) {
        echo $index . " - " .$post ."<br>";
    }

    //using key value
    $person = [
        "firstname" => "ram",
        "lastname" => "sisar",
        "email" => "ram@gmail.com"
    ];

    foreach($person as $key => $value) {
        echo "$key - $value <br>";
    }
    